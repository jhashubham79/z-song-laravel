<?php

namespace App\Admin\Controllers;

use App\Models\CareerForm;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CareerFormController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Career Form';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CareerForm());

        $grid->column('id', __('Id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('location', __('Location'));
        $grid->column('department', __('Department'));

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
        $show = new Show(CareerForm::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('full_name', __('Full name'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('location', __('Location'));
        $show->field('department', __('Department'));
        $show->field('portfolio_link', __('Portfolio link'));
        $show->field('position', __('Position'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new CareerForm());

        $form->text('full_name', __('Full name'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->text('location',__('Location'));
        $form->text('department',__('Department'));
        $form->text('portfolio_link', __('PortFolio Link'));
        $form->text('position',__('position'));
        $form->file('resume',__('Resume'));
        return $form;
    }
}
