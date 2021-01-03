@extends('layouts.master')
@section('main')
    <div class="col-md-12">
        <div class="card" >
            <div class="card-header">
                <h4 class="card-title">Add New Category</h4>
            </div>
            <div class="card-body">
                <form  method="post" action="/categories" enctype="multipart/form-data">
                    @csrf
{{--@if(session('status'))--}}
{{--    <div class="alert alert-success" role="alert" >--}}
{{--    {{session('status')}}--}}
{{--    </div>--}}
{{--@endif--}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Category name</label>
                                <input type="text" name="cat_name" class="form-control"  value="{{old('cat_name')}}">
                                @error("cat_name")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category Description</label>
                                <input type="text" name="cat_desc" class="form-control" >
                                @error("cat_desc")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category Image</label>
                                <input type="file" name="cat_image" class="form-control" value="{{old('cat_image')}}">
                                @error("cat_image")
                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit_category" name="submit" class="btn btn-info btn-fill btn btn-primary">Add category</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <div >
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h4 class="card-title">Categories table</h4>
                </div>
                <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Number</th>
{{--                            <th scope="col">Id</th>--}}
                            <th scope="col">Name</th>
                            <th scope="col">Desc</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{-- for Number column use count like below--}}
                        @php($count=0)
                        @foreach($categories as $category )
                            @php($count++)
                            <tr>
                                <td>{{$count}}</td>
{{--                                <td>{{$category->id}}</td>--}}
                                <td>{{$category->cat_name}}</td>
                                <td>{{$category->cat_desc}}</td>
                                <td><img width="100" height="100" alt="'category image" src="{{asset("category_images/$category->cat_image")}}"></td>
                                <td >
                                    <a href="categories/{{$category->id}}/edit">
                                        <button class="btn btn-primary" value="EDIT" > Edit </button>
                                    </a>
                                </td>
                                <td>
                                <form method="post" action="/categories/{{$category->id}}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <br>
                                    <button class="btn btn-danger" value="DELETE" > Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
