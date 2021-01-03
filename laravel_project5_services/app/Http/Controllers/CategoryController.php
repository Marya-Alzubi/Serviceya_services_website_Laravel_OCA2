<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\createCategoryRequest;
use App\Http\Requests\updateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('singlecategory', 'showCat');
    }
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
        return view("dashboard.categories.crud.create_category", compact("categories"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard/categories/crud/create_category");
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
        return redirect("/categories")->with('status_store', 'new category has been created successfully');

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
        return view('dashboard/categories/crud/edit_category' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(updateCategoryRequest $request, $id)
    {
        if ($request->hasFile('cat_image')) {
            $file = $request->file('cat_image') ;
            $ext = $file->getClientOriginalExtension() ;
            $filename3 = time() . '.' . $ext ;
            $file->move('category_images', $filename3);
        }
        else {
            $filename3 = Category::find($id)->cat_image;
        }
        Category::findOrFail($id)->update( [
            "cat_name"        =>$request->cat_name,
            "cat_desc"        =>$request->cat_desc,
            "cat_image"       =>$filename3,
        ]);
        return redirect("/categories")->with('status_update', 'new category has been edited successfully');

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
        return redirect("/categories")->with('status_destroy', 'new category has been deleted successfully');
    }

    public function showCat(Category $category)
    {
        $categories = Category::all();

//        return view('web.view_all_categories',compact('categories'));
 return view('web.index',compact('categories'));
    }



    public function singlecategory(Category $category, $id)
    {
        $applicants = Category::find($id);
        $specific_applicants= $applicants->applicants;
        // return $specific_applicants;

        return view('web.single_category',compact('specific_applicants'));

    }
    public function choose_category_form()
    {
        $categories = Category::all();
        // dd($categories);
        return view('dashboard.filtration_applicants.accepted.choose_category_form',compact('categories'));

    }
    public function dynamic_category_table(Request $request)
    {
        $select_category = $request->select_category;
        $applicants =Category::find($select_category);
//        $category_name = Category::where()
        $category_all_applicants=$applicants->applicants;
        return view('dashboard.filtration_applicants.accepted.dynamic_category_table',compact('category_all_applicants','applicants'));
    }
//    public function dynamic_category_table_test()
//    {
//
//        $applicants =Category::all();
//        $category_all_applicants=$applicants->applicants;
//        return view('dashboard.filtration_applicants.accepted.dynamic_category_table',compact('category_all_applicants'));
//    }


///testing, list all applicants that has category id equals 1
// public function testing()
// {
//     $applicants = Category::find(1);
//     $specific_applicants= $applicants->applicants;
//     // return $specific_applicants;
//     return view('','');
//     }



}
