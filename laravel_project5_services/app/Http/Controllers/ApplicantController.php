<?php

namespace App\Http\Controllers;


use\App\Category;
use App\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return"true";
        // $applicants = Applicant::where('applicant_service', "Elderly Health Care")->get();
        // return view("dashboard.applicants_table", compact("applicants"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $x =Category::select('id','cat_name')->get();
        return view("web.create_applicant",compact('x'));
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
        $this->create($request);

        if ($request->hasFile('applicant_education_img')) {
            $file = $request->file('applicant_education_img') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('applicant_images', $filename);
        } else {
            $filename = "defaultImage.png";
        }


        $applicant = new Applicant();

           $applicant->applicant_name           =$request->input('applicant_name');
           $applicant->applicant_email          =$request->input('applicant_email');
           $applicant->applicant_mobile         =$request->input('applicant_mobile');
           $applicant->applicant_city           =$request->input('applicant_city');
           $applicant->applicant_service        =$request->input('applicant_service');
           $applicant->applicant_desc           =$request->input('applicant_desc');
           $applicant->category_id              =$request->input('applicant_service');


        // plicant->applicant_subscription_type"       =$request->applicant_subscription_type
//         applicant_image"                   =>$filename,
        //    "applicant_education_img"           = $filename ;
           $applicant->save();


       $x =Category::select('id','cat_name')->get();
//        return redirect("/applicants");
        return redirect("/applicants/create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant, $id)
    {
        //show all applicants per service, that they do this servce, $id = id_category
        // $applict_service = Applicant::where('',$id)->get();
        // $categories = Category::where("id",$id)->get();
        $applicants = Applicant::where('applicant_service', 'id')->get();
        return view('singlecategory',compact('applicants'));
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
    public function update(Request $request, Applicant $applicant)
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

//     public function test()
// {
//     $applicant = Applicant::find(1);
//     return $applicant->category->cat_name;
// }

//         //   foreach($t as $appli){
//         //     return $appli->applicant_name;
//         //   }

//     // return view('web.index',compact('applicants'));
// }

public function show_applicant($id)
{
    // return "GOT YAA";
     $single_applicant = Applicant::find($id);
//    dd($single_applicant);
     return view('web.singleapplicant',compact('single_applicant'));

}


}
