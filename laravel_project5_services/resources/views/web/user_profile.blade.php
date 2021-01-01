@extends('layouts.inner')


@section('main')

           


    <div class="col-md-12">
        <div class="card card-user">
            
            <div class="author text-center"  style="background-image:url('./main/images/BG.png');">
                <a href="#">
                    <img class="avatar border-gray" src="{{URL::asset('/main/images/cleaning.png')}}"   alt="...">
                   
                </a>
                
            </div>



         
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="" method="post" data-toggle="validator">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Your Name" aria-label="readonly input example" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Your Email"  required="required" aria-label="readonly input example" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input class="form-control" type="text" name="phone" placeholder="Phone" aria-label="readonly input example" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input class="form-control" type="password" name="Password" placeholder="password" aria-label="readonly input example" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input class="form-control" type="text" name="city" placeholder="city" aria-label="readonly input example" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input class="form-control" type="text" name="services" placeholder="services" aria-label="readonly input example" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <input class="form-control" type="taxt" name="message" placeholder="Description"  aria-label="readonly input example" readonly>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                
                            </div> <!-- row -->
                            <hr>
                             <div class="d-grid gap-2 text-center ">
                                  <button class="btn btn-primary" type="button">Edit profile</button>
                                    <br>
                                    <br>
                             </div>
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div>
    </div>











@endsection