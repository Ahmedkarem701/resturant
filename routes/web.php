<?php

use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\FeedbackController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\admin\InstagramController;
use App\Http\Controllers\admin\MenuCategoryController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\PartnerController;
use App\Http\Controllers\admin\StunningController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\SpecialController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\LayoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->middleware('lang');
Route::post('/message/send',[ContactController::class,'contact']);
Route::post('/booking/send',[BookingController::class,'booking']);
Route::get('/lang/set/{lang}',[LangController::class,'set']);

Route::prefix('/dashboard')->middleware('auth')->group(function (){
    // Home
    Route::get('/',[AdminHomeController::class,'index']);
    // Blog
    Route::get('/blog',[BlogController::class,'index']);
    Route::post('/blog/store',[BlogController::class,'store']);
    Route::post('/blog/update/{id}',[BlogController::class,'update']);
    Route::get('/blog/delete/{id}',[BlogController::class,'delete']);
    // Feedback
    Route::get('/feedback',[FeedbackController::class,'index']);
    Route::post('/feedback/store',[FeedbackController::class,'store']);
    Route::post('/feedback/update/{id}',[FeedbackController::class,'update']);
    Route::get('/feedback/delete/{id}',[FeedbackController::class,'delete']);
    // Contact
    Route::get('/contact',[AdminContactController::class,'index']);
    // Gallery
    Route::get('/gallery',[GalleryController::class,'index']);
    Route::post('/gallery/store',[GalleryController::class,'store']);
    Route::post('/gallery/update/{id}',[GalleryController::class,'update']);
    Route::get('/gallery/delete/{id}',[GalleryController::class,'delete']);
    // Instagram Images
    Route::get('/instagram',[InstagramController::class,'index']);
    Route::post('/instagram/store',[InstagramController::class,'store']);
    Route::post('/instagram/update/{id}',[InstagramController::class,'update']);
    Route::get('/instagram/delete/{id}',[InstagramController::class,'delete']);
    // Menu Categories
    Route::get('/menucats',[MenuCategoryController::class,'index']);
    Route::post('/menucats/store',[MenuCategoryController::class,'store']);
    Route::post('/menucats/update/{id}',[MenuCategoryController::class,'update']);
    Route::get('/menucats/delete/{id}',[MenuCategoryController::class,'delete']);
    // Menu
    Route::get('/menu',[MenuController::class,'index']);
    Route::post('/menu/store',[MenuController::class,'store']);
    Route::post('/menu/update/{id}',[MenuController::class,'update']);
    Route::get('/menu/delete/{id}',[MenuController::class,'delete']);
    // Partners
    Route::get('/partner',[PartnerController::class,'index']);
    Route::post('/partner/store',[PartnerController::class,'store']);
    Route::post('/partner/update/{id}',[PartnerController::class,'update']);
    Route::get('/partner/delete/{id}',[PartnerController::class,'delete']);
    // Setting
    Route::get('/setting',[SettingController::class,'index']);
    Route::post('/setting/update/1',[SettingController::class,'update']);
    // Stunning Things
    Route::get('/stunning',[StunningController::class,'index']);
    Route::post('/stunning/store',[StunningController::class,'store']);
    Route::post('/stunning/update/{id}',[StunningController::class,'update']);
    Route::get('/stunning/delete/{id}',[StunningController::class,'delete']);
    // Team
    Route::get('/team',[TeamController::class,'index']);
    Route::post('/team/store',[TeamController::class,'store']);
    Route::post('/team/update/{id}',[TeamController::class,'update']);
    Route::get('/team/delete/{id}',[TeamController::class,'delete']);
    // Special Offers
    Route::get('/special',[SpecialController::class,'index']);
    Route::post('/special/store',[SpecialController::class,'store']);
    Route::post('/special/update/{id}',[SpecialController::class,'update']);
    Route::get('/special/delete/{id}',[SpecialController::class,'delete']);
});
