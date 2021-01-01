@extends('layouts.inner')

@section('main')
    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Creating a new account</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">

                        <form  action="/applicants" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="applicant_name" placeholder="Your Name"  class="form-control" value="{{old('applicant_name')}}">
                                        <div class="help-block with-errors">
                                            @error("applicant_name")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="applicant_email" placeholder="Your Email" value="{{old('applicant_email')}}" >
                                        <div class="help-block with-errors">
                                            @error("applicant_email")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="tel" name="applicant_mobile" placeholder="Mobile" value="{{old('applicant_mobile')}}">
                                        <div class="help-block with-errors">
                                            @error("applicant_mobile")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div> <!-- single form -->
                                </div>
                                <!-- <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="password" name="Password" placeholder="password" data-error="password is required." >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div> -->

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <select class="custom-select form-group" id="inputGroupSelect01"  name="applicant_city" value="{{old('applicant_city')}}">
                                            <option selected>City</option>
                                            <option value="Irbid">Irbid</option>
                                            <option value="Ajloun">Ajloun</option>
                                            <option value="Jerash">Jerash</option>
                                            <option value="Mafraq">Mafraq</option>
                                            <option value="Balqa">Balqa</option>
                                            <option value="Amman">Amman</option>
                                            <option value="Zarqa">Zarqa</option>
                                            <option value="Madaba">Madaba</option>
                                            <option value="Karak">Karak</option>
                                            <option value="Tafilah">Tafilah</option>
                                            <option value="Maan">Maan</option>
                                            <option value="Aqaba">Aqaba</option>
                                        </select>
                                        @error("applicant_city")
                                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                        @enderror
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                            <select class="custom-select form-group" name="x" id="">
                                                @foreach($categories as $category)
                                                    <option selected>Select your Service: </option>
                                                    <option value="{{$category->id}}">{{$category->cat_name}} </option>
                                                @endforeach
                                            </select>
                                            @error("x")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <select class="custom-select form-group" name="applicant_subscription_type" id="">
                                            <option selected>Select the Subscription type:</option>
                                            <option value="trail">3 Month trial </option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Half yearly">Half yearly</option>
                                            <option value="Yearly">Yearly</option>
                                        </select>
                                        @error("applicant_subscription_type")
                                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                        @enderror

                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">

                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"  name="applicant_image" id="inputGroupFile02" value="{{old('applicant_image')}}">
                                                <label class="custom-file-label" for="inputGroupFile02">Your image</label>
                                                @error("applicant_image")
                                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                                @enderror
                                            </div>

                                        </div>

                                    </div> <!-- single form -->
                                </div>


                                <div class="col-md-6">
                                    <div class="single-form form-group">

                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"  name="applicant_education_img" id="inputGroupFile02" value="{{old('applicant_education_img')}}">
                                                <label class="custom-file-label" for="inputGroupFile02">Educational certificates</label>
                                                @error("applicant_education_img")
                                                <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                                @enderror
                                            </div>

                                        </div>

                                    </div> <!-- single form -->
                                </div>


                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea placeholder="Description" name="applicant_desc"  >{{old('applicant_desc')}}</textarea>
                                        <div class="help-block with-errors">
                                            @error("applicant_desc")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div> <!-- single form -->
                                </div>


                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit_applicant" name="submit" class="main-btn">Submit</button>
                                    </div> <!-- single form -->
                                </div>

                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>

    <!--====== CONTACT PART ENDS ====== -->


@endsection
