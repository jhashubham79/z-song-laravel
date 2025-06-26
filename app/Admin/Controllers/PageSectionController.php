<?php

namespace App\Admin\Controllers;

use App\Models\Page;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\PageSection;
use Encore\Admin\Controllers\AdminController;




class PageSectionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Page Section';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PageSection());

        $grid->column('id', __('Id'));
        $grid->column('page_api_endpoint', __('Page api endpoint'));
        $grid->column('page_id', __('Page'))->select(Page::pluck('title','id')->toArray());
        
        $grid->column('type', __('Type'));
        $grid->column('title', __('Title'));
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
        $show = new Show(PageSection::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('page_api_endpoint', __('Page api endpoint'));
        $show->field('type', __('Type'));
        $show->field('title', __('Title'));
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
        $form = new Form(new PageSection());
        
        $form->tab('Content', function ($form) {
            
        $form->select('page_id', __('Page'))->options(Page::pluck('title', 'id'));
        $form->text('api_key', __('api_key'));
        $form->text('type', __('Type'));
        $form->text('title', __('Heading'));
        $form->text('sub_title', __('Subheading'));
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->text('introtext', __('Introtext'));
        $form->ckeditor('description', __('Description'));
        $form->text('button_text', __('Button Text'));
        $form->text('url', __('Url'));
         $form->number('ordering', __('Ordering'));
      
        $form->hasMany('contact_data', function (Form\NestedForm $form) {
            $form->image('icon', __('Icon'))->move('images/store/contact_data')->uniqueName()->label(false);
            $form->text('sub_title',__('Sub Title'));
            $form->text('sub_type', __('Sub Type'));
            $form->textarea('description', __('Description'));
            $form->text('link', __('Link'));
            $form->text('value',__('Value'));
        });
        
       
        })->tab('Section Gallery', function ($form) {
        $form->hasMany('gallery', function (Form\NestedForm $form) 
        {
        $form->text('sub_title','Sub Heading');
        $form->text('title','Title');
        $form->image('image', __('Image'));
        $form->text('alt', __('Alt'));
        $form->number('ordering', __('Ordering'));
        $form->text('url',__('URL'));
        
        $this->states = [
            'on'  => ['value' => 1, 'text' => 'Active', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Deactive', 'color' => 'danger'],
        ];
        $form->switch('status', __('Status'))->states($this->states);      
            });
        
        })->tab('Section List', function ($form) {
        $form->hasMany('section_list', function (Form\NestedForm $form) 
        {
        $form->text('sub_title', __('Sub Heading'));
        $form->text('title','Title');
        $form->image('thumb_image', __('Thumb Image'));
        $form->text('thumb_alt', __('Thumb Image Alt'));
        $form->image('image', __('Image'));
        $form->file('file', __('File'));
        $form->text('alt', __('Alt'));
        $form->ckeditor('content', __('Content'));
        
        $form->text('accordion_one', __('Title one for accordion'));
        $form->textarea('accordion_content_one', __('Content one for accordion'));
        
        $form->text('accordion_two', __('Title two for accordion'));
        $form->textarea('accordion_content_two', __('Content two for accordion'));
        
        $form->text('accordion_three', __('Title three for accordion'));
        $form->textarea('accordion_content_three', __('Content three for accordion'));
       
        
        $form->text('button_text', __('Button Text'));
        $form->text('url', __('Url'));
        $form->text('price', __('Price'));
        $form->text('cost', __('Cost'));
        $form->number('ordering', __('Ordering'));
        
        $this->states = [
            'on'  => ['value' => 1, 'text' => 'Active', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Deactive', 'color' => 'danger'],
        ];
         $form->switch('status', __('Status'))->states($this->states);      
            });
        
        
        });
        

        return $form;
    }
}
