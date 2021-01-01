@extends('layouts.master')

@section('main')
                           <div class="col-md-12">


                        <div >
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">{{$applicants->applicant_name}}</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">Number</th>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Desc</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Show </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {{-- for Number column use count like below--}}
                                        @php($count=0)
{{--                                        @foreach($categories as $category )--}}
                                            @php($count++)

                                            <tr>
                                                <td>{{$count}}</td>
                                                <td>{{$applicants->applicant_id}}</td>
                                                <td>{{$applicants->applicant_name}}</td>
                                                <td>{{$applicants->applicant_desc}}</td>
                                                <td><img width="100" height="100" src="{{asset("applicant_images/$applicants->applicant_image")}}"></td>
                                                <td >
                                                    <a href="categories/{{$applicants->applicant_id}}/edit">
                                                        <button class="btn btn-primary" value="EDIT" > show </button>
                                                    </a>
                                                </td>
                                            </tr>
{{--                                        @endforeach--}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
@endsection
