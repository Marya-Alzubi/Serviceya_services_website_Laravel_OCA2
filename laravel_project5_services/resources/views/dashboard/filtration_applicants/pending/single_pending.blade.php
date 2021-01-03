@extends('layouts.master')

@section('main')

    <div class="col-md-12">
        <div class="card card-user">
            <div class="row m-4">
            <div class="contact-form col-8 ">
                <h2>Name: {{$single_pending->pending_name}}</h2>
                <h4>Email: {{$single_pending->pending_email}}</h4>
                <h4>Mobile: {{$single_pending->pending_mobile}}</h4>
                <h4>City: {{$single_pending->pending_city}}</h4>
                <h4><p class="card-text">Description: {{$single_pending->pending_desc}}</p></h4>

                <hr>
            </div>
                <div class="contact-form col-4 ">
                <a><img  src='{{asset("pending_images/$single_pending->pending_image")}}'  alt="pending applicant "  width="300" height="300"></a>
                </div>
                <h4 class="">Educational Degree Certificate:   </h4>
                <div class="contact-form col-4">
                    <br>
                    <br>
                    <br>
                    <br>
{{--                    <h4 class="">Educational Degree Certificate:   </h4>--}}
                </div>

                <div class="contact-form col-8" >
                    <br>
                    <br>
                    <br>
                    <br>
                    <a>
                        <img class="img-circle" style='border-style: double;'  src="{{asset("pending_images/$single_pending->pending_education_img")}}" width="600" height="500"   alt="pending applicant ">
                    </a>
                </div>
                <div class="contact-form col-1 "></div>
            </div>
<hr>
            <div class="row  justify-content-center m-4">

{{--                             Store this value in database in applicant table--}}
                <div class="m-4">
                            <a href="/Add_to_applicant_fromSinglePage/{{$single_pending->id}}">
                                <button class="btn btn-primary" value="" > Accept </button>
                            </a>
                </div>
                <div class="m-4">
                            <a href="/Add_to_rejected_fromSinglePage/{{$single_pending->id}}">
                                <button class="btn btn-danger" value="" > Reject </button>
                            </a>
                </div>

            </div>
        </div>
    </div>

@endsection

