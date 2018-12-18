@extends('frontend.master')
@section('content')
<main>
    <section class="country-specific" style="background:url('images/img/upesi/nairobi.jpg');">
        <div class="wrapper">
            
                <div class="country-heading">
                    <div class="container">
                    <h2 class="fadeInUp text-white">Send Money to Kenya</h2>
                    </div>
                </div>
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
                    
                    <section id="description">
                        <p>Kenya is the third highest remittance receiving country in Africa. 70% of remittances into Kenya are through mobile wallets. Remittances by Kenyans in the diaspora, have outgrown other sources of foreign exchange earnings including tea, horticulture and tourism.
                        Send money today to 43.5 million people in Kenya
                        </p>
                        <h3 class="margin-b-25">How to send money in Kenya</h3>
                        
                        <h5>1. Bank Transfers</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Same day bank transfers to all banks in Kenya</p>
                            </li>
                            <li>
                                <p>Transfer to KES or USD account</p>
                            </li>
                        </ul>
                        <!-- Start of Logos Section -->
        
                            <div class="row">
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/barclays.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/equity.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/kcb.jpg">
                                </div>
                                
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/stanchart.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/cfc.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/coop.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/dtb.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/im.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/national.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/spire.jpg">
                                </div>
                            </div>
                        
                        <!-- End of Logos Section -->
                        <hr>
                        <h5>2. Cash pickup</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Collect cash instantly from over 170 pickup locations in Kenya at Upesi Money Transfer, Ngao Credit and Equity Bank.</p>
                            </li>
                            
                        </ul>
                        <!-- Start of Logos Section -->
                    
                            <div class="row">
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/upesi-logo.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/ngao-credit.jpg">
                                </div>
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/equity.jpg">
                                </div>
                            </div>
                        
                        <!-- End of Logos Section -->
                        <hr>
                        <h5>3. Mobile Wallet Transfers</h5>
                        <ul class="list_ok">
                            <li>
                                <p>Mobile money is sent instantly to MPESA accounts</p>
                            </li>
                            
                        </ul>
                        <!-- Start of Logos Section -->
                    
                            <div class="row">
                                <div class="col-lg-2 col-6">
                                    <img src="images/img/upesi/mpesa.jpg">
                                </div>
                                
                            </div>
                        
                        <!-- End of Logos Section -->
                        <hr>						
                    
                </div>
                <!-- /col -->
                
                <?php
                //include('inc/send-money.php');
                ?>
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
    @include('frontend.inc.get-started-solid')
    <!--End of Get Started Section-->


    




</main>
<!-- /main -->
	
	<!-- Start Of Footer Section -->
    @include('frontend.inc.footer')
@endsection