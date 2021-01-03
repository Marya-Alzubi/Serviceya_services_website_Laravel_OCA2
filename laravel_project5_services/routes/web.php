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
Route::get('/landing_page','CategoryController@showCat');    // landing page
Route::get('singleservice/{id}','CategoryController@singlecategory'); // lm tazbot mana          // applicants gallery view for each category

//Single page foreach applicant
Route::get('singleapplicant/{id}','ApplicantController@show_applicant')->name('singleapplicant');//lm tazbot mana // Single page foreach applicant



////////////////// Dashboard Categories and Applicants
Route::resource("/categories", "CategoryController");                          // crud category
//Route::get("/categories", "CategoryController@index");
//Route::post("/categories", "CategoryController@store");
//Route::get("/categories/create", "CategoryController@create");
////Route::get("/categories/{id}", "CategoryController@show");
//Route::get("/categories/{id}/edit", "CategoryController@edit");
//Route::PUT("/categories/{id}", "CategoryController@update");
//Route::DELETE("/categories/{id}", "CategoryController@delete");



Route::get('/applicants', 'ApplicantController@index');                        // applicants table



// to show applicant form
//Route::resource("/applicants", "applicantController");
// Route::get('/applicants/create', 'ApplicantController@create');     // show the form, commented to put route for pending
// Route::POST('/applicants', 'ApplicantController@store');            //  insert into form [action=""]


////////////////// auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// it is does not work maybe because the disabled dashboard
route::get('/',function (){
    if(Auth::check())
        return view('/dashboard/index_dashboard');
    else
        return view('Auth/login');
});

/* start
//******* 1/1/2020*********/
Route::get('/choose_category_form', 'CategoryController@choose_category_form');    // choose category form
Route::post('/dynamic_category_table', 'CategoryController@dynamic_category_table');    // choose category form
//Route::get('/dynamic_category_table', 'CategoryController@dynamic_category_table_test');     // choose category form


//Friday Work
//this route goes to single applicant page dashboard
Route::get('dynamic_accepted_applicant/{id}','ApplicantController@dynamic_accepted_applicant'); // id for category


//Pending Requests Routes, from register form, post request
Route::get('/applicants/create','PendingRequestController@create');
Route::post('/applicants','PendingRequestController@store');


//this will be shown when admin click on Pending Request Page in the left side
Route::get('pending','PendingRequestController@show');
Route::get('singlepending/{id}','PendingRequestController@singlepending'); // id for pending_request ([service provider])
Route::get('delete_accepted_record_db','PendingRequestController@delete_accepted_record_db');



//
Route::get('/add_to_applicant/{id}','ApplicantController@Add_to_applicant'); // sho hyda ya aida
Route::get('/Add_to_applicant_fromSinglePage/{id}','ApplicantController@Add_to_applicant_fromSinglePage'); // sho hyda ya aida
Route::get('/add_to_rejected/{id}','RejectedController@Add_to_rejected');    // sho hyda ya aida
Route::get('/Add_to_rejected_fromSinglePage/{id}','RejectedController@Add_to_rejected_fromSinglePage');    // sho hyda ya aida
// Route::get('/add_to_rejected/{id}','PendingRequestController@destroy');

route::get('/dashboard/index',function (){
    return view('dashboard.index_dashboard');
});









/// hana edit and delete for dynamic_accepted_applicant page
//Route::get('accepted_applicants/{id}/edit','ApplicantController@edit');
//Route::get('/','ApplicantController@update');
//Route::get('/','ApplicantController@delete');


//testing from adam to understand concepts
//Route::get('test','CategoryController@test');
//Route::get('test2','ApplicantController@test');
//Route::get('testing','categoryController@testing');


