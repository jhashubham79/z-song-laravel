<?php

namespace App\Admin\Controllers;

use App\Models\Blog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BlogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Blog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Blog());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'))->image('/storage/', 100, 100);

        $grid->column('status')->label([
            'draft' => 'default',
            'published' => 'success',
        ]);

        $grid->column('sort', __('Sort'));

        $grid->column('published_at', __('Published at'))->display(function ($published_at) {
            return $published_at ? date('d-M-Y', strtotime($published_at)) : '';
        });

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
        $show = new Show(Blog::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('description', __('Description'));
        $show->field('content', __('Content'));
        $show->field('image', __('Image'));
        $show->field('alt_image', __('Alt image'));
        $show->field('status', __('Status'));
        $show->field('published_at', __('Published at'));
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
        $form = new Form(new Blog());
        
         $form->tab('Content', function ($form) {
        
        $form->text('title', __('Title'));
        $form->textarea('description', __('Description'));
        $form->ckeditor('content', __('Content'));
        $form->image('image', __('Image'));
        $form->text('alt_image', __('Alt image'));
        $form->text('keyword', __('Keywords'));
        $form->text('tag', __('Tag'));
        $form->select('status', __('Status'))->options(['draft' => 'Draft', 'published' => 'Published'])->default('draft');
        $form->datetime('published_at', __('Published at'))->default(date('Y-m-d H:i:s'));
        $form->number('sort', __('Sort'));


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
