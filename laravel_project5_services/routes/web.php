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

route::get('/test_admin_page',function (){
    return view('dashboard.admins.admin');
});

route::get('/',function (){
    if(Auth::check())
    return view('/dashboard.admin');
    else
        return view('Auth/login');
});



//////////// dashboard Category and Applicant
Route::resource("/categories", "categoryController");                          // crud category
Route::get('/applicants', 'applicantController@index');                        // applicants table
Route::get('/category1/applicants', 'applicantController@category1_index');    // category1 applicants table
Route::get('/choose_category_form', 'categoryController@choose_category_form');    // choose category form
Route::get('/single_category_table/{id}', 'categoryController@single_category_table');    // choose category form
//Single page applicant
Route::get('singleapplicant/{id}','ApplicantController@show_applicant')->name('singleapplicant');  // single applicant page
Route::get('singleapplicant','ApplicantController@show_applicant ');                               // it does not work


////////////////// Main Website Routes
//Landing Page to show categories
Route::get('/landing_page','CategoryController@showCat');                       // landing page
Route::get('singleservice/{id}','CategoryController@singlecategory');           // applicant gallery view for each category

// to show applicant form
//Route::resource("/applicants", "applicantController");
Route::get('/applicants/create', 'applicantController@create');// show the form
Route::POST('/applicants', 'applicantController@store');       //  insert into form [action=""]

////////////////// auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//testing from adam to understand concepts
//Route::get('test','CategoryController@test');
//Route::get('test2','ApplicantController@test');
//Route::get('testing','categoryController@testing');
