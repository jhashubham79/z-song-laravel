<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('type', __('Type'));
        $grid->column('image', __('Image'))->image('/storage/', 100, 100);
        $grid->column('description', __('Description'));
        $grid->column('cost', __('Cost'));
        $grid->column('price', __('Price'));
        $grid->column('category_id', __('Category Name'))->display(function ($categoryId) {
            return \App\Models\Category::find($categoryId)->title ?? '-';
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
        $show = new Show(Product::findOrFail($id));

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
        $show->field('category_id', __('Category id'));
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
        $form = new Form(new Product());
        
        $form->tab('Content', function ($form) {
        $form->text('alias', __('Alias'));
         $form->select('category_id', __('Category id'))->options(\App\Models\Category::pluck('title', 'id'));
         $form->text('banner_heading', __('Banner Heading'));
        $form->text('banner_subheading', __('Banner Subheading'));
        $form->image('banner_image', __('Banner Image'));
        $form->text('alt', __('Alt'));
        
        
        
        $form->text('name', __('Name'));
        $form->text('type', __('Type'));
        $form->image('image', __('Image'));
        $form->textarea('description', __('Description'));
        $form->ckeditor('content', __('Content'));
        
        $form->decimal('cost', __('Cost'));
        $form->decimal('price', __('Price'));
        $form->number('quantity', __('Quantity'));
        
        $form->number('sort', __('Sort'));
        $form->switch('status', __('Status'))->default(1);
        })->tab('Related Product', function ($form) {
         $form->text('related_product_heading', __('Related Product Heading'));
         $form->text('related_product_sub_heading', __('Related Product Sub Heading'));
        // $form->multipleSelect('related_product', __('Related Product'))->options(\App\Models\Product::get()->pluck('name', 'id'))->help('Select only two related products.');
        $form->divider('First Product');
        $form->text('related_product_one_title', __('Title'));
        $form->text('related_product_one_sub_title', __('Sub Title'));
        $form->text('related_product_one_groupcode', __('Group Code'));
        $form->textarea('related_product_one_description', __('Description'));
         $form->text('related_product_one_url', __('Url'));
        
       $form->divider('Secound Product');
       
       $form->text('related_product_two_title', __('Title'));
        $form->text('related_product_two_sub_title', __('Sub Title'));
        $form->text('related_product_two_groupcode', __('Group Code'));
        $form->textarea('related_product_two_description', __('Description'));
         $form->text('related_product_two_url', __('Url'));
        

        

    
     })->tab('Contact Details', function ($form) {
         $form->text('contact_heading', __('Heading'));
         $form->text('contact_sub_heading', __('Sub Heading'));
         $form->text('contact_number', __('Phone'));
         $form->text('contact_email', __('Email'));
         $form->image('contact_image', __('Image'));
         $form->textarea('contact_content', __('Description'));
         $form->text('button_text', __('Button Text'));
         $form->text('url', __('Url'));
        
        })->tab('Key Nutrients', function ($form) {
         $form->text('key_nutrient_heading', __('Heading'));
        $form->hasMany('nutrient', function (Form\NestedForm $form) 
        {
       
        $form->text('title','Title');
        $form->text('subtitle','Sub Title');
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->number('ordering', __('Ordering'));
        
        
        $this->states = [
            'on'  => ['value' => 1, 'text' => 'Active', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Deactive', 'color' => 'danger'],
        ];
        $form->switch('status', __('Status'))->states($this->states);      
            });
        
        })->tab('Overview', function ($form) {
            $form->text('overview_heading', __('Heading'));
        $form->hasMany('overview', function (Form\NestedForm $form) 
        {
         $form->text('title','Title');
         $form->text('subtitle','Sub Title');
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->number('ordering', __('Ordering'));
        
        
        $this->states = [
            'on'  => ['value' => 1, 'text' => 'Active', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Deactive', 'color' => 'danger'],
        ];
        $form->switch('status', __('Status'))->states($this->states);      
             
            });
        
        })->tab('Key Nutrients Details', function ($form) {
       
         $form->text('nutrientstitle','Title');
        $form->image('nutrientsimage', __('Image'));
        $form->text('nutrientsalt', __('Alt'));
        $form->ckeditor('nutrientscontent', __('Content'));
        $form->text('doctar_name','Doctar Name');
        $form->text('doctar_deg','Doctar Designation');
         $form->ckeditor('suggestion', __('Suggestion'));
            
           
        
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
