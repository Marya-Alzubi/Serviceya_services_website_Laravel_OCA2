@extends('layouts.master')

@section('main')
    <h2> edit category </h2>
            <form method="post" action="/categories/{{$category->cat_id}}">
                @csrf
                @method('PATCH')
        <div class="form-group">
                <img width="200" height="200" src="{{asset("images/$category->cat_image")}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category name</label>
            <input type="text" name="cat_name" class="form-control" value="{{$category->cat_name}}">
            @error("cat_name")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Category Description</label>
            <input type="text" name="cat_desc" class="form-control" value="{{$category->cat_desc}}">
            @error("cat_desc")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Category Image</label>
{{--            value="{{$category->cat_image}}"--}}
            <input type="file" name="cat_image" class="form-control" >
            @error("cat_image")
            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
            @enderror
        </div>
        <button type="submit_category" name="submit" class="btn btn-primary"> Update </button>
    </form>

@endsection
