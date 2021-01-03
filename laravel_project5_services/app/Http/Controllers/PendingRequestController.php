<?php

namespace App\Http\Controllers;

use App\Rules\FullName;
use App\Category;
use App\Pending_request;
use Illuminate\Http\Request;

use App\Http\Requests\createPendingRequest;
use App\Http\Controllers\Controller;

class PendingRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('create', 'store');
    }
    /////////////////test after create and store
    //this method to view all pendingrequests in one table in the admin dashboard
    //before rejecting and accepting the applicant by admin, table contains accept & reject
    public function index()
    {
        $pending = Pending_request::orderByDesc('id')->get();
        return view('dashboard.filtration_applicants.pending.pending_table',compact('pending'));
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
        return view("web/crud/create_applicant",compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createPendingRequest $request)
    { //createPendingRequest

        if ($request->hasFile('pending_education_img')) {
            $file = $request->file('pending_education_img') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('pending_images',$filename);
        }

        if ($request->hasFile('pending_image')) {
            $file = $request->file('pending_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $pending_image = time() . '.' . $ext ;
            $file->move('pending_images', $pending_image);
        } else {
            $pending_image = "defaultImage.png";
        }

        Pending_request::create( [
            "pending_name"                    =>$request->pending_name,
            "pending_email"                   =>$request->pending_email,
            "pending_mobile"                  =>$request->pending_mobile,
            "pending_city"                    =>$request->pending_city,
            "category_id"                     =>$request->category_id,
            "pending_desc"                    =>$request->pending_desc,
            "pending_subscription_type"       =>$request->pending_subscription_type,
            "pending_image"                   =>$pending_image,
            "pending_education_img"           =>$filename,
        ]);

                //return "Welcome, You are in ";
//                 return redirect('/landing_page')->with('status_store', 'your request has been created successfully');;
                 return back()->with('status_store', 'your request has been created successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pending_request  $pending_request
     * @return \Illuminate\Http\Response
     */
    public function show(Pending_request $pending_request)
    {
        $pendings = Pending_request::orderByDesc('id')->get();
        return view('dashboard.filtration_applicants.pending.pending_table',compact('pendings'));
    }

    public function singlepending($id)
    {
        $single_pending = Pending_request::find($id);
        // dd($single_pending);
        return view('dashboard.filtration_applicants.pending.single_pending',compact('single_pending'));
    }



    //accepted the pending request, enter the value intp applicant table
    //Add the applicant to the table in dashboard "/applicants"

//    public function Add_to_applicant($id)
//    {
//        $single_pending = Pending_request::find($id);
//        // dd($single_pending);
//        Pending_request::create([
//            "applicant_name"                    =>$single_pending->pending_name,
//            "applicant_email"                   =>$single_pending->pending_email,
//            "applicant_mobile"                  =>$single_pending->pending_mobile,
//            "applicant_city"                    =>$single_pending->pending_city,
//            "category_id"                       =>$single_pending->category_id,
//            "applicant_desc"                    =>$single_pending->pending_desc,
//            "applicant_subscription_type"       =>$single_pending->pending_subscription_type,
//            "applicant_image"                   =>$single_pending->pending_image,
//            "applicant_education_img"          =>$single_pending->pending_education_img,
//        ]);
////        $single_pending->delete();
////        return $this->destroy($id);
//
////         return redirect ('delete_accepted_record_db');
//        return $this->dedy($id);
//
//
//    }
//    public function dedy($id)
//    {
//        Pending_request::findOrFail($id)->delete();
//        return back();
//        return redirect("/pending");
//
//    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pending_request  $pending_request
     * @return \Illuminate\Http\Response
     */


     //split routes to take one method
    public function destroy(Pending_request $pending_request,$id)
    {
        Pending_request::findOrFail($id)->delete();
        return back();
        // return redirect("/rejected");

    }
    public function delete_accepted_record_db()
    {
        Pending_request::findOrFail($id)->delete();
        return back();
        // return redirect("/rejected");

    }

}
