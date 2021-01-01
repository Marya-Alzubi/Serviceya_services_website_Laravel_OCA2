<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Category;
use App\Http\Requests\createApplicantRequest;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //this method to view all applicants in one table in the admin dashboard
    public function index()
    {
        $applicants = Applicant::orderByDesc('applicant_id')->get();
        $categories =Category::all();
        return view("dashboard/applicants/applicants_table", compact("applicants","categories"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    //Go to the applicant form page in the public website to register
    public function create()
    {
        $categories =Category::all();
        return view("web/create_applicant",compact('categories'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('applicant_education_img')) {
            $file = $request->file('applicant_education_img') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('applicant_images', $filename);
        }

        if ($request->hasFile('applicant_image')) {
            $file = $request->file('applicant_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $applicant_image = time() . '.' . $ext ;
            $file->move('applicant_images', $applicant_image);
        } else {
            $applicant_image = "defaultImage.png";
        }

        Applicant::create( [
            "applicant_name"                    =>$request->applicant_name,
            "applicant_email"                   =>$request->applicant_email,
            "applicant_mobile"                  =>$request->applicant_mobile,
            "applicant_city"                    =>$request->applicant_city,
            "category_id"                       =>$request->x,
            "applicant_desc"                    =>$request->applicant_desc,
            "applicant_subscription_type"       =>$request->applicant_subscription_type,
            "applicant_image"                   =>$applicant_image,
            "applicant_education_img"           => $filename ,
        ]);
          //return redirect("/applicants");
          //return redirect("/applicants/create");
          return "Welcome, You are in ";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */


    //Single applicant profile when click the user on his card in the singlecategory page
    public function show_applicant($id)
    {
        //return "GOT YAA";
        $single_applicant = Applicant::find($id);
        //dd($single_applicant);
        return view('web.singleapplicant',compact('single_applicant'));
    }

      //////Applicant Related to the admin dashboard
      public function pending_request($id)
     {
        $single_applicant = Applicant::find($id);
        return view('dashboard.categories.pending_request',compact('single_applicant'));
    }

































    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(createApplicantRequest $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }

}



