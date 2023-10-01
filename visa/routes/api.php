<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Logo Routes
Route::get('/logo',[HomeController::class,'getActiveLogo']);

//Navbar Routes
Route::get('/navbar',[HomeController::class,'getActiveNavbar']);

//Slider Routes
Route::get('/slider',[HomeController::class,'getActiveSlider']);

//Visa Box Routes
Route::get('/visa-box',[HomeController::class,'getActiveVisaBox']);

//Visa Box Routes
Route::get('/about',[HomeController::class,'getActiveAbout']);

//Contact Info Routes
Route::get('/contact-info',[HomeController::class,'getActiveContactInfo']);

//Social Tags Routes
Route::get('/social-tags',[HomeController::class,'getActiveSocialTags']);

//Video title Routes
Route::get('/video-title',[HomeController::class,'getActiveVideoTitle']);

//Benefits Routes
Route::get('/benefits',[HomeController::class,'getActiveBenefits']);

//Process Routes
Route::get('/visa-process',[HomeController::class,'getActiveVisaProcess']);

//blogs Routes
Route::get('/blogs',[HomeController::class,'getActiveBlogs']);

//Single Blog Routes
Route::get('/blogs-page',[BlogController::class,'getActiveBlogs']);
Route::get('/blog/{id}',[BlogController::class,'getSingleBlog']);

//Visitor Visa
Route::get('/visitor-visa',[VisitorVisaController::class,'getActiveVisitorVisa']);

//Tourist Visa
Route::get('/tourist-visa',[TouristVisaController::class,'getActiveTouristVisa']);

//Business Visit Visa
Route::get('/tourist-visa',[TouristVisaController::class,'getActiveTouristVisa']);
