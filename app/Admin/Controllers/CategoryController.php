<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('slug', __('Slug'));
       
       $states = [
                'on' => ['value' => 1, 'text' => 'Active', 'color' => 'primary'],
                'off' => ['value' => 0, 'text' => 'Deactive', 'color' => 'danger'],
            ];
$grid->column('status')->switch($states);

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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('html_title', __('Html title'));
        $show->field('body', __('Description'));
        $show->field('body_2', __('Description Two'));
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
        $form = new Form(new Category());
        $form->tab('Content', function ($form) {
        $form->text('title', __('Title'));
        
        $form->text('slug', __('Slug'));
        
        $form->ckeditor('body', __('Description'));
        $form->ckeditor('body_2', __('Description Two'));
         
        $form->image('image', __('Image'))->move('uploads/categories')->uniqueName();

        $form->number('sort', __('Sort'));
        $form->switch('status', __('Status'))->default(1);
        
         })->tab('Meta Details', function ($form) {
             
             
         $form->text('html_title', __('Meta title'));
        $form->textarea('meta_description', __('Meta description'));
        $form->text('meta_keywords', __('Meta key'));
       
         
        
       
    });

        return $form;
    }
}
