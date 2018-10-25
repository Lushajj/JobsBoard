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
Route::get('/jobs-list', 'JobsController@show')->name('jobs-list');
Route::get('/candidate-list', 'CandidateController@show')->name('candidate-list');

Route::get('/login', 'UserController@show')->name('login');

Route::get('/signup', 'SignupController@show')->name('signup');
Route::post('/signup', 'SignupController@person_register');
Route::post('/signupcompany', 'SignupController@company_register')->name('company-register');
