<?php

namespace App\Admin\Controllers;

use App\Models\Profile;
use App\Models\Duo;

use App\Models\Location;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProfileController extends AdminController
{
    protected $title = 'Profiles';

    protected function grid()
    {
        $grid = new Grid(new Profile());

        $grid->column('id', 'ID');
        $grid->column('name', 'Name');
        $grid->column('thumbnail', 'Thumbnail')->image('', 60, 60);
        $grid->column('main_location', 'Location');
        $grid->column('starting_rate', 'Starting Rate');
        $grid->column('status')->switch([
            'on'  => ['value' => 1, 'text' => 'Published', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => 'Offline', 'color' => 'danger'],
        ]);

        return $grid;
    }

    protected function detail($id)
    {
        $show = new Show(Profile::findOrFail($id));

        $show->field('name', 'Name');
        $show->field('hair', 'Hair');
        $show->field('eyes', 'Eyes');
        $show->field('nationality', 'Nationality');
        $show->field('main_location', 'Main Location');
        $show->field('bust', 'Bust');
        $show->field('dress', 'Dress');
        $show->field('orientation', 'Orientation');
        $show->field('languages', 'Languages');
        $show->field('tags', 'Tags');
        $show->field('description', 'Description');
        $show->field('whatsapp', 'Whatsapp');
        $show->field('telegram', 'Telegram');
        $show->field('starting_rate', 'Starting Rate');
        $show->field('status', 'Status');

        return $show;
    }

    protected function form()
    {
        $form = new Form(new Profile());

        $form->tab('Profile Image', function ($form) {
            $form->image('thumbnail', 'Thumbnail')->move('uploads/profiles')->uniqueName();
            $form->text('name', 'Name')->required();
            $form->text('email', 'Email')->required();
            $form->text('slug', 'Slug');

            
        });

        $form->tab('Stats', function ($form) {
            
           

             $form->select('hair', 'Hair Color')->options([
            'Black' => 'Black',
            'Brunette' => 'Brunette',
            'Brown' => 'Brown',
            'Blonde' => 'Blonde',
            'Red' => 'Red',
            'Grey' => 'Grey',
            'White' => 'White',
        ]);

        $form->select('eyes', 'Eye Color')->options([
            'Brown' => 'Brown',
            'Hazel' => 'Hazel',
            'Blue' => 'Blue',
            'Green' => 'Green',
            'Grey' => 'Grey',
            'Amber' => 'Amber',
            'Black' => 'Black',
        ]);

        $form->select('nationality', 'Nationality')->options([
            'American' => 'American',
            'British' => 'British',
            'Canadian' => 'Canadian',
            'Australian' => 'Australian',
            'Indian' => 'Indian',
            'Chinese' => 'Chinese',
            'Japanese' => 'Japanese',
            'German' => 'German',
            'French' => 'French',
            'Italian' => 'Italian',
            'Spanish' => 'Spanish',
            'Brazilian' => 'Brazilian',
            'Mexican' => 'Mexican',
            'South African' => 'South African',
            'Russian' => 'Russian',
            'Turkish' => 'Turkish',
            'Nigerian' => 'Nigerian',
            'Egyptian' => 'Egyptian',
            'Saudi' => 'Saudi',
            'Argentine' => 'Argentine',
        ]);

        $form->select('main_location', 'InCall Location')
     ->options(Location::all()->pluck('title', 'title'))
     ->required();

        $form->select('bust', 'Bust')->options([
            '28' => '28', '28A' => '28A', '28B' => '28B', '28C' => '28C', '28D' => '28D', '28DD' => '28DD',
            '30' => '30', '30A' => '30A', '30B' => '30B', '30C' => '30C', '30D' => '30D', '30DD' => '30DD',
            '32A' => '32A', '32B' => '32B', '32C' => '32C', '32D' => '32D', '32DD' => '32DD', '32E' => '32E', '32F' => '32F',
            '34A' => '34A', '34B' => '34B', '34C' => '34C', '34D' => '34D', '34DD' => '34DD', '34E' => '34E', '34F' => '34F',
            '36A' => '36A', '36B' => '36B', '36C' => '36C', '36D' => '36D', '36DD' => '36DD', '36E' => '36E', '36F' => '36F',
            '38B' => '38B', '38C' => '38C', '38D' => '38D', '38DD' => '38DD', '38E' => '38E',
            '40C' => '40C', '40D' => '40D', '40DD' => '40DD', '40E' => '40E',
            '42D' => '42D', '42DD' => '42DD',
        ]);

        $form->select('dress', 'Dress')->options([
            '6' => '6',
            '6-8' => '6-8',
            '8' => '8',
            '8-10' => '8-10',
            '10' => '10',
            '10-12' => '10-12',
            '12' => '12',
            '12-14' => '12-14',
        ]);

        $form->select('orientation', 'Orientation')->options([
            'Straight (Heterosexual)' => 'Straight (Heterosexual)',
            'Gay' => 'Gay',
            'Lesbian' => 'Lesbian',
            'Bisexual' => 'Bisexual',
            'Pansexual' => 'Pansexual',
            'Asexual' => 'Asexual',
            'Bi-curious' => 'Bi-curious',
        ]);

        $form->select('education', 'Education')->options([
    'High School' => 'High School',
    'College' => 'College',
    'Associate' => 'Associate',
    'Bachelor' => 'Bachelor',
    'Master' => 'Master',
]);


        $form->multipleSelect('languages', 'Languages')->options([
            'English' => 'English',
            'French' => 'French',
            'German' => 'German',
            'Spanish' => 'Spanish',
            'Italian' => 'Italian',
            'Dutch' => 'Dutch',
            'Russian' => 'Russian',
            'Portuguese' => 'Portuguese',
            'Arabic' => 'Arabic',
            'Romanian' => 'Romanian',
            'Polish' => 'Polish',
            'Czech' => 'Czech',
            'Greek' => 'Greek',
            'Hungarian' => 'Hungarian',
            'Farsi' => 'Farsi',
            'Hebrew' => 'Hebrew',
            'Swahili' => 'Swahili',
            'Turkish' => 'Turkish',
        ]);

            $form->text('tags', 'Tags');
            $form->ckeditor('description', 'Description');
            $form->mobile('whatsapp', 'Whatsapp');
            $form->text('telegram', 'Telegram');
            $form->currency('starting_rate', 'Starting Rate')->symbol('$');
        });

        $form->tab('Rates', function ($form) {
            $form->divider('Incall Rates');
            $form->text('incall_half_hour', 'Half Hour');
            $form->text('incall_1_hour', '1 Hour');
            $form->text('incall_2_hour', '2 Hours');
            $form->text('incall_3_hour', '3 Hours');
            $form->text('incall_3_hour_dinner_date', '3 Hours (Dinner Date)');
            $form->text('incall_overnight_9h', '9 Hours Overnight');
            $form->text('incall_overnight_12h', '12 Hours Overnight');
            
            $form->divider('Outcall Rates');
            $form->text('outcall_half_hour', 'Half Hour');
            $form->text('outcall_1_hour', '1 Hour');
            $form->text('outcall_2_hour', '2 Hours');
            $form->text('outcall_3_hour', '3 Hours');
            $form->text('outcall_3_hour_dinner_date', '3 Hours (Dinner Date)');
            $form->text('outcall_overnight_9h', '9 Hours Overnight');
            $form->text('outcall_overnight_12h', '12 Hours Overnight');

        });

        $form->tab('Locations & Categories', function ($form) {
            $form->multipleSelect('locations', 'Locations')->options(Location::all()->pluck('title', 'id'));
            $form->multipleSelect('categories', 'Categories')->options(Category::all()->pluck('title', 'id'));
        });

        $form->tab('Media', function ($form) {
            $form->multipleImage('gallery_images', 'Gallery Images')->move('uploads/gallery')->uniqueName();
            $form->multipleFile('gallery_videos', 'Gallery Videos')->move('uploads/videos')->uniqueName();
        });

        $form->tab('Visibility', function ($form) {
            $form->switch('status', 'Publish')->states([
                'on'  => ['value' => 1, 'text' => 'Published', 'color' => 'success'],
                'off' => ['value' => 0, 'text' => 'Offline', 'color' => 'danger'],
            ])->default(1);
        });






        return $form;
    }

    
}
