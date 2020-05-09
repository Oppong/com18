<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/info', function () {
    return view('info');
});

// these are the routes for the main pages
Route::get('/', 'PagesController@index')->name('homepage');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



// Administration panel routes
Route::prefix('admin')->group(function(){
    Route::get('adminhome', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
    Route::resource('slider','Admin\SliderController');
    Route::resource('event','Admin\EventsController');
});
