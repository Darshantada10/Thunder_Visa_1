<?php

use App\Filament\Resources\AboutResource;
use App\Http\Controllers\FrontEnd\BlogController;
use App\Http\Controllers\FrontEnd\BusinessVisaController;
use App\Http\Controllers\FrontEnd\BusinessVisitorVisaController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\ContractWorkPermitVisaController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\InternshipVisaController;
use App\Http\Controllers\FrontEnd\ProfessionalVisaController;
use App\Http\Controllers\FrontEnd\StudentVisaController;
use App\Http\Controllers\FrontEnd\TalentPassportVisaController;
use App\Http\Controllers\FrontEnd\TalentPassportWorkPermitVisaController;
use App\Http\Controllers\FrontEnd\TouristVisaController;
use App\Http\Controllers\FrontEnd\VisitorVisaController;
use App\Http\Controllers\FrontEnd\WorkPermitVisaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// use Illuminate\Support\Facades\Artisan;

// //Symbio-Link
// Route::get('/storage-link',function()
// {
//    $targetfolder= storage_path('app/public');
//     // dd($targetfolder);
//   $linkfolder= $_SERVER['DOCUMENT_ROOT'].'/storage';
//     // dd($linkfolder,"check");
//   symlink($targetfolder,$linkfolder);
// });

// //Migrate
// Route::get('/migrate', function () {
//     Artisan::call('migrate');
//     return 'Migrations have been run.';
// });

// //Migrate-Fresh
// Route::get('/migrate-fresh', function () {
//     Artisan::call('migrate:fresh');
//     return 'Migrate fresh completed.';
// });


//Home Routes
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);


//Visitor Visa Routes
Route::get('/france-visitor-visa',[VisitorVisaController::class,'index']);

//Tourist Visa Routes
Route::get('/france-tourist-visa',[TouristVisaController::class,'index']);

//Business Visit Visa Routes
Route::get('/france-business-visitor-visa',[BusinessVisitorVisaController::class,'index']);

//Business Visa Routes
Route::get('/france-business-visa',[BusinessVisaController::class,'index']);

//Professional Liberal Visa Routes
Route::get('/france-professional-visa',[ProfessionalVisaController::class,'index']);

//Talent Passport Visa Routes
Route::get('/france-talent-passport-visa',[TalentPassportVisaController::class,'index']);

//Work Permit Visa Routes
Route::get('/france-work-permit-visa',[WorkPermitVisaController::class,'index']);

//Work Permit CDI Visa Routes
Route::get('/france-contract-work-permit',[ContractWorkPermitVisaController::class,'index']);

//Talent Passport Work Permit Visa Routes
Route::get('/france-talent-passport-work-permit',[TalentPassportWorkPermitVisaController::class,'index']);

//Student Visa Routes
Route::get('/france-student-visa',[StudentVisaController::class,'index']);

//Internship Visa Routes
Route::get('/france-internship-visa',[InternshipVisaController::class,'index']);

//Blogs Routes
Route::get('/blog',[BlogController::class,'index']);
Route::get('/blog/{id}',[BlogController::class,'show']);

//About Routes
Route::get('/about-us',[AboutResource::class,'index']);

//Contact Routes
Route::get('/contact-us',[ContactController::class,'index']);

