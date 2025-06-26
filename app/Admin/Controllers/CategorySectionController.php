<?php

namespace App\Admin\Controllers;

use App\Models\CategorySection;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategorySectionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Category Section';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CategorySection());

        $grid->column('id', __('Id'));

        $grid->column('category_id', __('Category Name'))->display(function ($categoryId) {
            return \App\Models\Category::find($categoryId)->title ?? '-';
        });

        $grid->column('type', __('Type'));
        $grid->column('heading', __('Heading'));
        $grid->column('description', __('Description'));
        $grid->column('custom_link', __('Custom link'));
        $grid->column('link_name', __('Link name'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(CategorySection::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('type', __('Type'));
        $show->field('heading', __('Heading'));
        $show->field('description', __('Description'));
        $show->field('custom_link', __('Custom link'));
        $show->field('link_name', __('Link name'));
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
        $form = new Form(new CategorySection());

        $form->select('category_id', __('Category Name'))->options(\App\Models\Category::pluck('title', 'id'));
        $form->text('type', __('Type'));
        $form->text('heading', __('Heading'));
        $form->textarea('description', __('Description'));
        $form->text('custom_link', __('Custom link'));
        $form->text('link_name', __('Link name'));

        $form->hasMany('with_image_data', __('Multiple Records'), function (Form\NestedForm $form) {
            $form->image('image', __('Image'))->move('images/store/category_data')->uniqueName()->label(false);
            $form->text('sub_heading',__('Sub Heading'));
            $form->textarea('description', __('Description'));
        });

        return $form;
    }
}
