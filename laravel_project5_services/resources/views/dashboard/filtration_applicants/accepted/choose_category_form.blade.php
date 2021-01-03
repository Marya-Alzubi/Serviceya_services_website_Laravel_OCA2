@extends('layouts.master')

@section('main')


@foreach($categories as $category)

@endforeach
<div class="col-md-4 pr-4">
                    <div class="card item-center">
                        <div class="card-header">
                            <h4 class="card-title">Choose applicant by each category </h4>
                        </div>
                        <div class="card-body">
                                <div>
                                    <div class="col-md-8 pr-4">
                                        <form method="post" action="/dynamic_category_table">
                                            @csrf
                                                 <div class="form-group">
                                                      <select class="custom-select form-group" name="select_category" id="">
{{--                                                            <option selected>Select Category: </option>--}}
                                                             @foreach($categories as $category)
                                                             <option value="{{$category->id}}">{{$category->cat_name}} </option>
                                                             @endforeach
                                                      </select>
                                                              @error("x")
                                                             <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                                              @enderror
                                    </div>

                                            <div class="form-group">
                                                <a href=""></a>
                                            <button type="submit" name="submit" class="btn btn-danger">Select</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
@endsection
