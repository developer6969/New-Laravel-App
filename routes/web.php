<?php

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

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/services', 'PageController@services');

Route::get('/blog', 'PageController@blog');
Route::get('/reviews', 'PageController@reviews');
Route::get('/gallery', 'PageController@gallery');

Route::get('/schedule', 'PageController@schedule');
Route::get('/contact', 'PageController@contact');
Route::get('/location', 'PageController@location');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resources([
    'users' => 'UserController',
    // 'posts' => 'PostController'
]);