@extends('layouts.master')

@section('main')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">choose applicant by each category </h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <form method="get" action="/single_category_table/{{$category->id}}">
                                        <div class="form-group">
                                            <select class="custom-select form-group" name="x" id="">
                                                @foreach($categories as $category)
                                                    <option selected>Select the applicants category : </option>
                                                    <option value="{{$category->id}}">{{$category->cat_name}} </option>
                                                @endforeach
                                            </select>
                                            @error("x")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror
                                        </div>
                                            <div class="form-group">
                                            <button type="button" name="submit" class="btn btn-danger">Select</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
@endsection
