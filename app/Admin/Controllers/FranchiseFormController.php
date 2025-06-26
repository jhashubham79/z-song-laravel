<?php

namespace App\Admin\Controllers;

use App\Models\FranchiseForm;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FranchiseFormController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Franchise Form';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FranchiseForm());
        $grid->column('id', __('Id'));
        $grid->column('full_name', __('Full name'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
        $grid->column('company_name', __('Company_name'));
        $grid->column('company_address', __('Company_address'));

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
        $show = new Show(FranchiseForm::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('full_name', __('Full name'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
        $show->field('company_name', __('Company Name'));
        $show->field('company_address', __('Company Address'));
        $show->field('learn_about_reviv', __('Learn About Reviv'));
        $show->field('previously_visited', __('Previously Visited'));
        $show->field('potential_address', __('Potential Address'));
        $show->field('reviv_services', __('Reviv_services'));
        $show->field('acknowledgement', __('Acknowledgement'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new FranchiseForm());
        $form->text('full_name', __('Full name'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));
        $form->text('company_name',__('Company Name'));
        $form->text('company_address',__('company Address'));
        $form->text('learn_about_reviv', __('Learn About Reviv'));
        $form->text('previously_visited',__('Previously Visited'));
        $form->text('potential_address',__('Potential Address'));
        $form->text('reviv_services',__('Reviv Services'));
        $form->text('acknowledgement',__('Acknowledgement'));
        $form->file('nda_file',__('Nda File'));
        return $form;
    }
}
