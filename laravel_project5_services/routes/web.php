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

Route::get('/hi', function () {
    return view('dashboard.admin');
});

Route::get('/haaa', function () {
    return view('web.index');
});

Route::get('categories', function () {
    return view('/dashboard/category');
});

Route::resource("/categories", "categoryController");
//Route::resource("/users", "userController");



Route::get('/applicants/create', 'ApplicantController@create');// insert into form
Route::POST('/applicants', 'ApplicantController@store');// insert into form
Route::get('/applicants', 'ApplicantController@show'); // applicants table



//ٌMain Website Routes
//Landing Page to show categories
Route::get('services/','CategoryController@showCat');
Route::get('singleservice/{id}','CategoryController@singlecategory');

//Single page applicant
Route::get('singleapplicant/{id}','ApplicantController@show_applicant')->name('singleapplicant');
Route::get('singleapplicant','ApplicantController@show_applicant ');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//testing from adam to understand concepts
Route::get('test','CategoryController@test');
Route::get('test2','ApplicantController@test');
Route::get('testing','categoryController@testing');


