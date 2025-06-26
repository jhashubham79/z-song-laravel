<?php

namespace App\Admin\Controllers;

use App\Models\OurClinics;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OurClinicController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Our Clinics';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OurClinics());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('location', __('Location'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('image', __('Image'))->image('/storage/', 100, 100);
        $grid->column('open_times', __('Open times'));
        $grid->column('close_times', __('Close times'));
        $grid->column('g_map_location', __('G map location'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));

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
        $show = new Show(OurClinics::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('location', __('Location'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));

        $show->field('open_times', __('Open times'));
        $show->field('close_times', __('Close times'));
        $show->field('g_map_location', __('G map location'));
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
        $form = new Form(new OurClinics());

        $form->text('name', __('Name'));
        $form->text('location', __('Location'));
        $form->text('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->image('image', __('Image'))->move('uploads/ourclinics')->uniqueName();
        $form->text('open_times', __('Open times'));
        $form->text('close_times', __('Close times'));
        $form->text('g_map_location', __('G map location'));
        $form->switch('status', __('Status'))->default(1);

        return $form;
    }
}
