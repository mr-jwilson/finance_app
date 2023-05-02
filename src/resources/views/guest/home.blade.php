@extends('guest.layout.app')

@section('title', 'Home')

@section('bodycontent')
    <div class="search-form-wrapper">
        <div class="search-trigger sigma_close">
            <span></span>
            <span></span>
        </div>
        <form class="search-form" method="post">
            <input type="text" placeholder="Search..." value="">
            <button type="submit" class="search-btn">
                <i class="fal fa-search m-0"></i>
            </button>
        </form>
    </div>
    <!--Section End-->
    <!--Section Start-->
    <div class="sigma_banner light-bg style-10 bg-cover">
        <img src="{{ asset('img/tr.png') }}" class="tr" alt="img">
        <img src="{{ asset('img/br.png') }}" class="br" alt="img">
        <img src="{{ asset('img/bl.png') }}" class="bl" alt="img">
        <div class="banner-slider-inner">
            <div class="sigma_banner-text">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h5 class="primary-color">Business & Partners</h5>
                            <h1 class="title">

                                Find The Best Doctor Near You

                            </h1>
                            <div class="banner-links d-flex align-items-center">
                                <a href="contact" class="sigma_btn">Get a Quote</a>
                                <a href="about" class="sigma_btn light ms-4">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="sigma_banner-image mt-5 mt-lg-0">
                                <img src="{{ asset('img/home-2/540x540.jpg') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section End-->

    <!--Section Start-->
    <div class="section section-padding secondary-overlay">
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('video/Dna.mp4') }}" type="video/mp4">
        </video>
        <div class="container">
            <div class="sigma_service-wrapper style-18 margin-negative">
                <div class="section-title flex-title">
                    <h3 class="title mb-0">Praesent tempor dictum tellus ut molestie</h3>
                    <a href="contact" class="sigma_btn mt-3 mt-sm-0">
                        Get a Quote
                        <i class="fal fa-arrow-right ms-3"></i>
                    </a>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="sigma_service style-18">
                            <div class="sigma_service-thumb">
                                <i class="flaticon-pills"></i>
                            </div>
                            <div class="sigma_service-body">
                                <h5>
                                    <a href="service-details.html">Dentistry</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="sigma_service style-18">
                            <div class="sigma_service-thumb">
                                <i class="flaticon-heartbeat"></i>
                            </div>
                            <div class="sigma_service-body">
                                <h5>
                                    <a href="service-details.html">Virology</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="sigma_service style-18">
                            <div class="sigma_service-thumb">
                                <i class="flaticon-stethoscope"></i>
                            </div>
                            <div class="sigma_service-body">
                                <h5>
                                    <a href="service-details.html">Therapy</a>
                                </h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sigma_counter style-5">
                        <i class="fal fa-procedures text-white"></i>
                        <span>

                            <b class="counter" data-from="0" data-to="3500">3,500</b>

                        </span>
                        <p class="text-white">Happy Customers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sigma_counter style-5">
                        <i class="fal fa-file-medical-alt text-white"></i>
                        <span>

                            <b class="counter" data-from="0" data-to="541">541</b>

                            <span class="plus">+</span>
                        </span>
                        <p class="text-white">Projects Done</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sigma_counter style-5">
                        <i class="fal fa-heartbeat text-white"></i>
                        <span>

                            <b class="counter" data-from="0" data-to="40">40</b>

                            <span class="plus">+</span>
                        </span>
                        <p class="text-white">Awards Won</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sigma_counter style-5">
                        <i class="fal fa-ambulance text-white"></i>
                        <span>

                            <b class="counter" data-from="0" data-to="678">678</b>

                        </span>
                        <p class="text-white">Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section End-->

    <!--Section Start-->
    <div class="section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="sigma_about style-9 w-100 h-100">
                        <div class="sigma_about-image-wrapper">
                            <div class="sigma_about-image">
                                <img src="{{ asset('img/home-2/500x500.jpg') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="sigma_about style-9 mt-5 mt-lg-0">
                        <div class="section-title">
                            <h3 class="title mb-5">We Provide Essential Service For Your Health</h3>
                        </div>
                        <div class="sigma_about-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sigma_info style-15">
                                        <div class="sigma_info-description">
                                            <h5>

                                                <a href="#">Quality Control System</a>

                                            </h5>
                                            <p>It is a long established fact that a reader will be distracted.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sigma_info style-15">
                                        <div class="sigma_info-description">
                                            <h5>

                                                <a href="#">Professional Staff</a>

                                            </h5>
                                            <p>It is a long established fact that a reader will be distracted.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="contact" class="sigma_btn">

                                Get A Quote

                                <i class="fal fa-arrow-right ms-3"></i>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section End-->
    <!--Section Start-->
    <div class="section section-padding bg-gray">
        <div class="container">
            <div class="section-title centered">
                {{-- <span class="subtitle">Meet Our Team</span> --}}
                <h3 class="title mb-0">Our Team</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sigma_team style-15">
                        <div class="sigma_team-thumb">
                            <img src="{{ asset('img/home-2/255x255.jpg') }}" alt="team">
                        </div>
                        <div class="sigma_team-body">
                            <h5>

                                <a href="#">Mega Nelson</a>

                            </h5>
                            <div class="sigma_team-categories">
                                <a href="#" class="sigma_team-category">Physiotherapist</a>
                            </div>
                            <ul class="sigma_social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sigma_team style-15">
                        <div class="sigma_team-thumb">
                            <img src="{{ asset('img/home-2/255x255-0.jpg') }}" alt="team">
                        </div>
                        <div class="sigma_team-body">
                            <h5>

                                <a href="#">Doris Griffin</a>

                            </h5>
                            <div class="sigma_team-categories">
                                <a href="#" class="sigma_team-category">Analyst</a>
                            </div>
                            <ul class="sigma_social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sigma_team style-15">
                        <div class="sigma_team-thumb">
                            <img src="{{ asset('img/home-2/255x255-1.jpg') }}" alt="team">
                        </div>
                        <div class="sigma_team-body">
                            <h5>

                                <a href="#">Adam Gilbert</a>

                            </h5>
                            <div class="sigma_team-categories">
                                <a href="#" class="sigma_team-category">Neurologist</a>
                            </div>
                            <ul class="sigma_social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="sigma_team style-15">
                        <div class="sigma_team-thumb">
                            <img src="{{ asset('img/home-2/255x255-2.jpg') }}" alt="team">
                        </div>
                        <div class="sigma_team-body">
                            <h5>

                                <a href="#">Steve Cooper</a>

                            </h5>
                            <div class="sigma_team-categories">
                                <a href="#" class="sigma_team-category">Pediatrician</a>
                            </div>
                            <ul class="sigma_social-icons">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section End-->
    <!--Section Start-->
    <div class="section section-padding bg-cover bg-center bg-secondary-1"
        style="background-image: url('{{ asset('img/home-2/pattern-4.png') }}'))">
        <div class="container">
            <div class="section-title centered">
                <span class="subtitle text-white">What We Do</span>
                <h3 class="title text-white">Services for You</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="sigma_service style-18 has-bg">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-stethoscope"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>

                                <a href="service-details.html">Therapy</a>

                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sigma_service style-18 has-bg">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-doctor-1"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>

                                <a href="service-details.html">Dentistry</a>

                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sigma_service style-18 has-bg">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-heartbeat"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>

                                <a href="service-details.html">Virology</a>

                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sigma_service style-18 has-bg">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-medical-record"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>

                                <a href="service-details.html">Pharmocology</a>

                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sigma_service style-18 has-bg">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-pharmacy"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>

                                <a href="service-details.html">Cardiology</a>

                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sigma_service style-18 has-bg">
                        <div class="sigma_service-thumb">
                            <i class="flaticon-pills"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>

                                <a href="service-details.html">Researches</a>

                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-padding p-0 margin-negative">
            <div class="container-fluid p-0">
                <div class="sigma_instagram style-1 insta-images">
                    <div class="sigma_instagram-slider">
                        <a href="{{ asset('img/home-2/376x430.jpg') }}" class="gallery-thumb">
                            <img src="{{ asset('img/home-2/376x430.jpg') }}" alt="img">
                        </a>
                        <a href="{{ asset('img/home-2/376x430-0.jpg') }}" class="gallery-thumb">
                            <img src="{{ asset('img/home-2/376x430-0.jpg') }}" alt="img">
                        </a>
                        <a href="{{ asset('img/home-2/376x430-1.jpg') }}" class="gallery-thumb">
                            <img src="{{ asset('img/home-2/376x430-1.jpg') }}" alt="img">
                        </a>
                        <a href="{{ asset('img/home-2/376x430-2.jpg') }}" class="gallery-thumb">
                            <img src="{{ asset('img/home-2/376x430-2.jpg') }}" alt="img">
                        </a>
                        <a href="{{ asset('img/home-2/376x430-3.jpg') }}" class="gallery-thumb">
                            <img src="{{ asset('img/home-2/376x430-3.jpg') }}" alt="img">
                        </a>
                        <a href="{{ asset('img/home-2/376x430-4.jpg') }}" class="gallery-thumb">
                            <img src="{{ asset('img/home-2/376x430-4.jpg') }}" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Section End-->

    <div class="section section-padding bg-gray"></div>

    <!--Section Start-->
    <div class="section section-padding bg-gray">
        <div class="container">
            <div class="section-title centered">
                <span class="subtitle">Client Testimonials</span>
                <h3 class="title">What Our Clients Say</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="sigma_testimonial style-13 text-left bg-white">
                        <div class="sigma_author-info">
                            <div class="sigma_testimonial-thumb me-4">
                                <img src="{{ asset('img/home-2/90x90.png') }}" alt="testimonial">
                                <span class="fas fa-quote-left sigma_testimonial-icon"></span>
                            </div>
                            <div class="sigma_author-block">
                                <h5>

                                    Eugene Freeman

                                </h5>
                                <span class="sigma_testimonial-category">Tincidunt</span>
                            </div>
                        </div>
                        <div class="sigma_testimonial-body">
                            <p class="mb-0">"It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.Lorem ipsum dolor sit amet consectetur
                                adipisicing elit."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sigma_testimonial style-13 text-left bg-white">
                        <div class="sigma_author-info">
                            <div class="sigma_testimonial-thumb me-4">
                                <img src="{{ asset('img/home-2/90x90-0.png') }}" alt="testimonial">
                                <span class="fas fa-quote-left sigma_testimonial-icon"></span>
                            </div>
                            <div class="sigma_author-block">
                                <h5>

                                    Kelly Coleman

                                </h5>
                                <span class="sigma_testimonial-category">Nulla nec</span>
                            </div>
                        </div>
                        <div class="sigma_testimonial-body">
                            <p class="mb-0">"It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.Lorem ipsum dolor sit amet consectetur
                                adipisicing elit."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section p-0 margin-negative sm">
            <div class="container">
                <div class="sigma_cta style-9 bg-cover bg-center bg-secondary-1 shadow-none"
                    style="background-image: url('{{ asset('img/section-tr.png') }}'))">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="sigma_cta-content">
                                <h3 class="mb-0 text-white">Get notified about the event! Subscribe Today</h3>
                            </div>
                        </div>
                        <div class="col-lg-7 mt-lg-0 mt-3">
                            <form class="form_validate ajax_submit form_alert" action="subscribe_email" method="post">
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="Email Address">
                                    <div class="input-group-append">
                                        <button type="submit" class="light">
                                            <i class="fal fa-envelope me-2"></i>
                                            Subscribe
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Section End-->

    <div class="section section-padding"></div>

    <!--Section Start-->
    <div class="section">
        <div class="container">
            <div class="row justify-content-end position-relative">
                <div class="sigma_contact-image style-6 d-none d-lg-block">
                    <img src="{{ asset('img/home-2/480x590.jpg') }}" alt="img">
                </div>
                <div class="col-lg-8">
                    <div class="sigma_form style-6">
                        <div class="section-title">
                            <h3 class="title mb-1 text-white">Get in Touch</h3>
                            <p class="text-white">We Will Be Happy To Assist You</p>
                        </div>
                        <form id="inquiryform" class="form_validate ajax_submit form_alert" action="submitinquiry"
                            method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <i class="fal fa-user"></i>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <i class="fal fa-envelope"></i>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                            <button id="inquirysubmitbtn" type="submit" class="btn-block secondary">Send</button>
                            <div class="server_response w-100"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section End-->

    <!--Section Start-->
    <div class="section section-padding pt-0">
        <div class="container">
            <div class="section-title centered">
                <span class="subtitle">Latest News</span>
                <h3 class="title">Our Insights & Articles</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article class="sigma_post style-15">
                        <div class="sigma_post-thumb">
                            <a href="blog-details.html">
                                <img src="{{ asset('img/home-2/350x300.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="sigma_post-body">
                            <div class="sigma_post-content">
                                <div class="sigma_post-meta is-absolute">
                                    <a href="blog-details.html" class="sigma_post-date">

                                        28 January, 2022

                                    </a>
                                </div>
                                <div class="sigma_post-meta">
                                    <ul>
                                        <li>
                                            <a href="blog-details.html">
                                                <i class="fal fa-user"></i>
                                                By Jean
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <i class="fal fa-folder-open"></i>
                                                Health
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h5>

                                    <a href="blog-details.html">The Connection Between Post-traumatic</a>

                                </h5>
                            </div>
                            <a href="#" class="btn-link">

                                Read more

                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="sigma_post style-15">
                        <div class="sigma_post-thumb">
                            <a href="blog-details.html">
                                <img src="{{ asset('img/home-2/350x300-0.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="sigma_post-body">
                            <div class="sigma_post-content">
                                <div class="sigma_post-meta is-absolute">
                                    <a href="blog-details.html" class="sigma_post-date">

                                        28 January, 2022

                                    </a>
                                </div>
                                <div class="sigma_post-meta">
                                    <ul>
                                        <li>
                                            <a href="blog-details.html">
                                                <i class="fal fa-user"></i>
                                                By Jean
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <i class="fal fa-folder-open"></i>
                                                Health
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h5>

                                    <a href="blog-details.html">The Connection Between Post-traumatic</a>

                                </h5>
                            </div>
                            <a href="#" class="btn-link">

                                Read more

                            </a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="sigma_post style-15">
                        <div class="sigma_post-thumb">
                            <a href="blog-details.html">
                                <img src="{{ asset('img/home-2/350x300-1.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="sigma_post-body">
                            <div class="sigma_post-content">
                                <div class="sigma_post-meta is-absolute">
                                    <a href="blog-details.html" class="sigma_post-date">

                                        28 January, 2022

                                    </a>
                                </div>
                                <div class="sigma_post-meta">
                                    <ul>
                                        <li>
                                            <a href="blog-details.html">
                                                <i class="fal fa-user"></i>
                                                By Jean
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-details.html">
                                                <i class="fal fa-folder-open"></i>
                                                Medical
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h5>

                                    <a href="blog-details.html">The Connection Between Post-traumatic</a>

                                </h5>
                            </div>
                            <a href="#" class="btn-link">

                                Read more

                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@stop
