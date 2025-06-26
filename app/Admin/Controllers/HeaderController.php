<?php

namespace App\Admin\Controllers;

use App\Models\Header;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HeaderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Menu Manager';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Header());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('url', __('Url'));
        $grid->column('target', __('Target'));
        $grid->column('parent', __('Parent'));
        $grid->column('type', __('Type'));
        // $grid->column('collection_id', __('Collection id'));
        $grid->column('status', __('Status'));
        $grid->column('sort', __('Sort'));

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
        $show = new Show(Header::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('url', __('Url'));
        $show->field('target', __('Target'));
        $show->field('parent', __('Parent'));
        $show->field('type', __('Type'));
        // $show->field('collection_id', __('Collection id'));
        $show->field('status', __('Status'));
        $show->field('sort', __('Sort'));
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
        $form = new Form(new Header());

        $form->text('name', __('Name'));
        $form->text('url', __('Url'));
        $form->select('target', __('Target'))->options(['_blank' => 'Blank', '_self' => 'Self'])->default('_self');
        $form->select('parent', __('Parent'))->options(\App\Models\Header::pluck('name', 'id'));
        $form->select('type', __('Type'))->options(['button' => 'Button', 'link' => 'Link','email' => 'Email','tel'=>'Tel'])->default('link');
        // $form->text('collection_id', __('Collection id'));
        $form->switch('status', __('Status'));
        $form->number('sort', __('Sort'));

        return $form;
    }
}
