<?php

namespace App\Admin\Controllers;

use App\Models\Page;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PageManagerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Page';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Page());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('alias', __('Alias'));
        $grid->column('redirectLink', __('View Link'));
        $grid->column('image', __('Image'))->image('/storage/', 100, 100);

        $grid->column('status')->label([
            '0' => 'default',
            '1' => 'success',
        ]);

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Page::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('alias', __('Alias'));
        $show->field('bannerheading', __('Bannerheading'));
        $show->field('bannerContent', __('BannerContent'));
        $show->field('redirectLink', __('RedirectLink'));
        $show->field('image', __('Image'));
        $show->field('alt_image', __('Alt image'));
        $show->field('keyword', __('Keyword'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Page());
         
        
      $form->tab('Content', function ($form) {
        $form->text('title', __('Title'));
        $form->text('alias', __('Alias'));
        $form->text('bannerheading', __('Bannerheading'));
        $form->textarea('bannerContent', __('BannerContent'));
        $form->text('redirectLink', __('RedirectLink'));
        $form->image('image', __('Banner Image'));
        $form->text('alt_image', __('Alt image'));
        $states = [
            'on'  => ['value' => 1, 'text' => 'enable', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'disable', 'color' => 'danger'],
        ];
        $form->switch('status', __('Status'))->states($states);

      })->tab('Meta Details', function ($form) {
       
       
        $form->text('meta_title', __('Meta title'));
        $form->textarea('meta_description', __('Meta description'));
        $form->text('meta_key', __('Meta key'));
        $form->image('og_image', __('Og Image'));
        // $form->text('schema_details', __('Schema details'));
        $form->text('canonical_url', __('Canonical url'));
         
         $form->hasMany('schema_details', function (Form\NestedForm $form) 
        {
            $form->textarea('detail', __('Detail'));
            $form->number('ordering', __('Ordering'));
        });
       
    });
       

        return $form;
    }
}
