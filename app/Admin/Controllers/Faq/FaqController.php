<?php

namespace App\Admin\Controllers\Faq;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\FAQ\Faq;
use App\Models\FAQ\Type;
use Encore\Admin\Controllers\AdminController;

class FaqController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Faq';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Faq());

        $grid->column('id', __('Id'));
        $grid->column('faq_type_id', __('Faq type'))->display(function ($faqId) {
            return Type::find($faqId)->name ?? '-';
        });
        $grid->column('question', __('Question'));
        $grid->column('answer', __('Answer'));
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
        $show = new Show(Faq::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('faq_type_id', __('Faq type id'));
        $show->field('question', __('Question'));
        $show->field('answer', __('Answer'));
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
        $form = new Form(new Faq());

        $form->select('faq_type_id', __('Faq type'))->options(Type::pluck('name', 'id'));
        $form->text('question', __('Question'));
        $form->ckeditor('answer', __('Answer'));

        return $form;
    }
}
