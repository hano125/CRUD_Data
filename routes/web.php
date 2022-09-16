<?php

use App\Http\Controllers\friendController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

    //---------------------frends route----------------------------->
//Route::controller(friendController::class)->group(function (){
//        Route::get('/','index');
//        Route::get('frd/create','create')->name('frd.create');
//        Route::post('frd/store','store')->name('frd.store');
//        Route::get('frd/show','show')->name('frd.show');
//        Route::get('frd/edit/{id}','edit')->name('frd.edit');
//        Route::put('frd/update/{id}','update')->name('frd.update');
//        Route::get('frd/delete/{id}','destroy')->name('frd.delete');
//});
//-----------------------POST ROUTE---------------------------------->
//Route::controller(PostController::class)->group(function (){
//    Route::get('post/create','create')->name('post.create');
//    Route::post('post/store','store')->name('post.store');
//});
//--------------------------------Localization------------------------>

    Route::controller(PostController::class)->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] )->prefix(LaravelLocalization::setLocale())->group(function (){
        Route::get('post/create','create')->name('post.create');
        Route::post('post/store','store')->name('post.store');
    });


