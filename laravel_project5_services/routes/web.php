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
Route::resource("/categories", "categoryController");




//Route::resource("/applicants", "applicantController");
//write in url [/applicants/create] it will take you directly into applicant/Controller@create


// temporary route to get understand // no need to write it
Route::get('/applicants/create', 'applicantController@create');// insert into form
Route::POST('/applicants', 'applicantController@store');// insert into form
////////////
Route::get('/applicants', 'applicantController@index'); // applicants table


////////////////// auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
