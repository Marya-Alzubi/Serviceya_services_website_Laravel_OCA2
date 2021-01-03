@extends('layouts.inner')
@section('main')
    <div class="col-md-12">
        <div class="single-pricing mt-40">
            <div class="text-center">
                <img src='{{asset("applicant_images/$single_applicant->applicant_image")}}' class="rounded" alt="applicant image">

            </div>
            <div class="pricing-header text-center">
                <br>.
                <h4>{{$single_applicant->applicant_name}}</h4>
                <br>

            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-9 ">
                    <div class="row">
                        <div class="form-group">
                            <label for="exampleInputEmail1">mobile number:</label>
                            <input type="text" name="cat_name" class="form-control"  value="{{$single_applicant->applicant_mobile}}" disabled >
                        </div>
                        <div class="col-3"></div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">email:</label>
                            <input type="text" name="cat_name" class="form-control"  value="{{$single_applicant->applicant_email}}" disabled >
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row">

                        <div class="form-group">
                            <br>
                            <p> Description: {{$single_applicant->applicant_desc}}</p>
                        </div>
                    </div>

                </div>
                <div class="col-1"></div>




                <div class="buttom-shape">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#0067f4;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.1;}.cls-3{opacity:0.1;}.cls-4{opacity:0.1;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                </div>
        </div> <!-- single pricing -->
        </div>
@endsection
