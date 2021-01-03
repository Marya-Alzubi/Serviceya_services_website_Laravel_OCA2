<?php

namespace App\Http\Controllers;

use App\Rejected;
use App\Pending_request;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RejectedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Add_to_rejected($id)
    {
        $single_pending = Pending_request::find($id);
        // dd($single_pending);
        Rejected::create([
            "rejected_name"                    =>$single_pending->pending_name,
            "rejected_email"                   =>$single_pending->pending_email,
            "rejected_mobile"                  =>$single_pending->pending_mobile,
            "rejected_city"                    =>$single_pending->pending_city,
            "category_id"                       =>$single_pending->category_id,
            "rejected_desc"                    =>$single_pending->pending_desc,
            "rejected_subscription_type"       =>$single_pending->pending_subscription_type,
            "rejected_image"                   =>$single_pending->pending_image,
            "rejected_education_img"          =>$single_pending->pending_education_img,
        ]);
        $single_pending->delete();

        return back()->with('status_destroy', 'the applicant request has been deleted successfully');


//         return redirect ('choose_category_form');


    }
    public function Add_to_rejected_fromSinglePage($id)
    {
        $single_pending = Pending_request::find($id);
        // dd($single_pending);
        Rejected::create([
            "rejected_name"                    =>$single_pending->pending_name,
            "rejected_email"                   =>$single_pending->pending_email,
            "rejected_mobile"                  =>$single_pending->pending_mobile,
            "rejected_city"                    =>$single_pending->pending_city,
            "category_id"                       =>$single_pending->category_id,
            "rejected_desc"                    =>$single_pending->pending_desc,
            "rejected_subscription_type"       =>$single_pending->pending_subscription_type,
            "rejected_image"                   =>$single_pending->pending_image,
            "rejected_education_img"          =>$single_pending->pending_education_img,
        ]);
        $single_pending->delete();

        return redirect('pending')->with('status_destroy', 'the applicant request has been deleted successfully');


//         return redirect ('choose_category_form');


    }




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rejected  $rejected
     * @return \Illuminate\Http\Response
     */
    public function show(Rejected $rejected)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rejected  $rejected
     * @return \Illuminate\Http\Response
     */
    public function edit(Rejected $rejected)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rejected  $rejected
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rejected $rejected)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rejected  $rejected
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rejected $rejected)
    {
        //
    }
}
