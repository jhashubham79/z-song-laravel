<?php

namespace App\Admin\Controllers;
use App\Models\Duo;
use App\Models\Profile;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;


class DuoController extends AdminController
{
    protected $title = 'Duos';

    protected function grid()
    {
        $grid = new Grid(new Duo());

        $grid->column('id', 'ID');
        $grid->column('profileOne.name', 'Profile One');
        $grid->column('profileTwo.name', 'Profile Two');
        $grid->column('created_at', 'Created');


        $grid->actions(function ($actions) {
    $actions->disableView();
});

        return $grid;
    }

    protected function detail($id)
{
    $show = new Show(Duo::findOrFail($id));

    $show->field('id', 'ID');
    $show->field('profileOne.name', 'Profile One');
    $show->field('profileTwo.name', 'Profile Two');
    $show->field('created_at', 'Created At');
    $show->field('updated_at', 'Updated At');

    return $show;
}



 protected function form()
    {
        $form = new Form(new Duo());

        // Show all profiles in the first dropdown
        $form->select('profile_one_id', 'Select Profile 1')
            ->options(Profile::all()->pluck('name', 'id'))
            ->required()
            ->load('profile_two_id', 'available-second-profile'); // 👈 Dynamic load second dropdown

        // Second dropdown will be dynamically loaded
        $form->select('profile_two_id', 'Select Profile 2')
            ->options([])
            ->required();

        return $form;
    }

    // ✅ AJAX endpoint to load second profile options
    public function availableSecondProfile(Request $request)
{
    $profileOneId = $request->get('q');

    if (!$profileOneId) {
        return response()->json([]);
    }

    // Get duos where the selected profile is involved
    $duos = Duo::where('profile_one_id', $profileOneId)
        ->orWhere('profile_two_id', $profileOneId)
        ->get();

    $pairedIds = collect([$profileOneId]);
    foreach ($duos as $duo) {
        $pairedIds->push($duo->profile_one_id);
        $pairedIds->push($duo->profile_two_id);
    }

    $excludeIds = $pairedIds->unique();

    // Get available profiles (id + name)
    $availableProfiles = Profile::whereNotIn('id', $excludeIds)->get();

    // Return format expected by select2
    $result = $availableProfiles->map(function ($profile) {
        return [
            'id' => $profile->id,     // must be integer
            'text' => $profile->name, // label to show in dropdown
        ];
    });

    return response()->json($result);
}






}
