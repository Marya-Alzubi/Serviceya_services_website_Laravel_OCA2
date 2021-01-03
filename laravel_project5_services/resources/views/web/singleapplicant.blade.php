@extends('layouts.inner')
@section('main')
    <div class="col-md-12">
        <div class="card card-user">
            <div class="author text-center"  style="background-image:url('./main/images/BG.png');">
                <a>
                    <img class="img-circle" src="{{URL::asset('/main/images/call-to-action.png')}}" width="200" height="200"   alt="...">
                </a>
            </div>
            <div class="contact-form text-center">
                <h2><img src="applicant_images/{{$single_applicant->applicant_image}}" alt="applicant image"></h2>
                <h2>{{$single_applicant->applicant_name}}</h2>
                <h4>{{$single_applicant->applicant_email}}</h4>
                <h4>{{$single_applicant->applicant_mobile}}</h4>
                <h4>{{$single_applicant->applicant_city}}</h4>
                <h4>{{$single_applicant->applicant_desc}}</h4>
                <h4>services</h4>
                <h4>Description</h4>
            </div>
        </div>
    </div>
@endsection










@endsection
