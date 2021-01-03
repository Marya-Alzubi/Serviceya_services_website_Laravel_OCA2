@extends('layouts.inner')
@section('main')
        </div> <!-- single pricing -->
        </div>
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3"></div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body" style="border-color: #007bff" >
                        <div class="d-flex flex-column align-items-center text-center">
                            <img <img src='{{asset("pending_images/$single_applicant->applicant_image")}}' class="rounded" alt="applicant image" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{$single_applicant->applicant_name}}</h4>
                                <br>
                                <p class="text-secondary mb-1"> Service: {{$category->cat_name}}</p>
                                <br>
                                <p class="text-muted font-size-sm"> city:{{$single_applicant->applicant_city}}</p>
                                <br>
                                <p >mobile: {{$single_applicant->applicant_mobile}}</p>
                                <br>
                                <p >email: {{$single_applicant->applicant_email}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3"></div>
        </div>


@endsection
