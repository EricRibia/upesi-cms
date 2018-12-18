@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/faqs.jpg');">
        <div class="wrapper">
            
                
        </div>
    </section>
    <!--/hero_in-->

        <section class="section-content">
        <!--<nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">How to Send Money</a></li>
                    <li><a href="#lessons">How It Works</a></li>
                    <li><a href="#reviews">Download App</a></li>
                    <li><a href="#reviews">Get Started</a></li>
                </ul>
            </div>
        </nav>-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-service">
                    <section id="description">
                        <div class="main_title_2">
                            <span><em></em></span>
                                <h2>FAQs</h2>
                                            
                        </div>
                

                <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#register" aria-expanded="true"><i class="indicator ti-minus"></i>1. How do I register an account?</a>
                            </h5>
                        </div>

                        <div id="register" class="collapse show" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>We are required by the regulator to take some basic information from you. The registration process is short and simple. ‘Register here’ link.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#transfer" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>2. How do I transfer money to Kenya?
                                </a>
                            </h5>
                        </div>
                        <div id="transfer" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>You can transfer money to mobile wallets, bank accounts or cash pick-ups. ‘Send Money’ link.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#charge" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>3. How much do you charge?
                                </a>
                            </h5>
                        </div>
                        <div id="charge" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>we charge  0 amount to send money</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#send" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>4. How much can I send?
                                </a>
                            </h5>
                        </div>
                        <div id="send" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>You can send up to a maximum of £9000 per day per month</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#recipient" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>5. Does the recipient pay any charges to get money?
                                </a>
                            </h5>
                        </div>
                        <div id="recipient" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>The recipient does not pay any amount to receive money</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#weekends" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>6. Can I send money on weekends or public holidays?
                                </a>
                            </h5>
                        </div>
                        <div id="weekends" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Yes. Our services are 24/7 </p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#online" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>7. I am not able to register online, what should I do?
                                </a>
                            </h5>
                        </div>
                        <div id="online" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Send us an email at info@upesi.co.ke, and we shall call you back to assist</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#modify" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>8. Can I modify my account details?
                                </a>
                            </h5>
                        </div>
                        <div id="modify" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Yes. You can edit your account details such as address, phone number, and location. You may not modify other details such as ID/passport number, and Name</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#cancel" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>9. Can I cancel a transaction?
                                </a>
                            </h5>
                        </div>
                        <div id="cancel" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Yes. You can cancel a cash pick-up transaction, if the recipient has not received it yet. Bank transactions and mobile wallet transactions that are instant, cannot be cancelled </p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#moneytransfer" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>10. How long does a money transfer take?
                                </a>
                            </h5>
                        </div>
                        <div id="moneytransfer" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Mobile wallet transactions and bank transactions are instant. Cash pick-up transactions are ready for collection after 10 minutes </p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#secure" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>11. Is my data secure on your platform?
                                </a>
                            </h5>
                        </div>
                        <div id="secure" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>Yes. We secure all customer data using a multilayer security system. The data is encrypted and hosted on a secure server.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                    <!-- /card -->
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#limit" aria-expanded="false">
                                    <i class="indicator ti-plus"></i>12. Is there any limit for sending money?
                                </a>
                            </h5>
                        </div>
                        <div id="limit" class="collapse" role="tabpanel" data-parent="#payment">
                            <div class="card-body">
                                <p>No. There’s no limit in sending money. However, above USD 5000, the customer may be requested to provide proof of source and purpose of funds </p>
                            </div>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /accordion payment -->

                        
                        

                    </div><!-- Content Service End -->
                </div>
                <!-- /col -->
                
                
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- End Section Content-->

    <!--Start of How it Works Section-->
    @include('frontend.inc.how-it-works')
    <!--End of How it Works Section-->

    <!-- Start Of Download App Section -->
    <?php
    //include('inc/download-app.php');
    ?>
    <!-- Start Of End App Section -->

    <!--Start of Get Started Section-->
    @include('frontend.inc.get-started-solid');
    <!--End of Get Started Section-->


    




</main>
<!-- /main -->

	
	<!-- Start Of Footer Section -->
    @include('frontend.inc.footer')
@endsection