<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Category;
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
//        $applicants = Applicant::orderByDesc('applicant_id')->get();
//        return view("dashboard/applicants/applicants_table", compact("applicants"));

 $applicants = Applicant::where('applicant_service', "Health care")->get();
return view("dashboard/applicants/applicants_table", compact("applicants"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("web/create_applicant", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        if ($request->hasFile('applicant_image')) {
//
//            foreach ($request->file('applicant_image') as $file) {
//                $ext = $file->getClientOriginalExtension();
//                $filename = time() . '.' . $ext;
//                $file->move('applicant_images', $filename);
//            }
//        }

//        $input=$request->all();
//        $category_images=array();
//        if($files=$request->file('category_images')){
//            foreach($files as $file){
//                $name=$file->getClientOriginalName();
//                $file->move('image',$name);
//                $category_images[]=$name;
//            }
//        }
//        /*Insert your data*/
//
//        Detail::insert( [
//            'category_images'=>  implode("|",$category_images),
//            'description' =>$input['description'],
//            //you can put other insertion here
//        ]);

//
//        return redirect('redirecting page');

        if ($request->hasFile('applicant_education_img')) {
            $file = $request->file('applicant_education_img') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('applicant_images', $filename);
        } else {
            $filename = "defaultImage.png";
        }


        Applicant::create( [
            "applicant_name"                    =>$request->applicant_name,
            "applicant_email"                   =>$request->applicant_email,
            "applicant_mobile"                  =>$request->applicant_mobile,
            "applicant_city"                    =>$request->applicant_city,
            "applicant_service"                 =>$request->applicant_service,
            "applicant_desc"                    =>$request->applicant_desc,
            "applicant_subscription_type"       =>$request->applicant_subscription_type,
//            "applicant_image"                   =>$filename2,
            "applicant_education_img"           => $filename ,
        ]);
//        return redirect("/applicants");
        return redirect("/applicants/create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
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
}
