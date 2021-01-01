{{-- OMAR  --}}


{{-- {{$single_applicant->applicant_email}}
{{$single_applicant->applicant_name}}
{{$single_applicant->applicant_name}} --}}


{{-- OMAR  --}}

@extends('layouts.inner')


@section('main')




    <div class="col-md-12">
        <div class="card card-user">

            <div class="author text-center"  style="background-image:url('./main/images/BG.png');">
                <a href="#">
                    <img class="avatar border-gray" src='{{asset("images/$single_applicant->applicant_name")}}'   alt="...">
                </a>

            </div>




            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div class="card-body">
                            <h5 class="card-title">{{$single_applicant->applicant_name}}</h5>
                            <p class="card-text">{{$single_applicant->applicant_mobile}}</p>
                            <p class="card-text">{{$single_applicant->applicant_email}}</p>
                            <p class="card-text">{{$single_applicant->applicant_desc}}</p>
                            <p class="card-text">{{$single_applicant->applicant_desc}}</p>
                            <p class="card-text">{{$single_applicant->applicant_desc}}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                </div>
            </div> <!-- row -->
        </div>
    </div>











@endsection





