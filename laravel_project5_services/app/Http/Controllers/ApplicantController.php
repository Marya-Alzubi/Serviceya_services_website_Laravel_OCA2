<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Category;
use App\Pending_request;
use App\Http\Requests\createApplicantRequest;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('singlecategory');
    }

    //this method to view all applicants in one table in the admin dashboard
    public function index()
    {
        $applicants = Applicant::orderByDesc('applicant_id')->get();
        $categories = Category::all();
        return view("dashboard/applicants/applicants_table", compact("show_applicant","categories"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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
        return view('web.single_applicant_page',compact('single_applicant'));
    }

      //////Applicant Related to the admin dashboard
      public function dynamic_accepted_applicant($id)
     {
        $single_applicant = Applicant::find($id);
        return view('/dashboard/filtration_applicants/accepted/dynamic_accepted_applicant',compact('single_applicant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */


    public function Add_to_applicant($id)
    {
        $single_pending = Pending_request::find($id);
        // dd($single_pending);
        Applicant::create([
            "applicant_name"                    =>$single_pending->pending_name,
            "applicant_email"                   =>$single_pending->pending_email,
            "applicant_mobile"                  =>$single_pending->pending_mobile,
            "applicant_city"                    =>$single_pending->pending_city,
            "category_id"                       =>$single_pending->category_id,
            "applicant_desc"                    =>$single_pending->pending_desc,
            "applicant_subscription_type"       =>$single_pending->pending_subscription_type,
            "applicant_image"                   =>$single_pending->pending_image,
            "applicant_education_img"           =>$single_pending->pending_education_img,
        ]);
        $single_pending->delete();

         return back()->with('status_store', 'New applicant has been added successfully');


    }

    public function Add_to_applicant_fromSinglePage($id)
    {
        $single_pending = Pending_request::find($id);
        // dd($single_pending);
        Applicant::create([
            "applicant_name"                    =>$single_pending->pending_name,
            "applicant_email"                   =>$single_pending->pending_email,
            "applicant_mobile"                  =>$single_pending->pending_mobile,
            "applicant_city"                    =>$single_pending->pending_city,
            "category_id"                       =>$single_pending->category_id,
            "applicant_desc"                    =>$single_pending->pending_desc,
            "applicant_subscription_type"       =>$single_pending->pending_subscription_type,
            "applicant_image"                   =>$single_pending->pending_image,
            "applicant_education_img"           =>$single_pending->pending_education_img,
        ]);
        $single_pending->delete();

        return redirect('pending')->with('status_store', 'New applicant has been added successfully');


    }

















//    /// hana edit and delete for dynamic_accepted_applicant page
//    public function edit(Applicant $applicant,$id)
//    {
//        $applicants = Applicant::findOrFail($id);
//        return view('dashboard.filtration_applicants.accepted.edit_dynamic_accepted_applicant' , compact('applicants'));
//    }
//    public function update($request, Applicant $applicant,$id)
//    {
//        if ($request->hasFile('applicant_image')) {
//            $file = $request->file('applicant_image') ;
//            $ext = $file->getClientOriginalExtension() ;
//            $filename = time() . '.' . $ext ;
//            $file->move('applicant_images', $filename);
//        }
//        else {
//            $filename = Applicant::find($id)->applicant_image;
//        }
//        Applicant::findOrFail($id)->update( [
//            "applicant_name"        =>$request->applicant_name,
//            "applicant_desc"        =>$request->applicant_desc,
//            "applicant_image"       =>$filename,
//        ]);
//        return redirect("/pending");
//    }
//    public function destroy(Applicant $applicant,$id)
//    {
//        Applicant::findOrFail($id)->delete();
//        return redirect("/pending");
//    }

}



