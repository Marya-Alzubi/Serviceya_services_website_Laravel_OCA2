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


////////////////// Main Website Routes
//Landing Page to show categories
Route::get('/','CategoryController@showCat');    // landing page
Route::get('singleservice/{id}','CategoryController@singlecategory'); // lm tazbot mana          // applicants gallery view for each category

//Single page foreach applicant
Route::get('singleapplicant/{id}','ApplicantController@show_applicant')->name('singleapplicant');//lm tazbot mana // Single page foreach applicant



////////////////// Dashboard Categories and Applicants
Route::resource("/categories", "CategoryController");                          // crud category
Route::get('/applicants', 'ApplicantController@index');                        // applicants table



// to show applicant form
//Route::resource("/applicants", "applicantController");
// Route::get('/applicants/create', 'ApplicantController@create');     // show the form, commented to put route for pending
// Route::POST('/applicants', 'ApplicantController@store');            //  insert into form [action=""]


////////////////// auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// it is does not work maybe because the disabled dashboard
route::get('/dashboard',function (){
    if(Auth::check())
        return view('/dashboard.index_dashboard');
    else
        return view('Auth/login');
});

/* start
//******* 1/1/2020*********/
Route::get('/choose_category_for
m', 'CategoryController@choose_category_form');    // choose category form
Route::post('/single_category_table', 'categoryController@single_category_table');    // choose category form


//Friday Work
//this route goes to single applicant page dashboard
Route::get('pending_request/{id}','ApplicantController@pending_request'); // id for category


//Pending Requests Routes, from register form, post request
Route::get('/applicants/create','PendingRequestController@create');
Route::post('/applicants','PendingRequestController@store');


//this will be shown when admin click on Pending Request Page in the left side
Route::get('pending','PendingRequestController@show');
Route::get('singlepending/{id}','PendingRequestController@singlepending'); // id for pending_request ([service provider])



//
Route::get('/add_to_applicant/{id}','ApplicantController@Add_to_applicant'); // sho hyda ya aida
Route::get('/add_to_rejected/{id}','RejectedController@Add_to_rejected');    // sho hyda ya aida
// Route::get('/add_to_rejected/{id}','PendingRequestController@destroy');








//testing from adam to understand concepts
//Route::get('test','CategoryController@test');
//Route::get('test2','ApplicantController@test');
//Route::get('testing','categoryController@testing');


