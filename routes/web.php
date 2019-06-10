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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
    Route::get('/dashboard2', 'AdminController@index2');
    Route::get('/login', 'AdminController@login');
    Route::get('/register', 'AdminController@register');
    Route::get('/charts', 'AdminController@charts');
    Route::get('/error-403', 'AdminController@error403');
    Route::get('/error-404', 'AdminController@error404');
    Route::get('/error-405', 'AdminController@error405');
    Route::get('/error-500', 'AdminController@error500');
    Route::get('/form-basic', 'AdminController@formBasic');
    Route::get('/form-wizard', 'AdminController@formWizard');
    Route::get('/grid', 'AdminController@grid');
    Route::get('/icon-fontawesome', 'AdminController@fontAwesomeIcons');
    Route::get('/icon-material', 'AdminController@materialIcons');
    Route::get('/buttons', 'AdminController@buttons');
    Route::get('/calendar', 'AdminController@calendar');
    Route::get('/chat', 'AdminController@chat');
    Route::get('/elements', 'AdminController@elements');
    Route::get('/gallery', 'AdminController@gallery');
    Route::get('/invoice', 'AdminController@invoice');
    Route::get('/tables', 'AdminController@tables');
    Route::get('/widgets', 'AdminController@widgets');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
