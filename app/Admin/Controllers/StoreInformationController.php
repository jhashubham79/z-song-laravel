<?php

namespace App\Admin\Controllers;

use App\Models\StoreInformation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class StoreInformationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'StoreInformation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new StoreInformation());

        $grid->column('name', __('Name'));
        $grid->column('logo', __('Logo'));
        $grid->column('location', __('Location'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('email', __('Email'));

        // $grid->disableCreateButton();
        $grid->disablePagination();
        $grid->disableFilter();
        $grid->disableRowSelector();
        $grid->disableColumnSelector();
        $grid->disableTools();
        $grid->disableExport();

        $grid->actions(function ($actions) {
// $actions->disableDelete();
            $actions->disableView();
        });

        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new StoreInformation());

        $form->text('name', __('Name'));
        $form->image('logo', __('Logo'))->move('images/store')->uniqueName();
        $form->image('favicon', __('Favicon'))->move('images/store')->uniqueName();
        $form->text('location', __('Location'));
        $form->textarea('description', __('Description'));
        $form->text('telephone', __('Telephone'));
        $form->mobile('mobile', __('Mobile'));
        $form->email('email', __('Email'));
        $form->text('keywords', __('Keywords'));
        $form->text('year', __('Year'));

        $form->hasMany('social_media', function (Form\NestedForm $form) {
            $form->text('platform')->label(__('Platform'));
            $form->text('link')->label(__('Link'));
            $form->image('icon', __('Icon'))->move('images/store/social_media')->uniqueName()->label(false);
        });

// $form->table('opening_hours', function ($table) {
        //     $table->select('day', __('Day'))->options([
        //         'monday' => 'Monday',
        //         'tuesday' => 'Tuesday',
        //         'wednesday' => 'Wednesday',
        //         'thursday' => 'Thursday',
        //         'friday' => 'Friday',
        //         'saturday' => 'Saturday',
        //         'sunday' => 'Sunday'
        //     ]);
        //     $table->time('open', __('Open'))->default('09:00');
        //     $table->time('close', __('Close'))->default('18:00');
        // });

        // $form->tools(function (Form\Tools $tools) {
        //     $tools->disableDelete();
        //     $tools->disableList();
        //     $tools->disableView();
        // });

        return $form;
    }
}
