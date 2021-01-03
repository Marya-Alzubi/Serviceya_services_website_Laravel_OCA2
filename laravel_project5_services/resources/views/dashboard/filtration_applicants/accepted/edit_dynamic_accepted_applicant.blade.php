@extends('layouts.master')

@section('main')
{{--    <div class="col-md-2"></div>--}}
{{--    <div class="col-md-8">--}}
{{--        <div class="card" >--}}
{{--            <div class="card-header">--}}
{{--                <h4 class="card-title">edit </h4>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <form  method="post" action="/categories" enctype="multipart/form-data">--}}
{{--                    @csrf--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputEmail1">Category name</label>--}}
{{--                                <input type="text" name="cat_name" class="form-control"  value="{{old('cat_name')}}">--}}
{{--                                @error("cat_name")--}}
{{--                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputPassword1">Category Description</label>--}}
{{--                                <input type="text" name="cat_desc" class="form-control" >--}}
{{--                                @error("cat_desc")--}}
{{--                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleInputPassword1">Category Image</label>--}}
{{--                                <input type="file" name="cat_image" class="form-control" value="{{old('cat_image')}}">--}}
{{--                                @error("cat_image")--}}
{{--                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button type="submit_category" name="submit" class="btn btn-info btn-fill btn btn-primary">Add category</button>--}}
{{--                    <div class="clearfix"></div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-2"></div>--}}

@endsection
