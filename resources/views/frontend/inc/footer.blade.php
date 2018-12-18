<footer>
    <!-- Start of Personal Assistance Form -->
<section class="footer-form-section">
        
            <div class="container">
                <h4 class="text-white text-center">Request Personal Assistance</h4>
                
                <div class="form-group">
                    {!! Form::open(['action' => 'FormController@store', 'method' => 'POST']) !!}
                    {{ Form::hidden('identifier', 'assistance') }}
                    <div class="row">
                        <div class="col-sm">
                            <span class="input">
                            <input class="input_field white_field" type="text" autocomplete="off" name="name" id="name" required>
                                <label class="input_label_white input_label">
                                <span class="input__label-content">Name*</span>
                            </label>
                            </span>
                        </div>

                        <div class="col-sm">
                            <span class="input">
                            <input class="input_field white_field" type="email" autocomplete="off" name="email" id="email" required>
                                <label class="input_label_white input_label">
                                <span class="input__label-content">Email Address*</span>
                            </label>
                            </span>
                        </div>

                        <div class="col-sm">
                            <span class="input">
                            <input class="input_field white_field" type="text" autocomplete="off" name="message" id="organization">
                                <label class="input_label_white input_label">
                                <span class="input__label-content">Organization</span>
                            </label>
                            </span>
                        </div>

                        <div class="col-sm">
                            <span class="input">
                            <input class="input_field white_field" type="number" autocomplete="off" name="phone" id="phone" required>
                                <label class="input_label_white input_label">
                                <span class="input__label-content">Phone Number</span>
                            </label>
                            </span>
                        </div>

                        <div class="col-sm">
                            <button type="submit" class="btn_1 rounded full-width add_top_30" value="Send Money">Submit</button>
                        </div>
                        
                    </div>
                    {!! Form::close() !!}
                </div><!-- End of Form Group -->

            <div id="form-messages">Success</div>

            </div>
        
</section>
    <!-- End of Personal Assistance Form -->

    <!--Start Quick Links Section -->
    <section class="footer-section">
        <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 p-r-5">
                <h5>Contact Us</h5>
                <p><i class="ti-map"></i> Ground Floor, Morningside Office Park,<br> Ngong Road, Nairobi Kenya.</p>
                <p><i class="ti-mobile"></i> +254 726 500 404 / +254 726 499 656</p>
                <p><i class="ti-email"></i> info@upesi.co.ke</p>
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="https://www.facebook.com/UpesiMoneyTransferLimited/?modal=suggested_action" target="_blank"><img src="{{ asset('images/img/upesi/fb.png') }}"></a></li>
                        <li><a href="https://twitter.com/UpesiMoney" target="_blank"><img src="{{ asset('images/img/upesi/twitter.png') }}"></a></li>
                        <li><a href="https://www.linkedin.com/company/18788436/admin/updates/" target="_blank"><img src="{{ asset('images/img/upesi/linkedin.png') }}"></a></li>
                        <li><a href="https://www.instagram.com/upesi_money_transfer/" target="_blank"><img src="{{ asset('images/img/upesi/instagram.png') }}"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5>Information</h5>
                <ul class="links">
                    <li><a href="about-us">About Us</a></li>
                    <li><a href="team">Our Team</a></li>
                    <li><a href="careers">Careers</a></li>
                    <li><a href="services">Our Services</a></li>
                    <li><a href="networks">Our Networks</a></li>
                    
                </ul>
                
            </div>
            <div class="col-lg-3 col-md-6 ml-lg-auto">
                <h5>Policies</h5>
                <ul class="links">
                    <li><a href="faqs">FAQs</a></li>
                    <li><a href="privacy-policy">Privacy Policy</a></li>
                    <li><a href="terms-use">Terms of Use</a></li>
                    
                </ul>
            </div>
        </div>
        <!--/row-->
    </div>
    </section>
    <!--End Quick Links Section -->

    <!--Start Countries Section -->
    <section class="countries-section">
        <div class="container">
                <h4 class="text-white text-center">Send Money To</h4>
            <div class="row">
                <div class="col-sm col-6">
                    <a href="{{url ('kenya')}}">
                    <img src="{{ asset('images/img/upesi/kenya.png') }}" class="center-image">
                    <p>Kenya</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="{{url ('uganda')}}">
                    <img src="{{ asset('images/img/upesi/uganda.png') }}" class="center-image">
                    <p>Uganda</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="{{url ('tanzania')}}">
                    <img src="{{ asset('images/img/upesi/tanzania.png') }}" class="center-image">
                    <p>Tanzania</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="{{url ('rwanda')}}">
                    <img src="{{ asset('images/img/upesi/rwanda.png') }}" class="center-image">
                    <p>Rwanda</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="{{url ('ethiopia')}}">
                    <img src="{{ asset('images/img/upesi/ethiopia.png') }}" class="center-image">
                    <p>Ethiopia</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="{{url ('ghana')}}">
                    <img src="{{ asset('images/img/upesi/ghana.png') }}" class="center-image">
                    <p>Ghana</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="{{url ('nigeria')}}">
                    <img src="{{ asset('images/img/upesi/nigeria.png') }}" class="center-image">
                    <p>Nigeria</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="{{url ('india')}}">
                    <img src="{{ asset('images/img/upesi/india.png') }}" class="center-image">
                    <p class="text-center">India</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="{{url ('usa')}}">
                    <img src="{{ asset('images/img/upesi/usa.png') }}" class="center-image">
                    <p class="text-center">Usa</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="{{url ('canada')}}">
                    <img src="{{ asset('images/img/upesi/canada.png') }}" class="center-image">
                    <p class="text-center">Canada</p>
                    </a>
                </div>
                <!--<div class="col-sm col-6">
                    <a href="single-country">
                    <img src="img/upesi/australia.png" class="center-image">
                    <p class="text-center">Australia</p>
                    </a>
                </div>
                <div class="col-sm col-6">
                    <a href="single-country">
                    <img src="img/upesi/saudi-arabia.png" class="center-image">
                    <p class="text-center">Saudi Arabia</p>
                    </a>
                </div>-->
            </div>

            <hr>
        <div class="row">
            <div class="col-md-8">
                <!--<ul id="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                </ul>-->
            </div>
            <div class="col-md-4">
                <div id="copy">© 2018 Upesi Money Transfer</div>
            </div>
        </div>

        </div>
    </section>
    <!--End Countries Section -->

        
    </div>
</footer>