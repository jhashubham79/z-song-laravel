<?php

namespace App\Admin\Controllers;

use App\Models\ProductOfProduct;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductOfProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product Of Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductOfProduct());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('type', __('Type'));
        $grid->column('image', __('Image'))->image('/storage/', 100, 100);
        $grid->column('description', __('Description'));
        $grid->column('cost', __('Cost'));
        $grid->column('price', __('Price'));
        $grid->column('product_id', __('Product Name'))->display(function ($categoryId) {
            return \App\Models\Product::find($categoryId)->name ?? '-';
        });
        $grid->column('sort', __('Sort'));
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
        $show = new Show(ProductOfProduct::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('type', __('Type'));
        $show->field('image', __('Image'));
        $show->field('description', __('Description'));
        $show->field('content', __('Content'));
        $show->field('alias', __('Alias'));
        $show->field('cost', __('Cost'));
        $show->field('price', __('Price'));
        $show->field('quantity', __('Quantity'));
        $show->field('product_id', __('Product id'));
        $show->field('sort', __('Sort'));
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
        $form = new Form(new ProductOfProduct());
         $form->select('product_id', __('Product Name'))->options(\App\Models\Product::pluck('name', 'id'));
        $form->text('name', __('Name'));
        $form->text('type', __('Type'));
        $form->image('image', __('Image'));
        $form->textarea('description', __('Description'));
        $form->ckeditor('content', __('Content'));
        $form->text('alias', __('Alias'));
        $form->decimal('cost', __('Cost'));
        $form->decimal('price', __('Price'));
        $form->number('quantity', __('Quantity'));
      
        $form->number('sort', __('Sort'));
        $form->switch('status', __('Status'))->default(1);

        return $form;
    }
}
