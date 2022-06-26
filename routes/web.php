<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RateLimitController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\FrontendController;


// Route::get('/', function () {
//     // Log::channel('custom')->debug('end point of API',[
//     // 	'user_id' =>1
//     // ]);
//     return view('welcome');
// });


Route::get('/',[FrontendController::class,'index']);
Route::get('/lessonAll',[FrontendController::class,'getlesson']);


Route::group(['middleware' => 'auth'],function(){
	
	Route::get('/dashboardForm',[PostController::class,'create']);
	Route::post('/dashboardFormSubmit',[PostController::class,'store']);
	Route::get('/lessonForm',[LessonController::class,'create']);
	Route::post('/lessonFormSubmit',[LessonController::class,'store']);

});

Route::get('/signupform',[AuthController::class,'signupform']);
Route::post('/signupsubmit',[AuthController::class,'signupsubmit']);

Route::get('/loginshow',[AuthController::class,'loginshow']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/verificationEmailUseToken/{mailTokenUse}',[AuthController::class,'verifyemailToken']);


Route::get('/limit',[RateLimitController::class,'index'])->middleware('throttle:only_three_times');
Route::get('/rateLimit',[RateLimitController::class,'Limit'])->middleware('throttle:only_two_times');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
