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

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/login', 'AdminloginController@showLoginForm');
Route::post('/admin/login/submit', 'AdminloginController@login')->name('admin.login');
Route::get('/admin/logout', 'AdminloginController@logout')->name('admin.logout');

Route::get('/admin/home' , 'AdminController@home')->middleware('auth:admin')->name('admin.home');

Route::get('/admin/create' , 'TrainingController@createTraining')->middleware('auth:admin')->name('createTraining');
Route::post('/admin/add' , 'TrainingController@addTraining')->middleware('auth:admin')->name('addTraining');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/d/trainig/{id}/{slug}', 'HomeController@details')->name('details');
