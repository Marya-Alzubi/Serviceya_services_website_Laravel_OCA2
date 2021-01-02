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

//single


//Single page applicant
Route::get('singleapplicant/{id}','ApplicantController@show_applicant')->name('singleapplicant');  // single applicant page


////////////////// Main Website Routes
//Landing Page to show categories
Route::get('/landing_page','CategoryController@showCat');                       // landing page
Route::get('singleservice/{id}','CategoryController@singlecategory');           // applicant gallery view for each category

//Single page applicant
Route::get('singleapplicant/{id}','ApplicantController@show_applicant')->name('singleapplicant');  // single applicant page


// to show applicant form
//Route::resource("/applicants", "applicantController");
// Route::get('/applicants/create', 'ApplicantController@create');     // show the form, commented to put route for pending
// Route::POST('/applicants', 'ApplicantController@store');            //  insert into form [action=""]

////////////////// auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//testing from adam to understand concepts
//Route::get('test','CategoryController@test');
//Route::get('test2','ApplicantController@test');
//Route::get('testing','categoryController@testing');




/* start
//******* /1/2020*********/
Route::get('/choose_category_form', 'CategoryController@choose_category_form');    // choose category form
Route::post('/single_category_table', 'categoryController@single_category_table');    // choose category form
//******* 1/1/2020*********//

//Friday Work
//this route goes to single applicant page dashboard
Route::get('pending_request/{id}','ApplicantController@pending_request');



//Pending Requests Routes, from register form, post request
Route::get('/applicants/create','PendingRequestController@create');
Route::post('/applicants','PendingRequestController@store');


//this will be shown when admin click on Pending Request Page in the left side
Route::get('pending','PendingRequestController@show');
Route::get('singlepending/{id}','PendingRequestController@singlepending');

Route::get('singlepending/{id}','PendingRequestController@singlepending');


//
Route::get('/add_to_applicant/{id}','ApplicantController@Add_to_applicant');
Route::get('/add_to_rejected/{id}','RejectedController@Add_to_rejected');
// Route::get('/add_to_rejected/{id}','PendingRequestController@destroy');
