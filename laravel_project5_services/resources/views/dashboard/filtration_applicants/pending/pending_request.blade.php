@extends('layouts.master')

@section('main')


                                                {{$single_applicant->category_id}}
                                                {{-- {{$single_applicant->applicant_id}}  --}}
                                                {{$single_applicant->applicant_name}}
                                                {{$single_applicant->applicant_email}}
                                                {{$single_applicant->applicant_desc}}
                                                {{$single_applicant->applicant_mobile}}
                                                {{$single_applicant->applicant_city}}
                                                {{$single_applicant->applicant_subscription_type}}
                                                <br>
                                                <img src='{{asset("applicant_images/$single_applicant->applicant_education_img")}}'  alt="">
                                                <br>
                                                <img src='{{asset("applicant_images/$single_applicant->applicant_image")}}'   alt="">
                                                <br>
                                                <a href="/accepted_applicants/{{$single_applicant->category_id}}">accept</a>
                                                <br>
                                                <a href="/rejected_applicants/{{$single_applicant->category_id}}">reject</a>

@endsection
