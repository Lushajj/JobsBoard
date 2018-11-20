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

Route::get('/', 'HomeController@show')->name('anasayfa');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/jobs-list', 'JobsController@show')->name('jobs-list');
Route::get('/candidate-list', 'CandidateController@show')->name('candidate-list');

Route::get('/login', 'UserController@show')->name('login');
Route::post('/login-control', 'UserController@login')->name('login-control');

Route::get('/signup', 'SignupController@show')->name('signup');
Route::post('/signup', 'SignupController@person_register');
Route::post('/signupcompany', 'SignupController@company_register')->name('company-register');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function(){
    Route::redirect('/','admin/oturumac');
    Route::match(['get','post'],'/oturumac','UsersController@login')->name('admin.oturumac');

    Route::group(['middleware' => 'admin'], function(){
        Route::get('anasayfa','HomeController@show')->name('admin.home');
        Route::get('company','CompanyController@show')->name('admin.company');
        Route::post('company-status','CompanyController@status')->name('admin.company.status');
        Route::post('company-delete','CompanyController@delete')->name('admin.company.delete');
    });

});
