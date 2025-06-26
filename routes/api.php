<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\EnquireController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\CareerFormController;
use App\Http\Controllers\Api\LinkManagerController;
use App\Http\Controllers\Api\CategoryAndProductController;
use App\Http\Controllers\Api\HomeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('/page/{slug}', [App\Http\Controllers\Api\HomeController::class, 'index']);

Route::get('/header', [HomeController::class, '_headermenu']);

Route::get('links', [LinkManagerController::class,'getLinksByGroupAndSort']);


Route::get('blogs', [BlogController::class,'getBlogList']);
Route::get('blog/{slug}', [BlogController::class,'getBlogBySlug']);

Route::get('faqs', [FaqController::class,'getFaqList']);


Route::post('enquire', [EnquireController::class,'store']);

Route::post('contact-form', [ContactUsController::class,'storecontact']);
Route::post('career-form', [CareerFormController::class,'careerform']);
Route::post('franchise-form', [CareerFormController::class,'franchiseForm']);

Route::get('contact-us', [ContactUsController::class,'getContactUsPage']);

Route::get('categories', [CategoryAndProductController::class,'getAllActiveCategories']);
Route::get('products-by-category/{alias}', [CategoryAndProductController::class,'getAllProductByCategorieAlias']);
Route::get('product/{alias}', [CategoryAndProductController::class,'getProductByAlias']);


