<?php

use Illuminate\Routing\Router;


use App\Admin\Controllers\DuoController;



Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('duo/available-second-profile', [DuoController::class, 'availableSecondProfile']);

    $router->resource('link-groups', Link\LinkGroupController::class);
    $router->resource('link-managers', Link\LinkManagerController::class);

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('blogs', BlogController::class);

     $router->resource('locations', LocationController::class);
     $router->resource('profile', ProfileController::class);
     $router->resource('duo', DuoController::class);


    $router->resource('enquires', EnquireController::class);

    $router->resource('pages', PageManagerController::class);

    $router->resource('faq-types', Faq\TypeController::class);

    $router->resource('faqs', Faq\FaqController::class);

    $router->resource('our-clinics', OurClinicController::class);

    $router->resource('page-sections', PageSectionController::class);

    $router->resource('categories', CategoryController::class);

    $router->resource('category-sections', CategorySectionController::class);

    $router->resource('products', ProductController::class);

    $router->resource('store-informations', StoreInformationController::class);

    $router->resource('product-of-products', ProductOfProductController::class);
    
    $router->resource('contact-form', ContactFormController::class);
    
    $router->resource('career_enquiry', CareerFormController::class);
    
    $router->resource('franchise_enquiry', FranchiseFormController::class);
    
    $router->resource('menu', HeaderController::class);
    
});
