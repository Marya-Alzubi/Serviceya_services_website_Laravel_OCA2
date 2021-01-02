@extends('layouts.master')

@section('main')

{{-- {{$single_applicant->applicant_name}} --}}
<div class="card text-center">
    <div class="card-header">
        {{$single_pending->pending_name}}
    </div>

    <div class="card-body">
      <h3 class="card-title">{{$single_pending->pending_name}}</h3>
      <h4> {{$single_pending->pending_email}}</h4>
      <br>
      <h4> {{$single_pending->category_id}}</h4>
      <br><br><br>
      <h5> {{$single_pending->pending_mobile}}</h5>
      <br><br><br>
      <h5> {{$single_pending->pending_city}}</h5>
      <br><br><br>
      <h5> {{$single_pending->pending_desc}}</h5>
<br><br><br>
      <img src='{{asset("pending_images/$single_pending->pending_education_img")}}'alt="" width="150px" height="150px">
<br><br>
      <img src='{{asset("pending_images/$single_pending->pending_image")}}'  alt=""  width="500px" height="500px">
<br><br>
      <h5> {{$single_pending->pending_city}}</h5>
      <p class="card-text">{{$single_pending->pending_desc}}</p>

    </div>
    <div class="card-footer text-muted">
        Keep it up
    </div>
  </div>


@endsection
