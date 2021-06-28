@extends('layout.main')
@section('content')

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">
        <!-- Welcome Slides -->
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="welcome-welcome-slide bg-img  jarallax"
                style="background-image: url(img/bg-img/1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Welcome Text -->
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInUp" data-delay="100ms">We Believe Everyone Should Have Easy Access
                                    To Great Health Care</h2>
                                <p data-animation="fadeInUp" data-delay="300ms">Our Organization providing Trusted medical and surgical treatment and nursing care for sick or injured people
                            and we focus on The Mental health Of The Patient to Get The Full Physical and Psychological
                            Treatment</p>
                            <div class="welcome-btn-group">
                                    <a href="{{ route('patient-registeration-page') }}" class="btn dento-btn mx-2" data-animation="fadeInDown"
                                        data-delay="500ms">Join Us</a>
                                    <a href="{{route('session.login')}}"" class="btn dento-btn mx-2 active" data-animation="fadeInDown"
                                        data-delay="700ms">Sign In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="welcome-welcome-slide bg-img  jarallax"
                style="background-image: url(img/bg-img/2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Welcome Text -->
                            <div class="welcome-text text-center">
                                <h2 data-animation="fadeInDown" data-delay="100ms">We Believe Everyone Should Have Easy
                                    Access To Great Health Care</h2>
                                <p data-animation="fadeInDown" data-delay="300ms">Our Organization providing Trusted medical and surgical treatment and nursing care for sick or injured people
                            and we focus on The Mental health Of The Patient to Get The Full Physical and Psychological
                            Treatment </p>
                                <div class="welcome-btn-group">
                                    <a href="{{ route('patient-registeration-page') }}" class="btn dento-btn mx-2" data-animation="fadeInDown"
                                        data-delay="500ms">Join Us</a>
                                    <a href="{{route('session.login')}}"" class="btn dento-btn mx-2 active" data-animation="fadeInDown"
                                        data-delay="700ms">Sign In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ****** About Us Area Start ******* -->
    <section class="dento-about-us-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Us Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail mb-50">
                        <img src="./img/bg-img/37.jpg" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-us-content mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>We are</h2>
                            <div class="line"></div>
                        </div>
                        <p> institution providing medical and surgical treatment and nursing care for sick or injured people
                            and we focus on The Mental health Of The Patient to Get The Full Physical and Psychological
                            Treatment </p>

                        <!-- Single Skills Area -->
                        <div class="single-skills-area mt-30">
                            <h6> Our Experience</h6>
                            <div id="bar1" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>

                        <!-- Single Skills Area -->
                        <div class="single-skills-area mt-30">
                            <h6>Modern Equipment</h6>
                            <div id="bar2" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="65"></span>
                            </div>
                        </div>

                        <!-- Single Skills Area -->
                        <div class="single-skills-area mt-30">
                            <h6>Friendly Staff</h6>
                            <div id="bar3" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <div class="container">
        <div class="dento-border clearfix"></div>
    </div>

    <!-- Cool Facts Area Start -->
    <section class="dento-cta-area">
        <div class="container">
            <div class="row">
                <!-- Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cta text-center mt-50 mb-100">
                        <i class="icon_genius"></i>
                        <h2><span class="counter">20</span></h2>
                        <h5>Years Of Experience</h5>
                    </div>
                </div>

                <!-- Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cta text-center mt-50 mb-100">
                        <i class="icon_heart_alt"></i>
                        <h2><span class="counter">700</span>+</h2>
                        <h5>Happy Patients</h5>
                    </div>
                </div>

                <!-- Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cta text-center mt-50 mb-100">
                        <i class="icon_book_alt"></i>
                        <h2><span class="counter">120</span></h2>
                        <h5>Certificate</h5>
                    </div>
                </div>

                <!-- Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cta text-center mt-50 mb-100">
                        <i class="icon_id"></i>
                        <h2><span class="counter">40</span>+</h2>
                        <h5>Dentist</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cool Facts Area End -->

    <!-- Dento Service Area Start -->
    <section class="dento-service-area section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix"
        style="background-image: url('img/bg-img/39.jpg');">
      

                <!-- Video Area -->
                    <div class="dento-video-area mb-100">
                        <img src="./img/bg-img/38.jpg" alt="">
                        <!-- Play Button -->
                        <a href="/videos/healthcare.mp4" class="video-play-button"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            
        </div>
    </section>
    <!-- Dento Service Area End -->


          
    <!-- Dento Pricing Table Area End -->

    <!-- Book An Oppointment Area Start -->
   
    <!-- Book An Oppointment Area End -->

    <!-- ***** Dento Dentist Area Start ***** -->
    <section class="dentist-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Doctors</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Dentist Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-dentist-area mb-100">
                        <img src="./img/bg-img/9.png" alt="">
                        <!-- Dentist Content -->
                        <div class="dentist-content">
                            <!-- Social Info -->
                            <div class="dentist-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Dentist Info -->
                            <div class="dentist-info bg-gradient-overlay">
                                <h5><a href="http://homestead.test/doctor/1">Michael Barley</a></h5>
                                <p>Implant Expert</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Dentist Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-dentist-area mb-100">
                        <img src="./img/bg-img/10.png" alt="">
                        <!-- Dentist Content -->
                        <div class="dentist-content">
                            <!-- Social Info -->
                            <div class="dentist-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Dentist Info -->
                            <div class="dentist-info bg-gradient-overlay">
                                <h5><a href="http://homestead.test/doctor/1">Michael Barley</a></h5>
                                <p>Implant Expert</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Dentist Area -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-dentist-area mb-100">
                        <img src="./img/bg-img/11.png" alt="">
                        <!-- Dentist Content -->
                        <div class="dentist-content">
                            <!-- Social Info -->
                            <div class="dentist-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- Dentist Info -->
                            <div class="dentist-info bg-gradient-overlay">
                                <h5><a href="http://homestead.test/doctor/1">Michael Barley</a></h5>
                                <p>Implant Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Dento Dentist Area End ***** -->

    <!-- ***** Testimonials Area Start ***** -->
    <section class="testimonials-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix"
        style="background-image: url('img/bg-img/7.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Testimonials Slides -->
                    <div class="testimonials-slides owl-carousel">
                        <!-- Single Testimonials Slide -->
                        <div class="single-testimonial-slide d-flex align-items-center">
                            <!-- Thumbnail -->
                            <div class="testimonial-thumb">
                                <img src="./img/bg-img/sharawy.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonial-content">
                                <h5>“Do not forget that God is close to you to the extent that makes you cruel Do not defeat
                                    the world does not break you humans..”</h5>
                                <h6> His Eminence Imam Mohamed Metwaly el sharawy</h6>
                                <p> former Egyptian minister of Endowments and Muslim jurist</p>
                            </div>
                        </div>

                        <!-- Single Testimonials Slide -->
                        <div class="single-testimonial-slide d-flex align-items-center">
                            <!-- Thumbnail -->
                            <div class="testimonial-thumb">
                                <img src="./img/bg-img/benedictxvi.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonial-content">
                                <h5>“It is not by sidestepping or fleeing from suffering that we are healed, but rather by
                                    our capacity for accepting it, maturing through it ..”</h5>
                                <h6>Holiness Pope Benedict XVI</h6>
                                <p>Pope Of Vatican and Bishop of Rome No. 265t</p>
                            </div>
                        </div>

                        <!-- Single Testimonials Slide -->


                            <!-- Testimonials Slides -->

    </section>
    <!-- ***** Testimonials Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="dento-blog-area section-padding-100-0 clearfix">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Do you know !</h2>
                        <div class="line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Item -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-item mb-100">
                        <a href="./blog-details.html">
                            <img src="./img/bg-img/4.jpg" alt="">
                        </a>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="./blog-details.html" class="post-title">How your mouth bacteria can harm your lungs</a>
                            <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...
                            </p>
                            <div class="post-meta">
                                <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
                                <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-item mb-100">
                        <a href="./blog-details.html">
                            <img src="./img/bg-img/5.jpg" alt="">
                        </a>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="./blog-details.html" class="post-title">What is the best kind of toothpaste to use?</a>
                            <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...
                            </p>
                            <div class="post-meta">
                                <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
                                <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-item mb-100">
                        <a href="./blog-details.html">
                            <img src="./img/bg-img/6.jpg" alt="">
                        </a>
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="./blog-details.html" class="post-title">Why you should avoid sipping your drinks</a>
                            <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...
                            </p>
                            <div class="post-meta">
                                <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
                                <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->
@endsection
