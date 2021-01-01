<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\createCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//  public function test(){
//     $category = Category::find(2);
//     $y= $category->applicants;
//     foreach($y as $key => $val){
//         echo "<br>";
//        return  $val->applicant_name;

//     };
//  }
    public function index()
    {
//        $categories = Category::all();
        $categories = Category::orderByDesc('id')->get();
        return view("dashboard.categories.create_category", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard/categories/create_category");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createCategoryRequest $request)
    {
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('category_images', $filename);
        }
        Category::create( [
            "cat_name"        =>$request->cat_name,
            "cat_desc"        =>$request->cat_desc,
            "cat_image"       =>$filename,
        ]);
        return redirect("/categories");

        // this method will not be effective in uploading image
//        Category::create($request->all());
//        return redirect("/categories" );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
//    public function show(Category $category)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard/categories/edit_category' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(createCategoryRequest $request, $id)
    {
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename = time() . '.' . $ext ;
            $file->move('category_images', $filename);
        }
        else {
            $filename = Category::find($id)->cat_image;
        }
        Category::findOrFail($id)->update( [
            "cat_name"        =>$request->cat_name,
            "cat_desc"        =>$request->cat_desc,
            "cat_image"       =>$filename,
        ]);
        return redirect("/categories");

// this method will not be effective in uploading image
//        $category = Category::findOrFail($id);
//        $category->update($request->all());
//        return redirect("/categories");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect("/categories");
    }

    public function showCat(Category $category)
    {
        $categories = Category::all();

        return view('web.index',compact('categories'));
    }



    public function singlecategory(Category $category, $id)
    {
        $applicants = Category::find($id);
        $specific_applicants= $applicants->applicants;
        // return $specific_applicants;

        return view('web.singlecategory',compact('specific_applicants'));

    }
    public function choose_category_form()
    {
        $categories = Category::all();
        // dd($categories);
        return view('dashboard.categories.choose_category_form',compact('categories'));

    }
    public function single_category_table(Request $request)
    {
        $select_category = $request->select_category;
        $applicants =Category::find($select_category);
        $category_all_applicants=$applicants->applicants;
        return view('dashboard.categories.single_category_table',compact('category_all_applicants'));
    }


///testing, list all applicants that has category id equals 1
// public function testing()
// {
//     $applicants = Category::find(1);
//     $specific_applicants= $applicants->applicants;
//     // return $specific_applicants;
//     return view('','');
//     }

     

}
