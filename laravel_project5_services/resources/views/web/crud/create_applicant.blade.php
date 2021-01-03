@extends('layouts.inner')

@section('main')
    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">Join Us Now  </h4>
                        <br>
                        <h5 >It takes few minutes!  </h5>
                        <br>
                        <br>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-form">

                        <form  action="/applicants" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <label> Your name:<small>(4 parts)</small></label>
                                        <input type="text" name="pending_name"   class="form-control" value="{{old('pending_name')}}">
                                        <div class="help-block with-errors">
                                            @error("pending_name")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <label> Your email: </label>
                                        <input type="email" name="pending_email"  value="{{old('pending_email')}}" >
                                        <div class="help-block with-errors">
                                            @error("pending_email")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <label> Your mobile phone:</label>
                                        <input type="tel" name="pending_mobile"  value="{{old('pending_mobile')}}">
                                        <div class="help-block with-errors">
                                            @error("pending_mobile")
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
                                        <label> Select your current city :</label>
                                        <select class="custom-select form-group" id="inputGroupSelect01"  name="pending_city" value="{{old('pending_city')}}">
{{--                                            <option selected>City</option>--}}
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
                                        @error("pending_city")
                                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                        @enderror
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <label> Select your Service:</label>
                                            <select class="custom-select form-group" name="category_id" id="" >
{{--                                                <option selected > Select your Service: </option>--}}
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->cat_name}} </option>
                                                @endforeach
                                            </select>
                                            @error("category_id")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <label>Select the Subscription type:</label>
                                        <select class="custom-select form-group" name="pending_subscription_type" id="" value="{{old('pending_subscription_type')}}">
{{--                                            <option selected>Select the Subscription type:</option>--}}
{{--                                            <option value="trail">3 Month trial </option>--}}
                                            <option value="Monthly">3 months</option>
                                            <option value="Half yearly">6 months</option>
                                            <option value="Yearly">1 Year</option>
                                        </select>
                                        @error("pending_subscription_type")
                                        <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                        @enderror

                                    </div> <!-- single form -->
                                </div>

                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                      <label>upload your image <small style="color: red">(optional)</small> :</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"  name="pending_image" id="inputGroupFile02" value="{{old('pending_image')}}">
                                                <label class="custom-file-label" for="inputGroupFile02">Your image</label>

                                            </div>

                                        </div>
                                            @error("pending_image")
                                              <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                            @enderror
                                    </div> <!-- single form -->
                                </div>


                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <label>upload your educational degree certificate image :</label>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"  name="pending_education_img" id="inputGroupFile02" value="{{old('pending_education_img')}}">
                                                <label class="custom-file-label" for="inputGroupFile02">Educational certificates</label>

                                            </div>

                                        </div>
                                                 @error("pending_education_img")
                                                 <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                                 @enderror
                                    </div> <!-- single form -->
                                </div>


                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <label>Describe your self <small style="color: red">(between 20 to 200 character)</small></label>
                                        <textarea placeholder="Description.." name="pending_desc"  >{{old('pending_desc')}}</textarea>
                                        <div class="help-block with-errors">

                                        </div>
                                            @error("pending_desc")
                                            <p style="color:red;font-size: 1rem ;">{{$message}}</p>
                                           @enderror
                                    </div> <!-- single form -->
                                </div>


                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" name="submit" class="main-btn">Submit</button>

                                        {{-- the type must be button --}}
                                        {{-- <button type="button" name="submit_applicant" class="main-btn">Submit</button> --}}
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
