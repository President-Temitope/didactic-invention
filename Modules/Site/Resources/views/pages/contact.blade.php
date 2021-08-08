@extends('site::layouts.master')
@section('content')
    <!-- Banners Start -->
    <div class="banner contact" id="home" style="background-image: url('assets/img/bg-2.html')">
        <!-- hero-area Start -->
        <div class="hero-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="banner-content">
                            <h2 class="title">Contact</h2>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="/">Home</a> <i class="flaticon-airplane49"></i>
                                </li>
                                <li>
                                    <a href="#">Pages</a> <i class="flaticon-airplane49"></i>
                                </li>
                                <li>
                                    Contact
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact-section Start -->
    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-lg-7">
                    <div class="contact-wrapper wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h3 class="subtitle">Get in Touch</h3>
                        <form class="contact-form" id="contact_form_submit">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" placeholder="Enter Your Full Name" id="name" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email </label>
                                <input type="text" placeholder="Enter Your Email " id="email" required="">
                            </div>
                            <div class="form-group m-0">
                                <label for="message">Your Message </label>
                                <textarea id="message" placeholder="Enter Your Message" required=""></textarea>
                                <div class="form-check">
                                    <input type="checkbox" id="check" checked="">
                                    <label for="check">I agree to receive emails, newsletters and promotional
                                        messages</label>
                                </div>
                            </div>
                            <div class="form-group text-center m-0">
                                <input class="button-1" type="submit" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-content">
                        <div class="section-header wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <h3 class="subtitle">Have questions?</h3>
                            <p class="text">Have questions about payments or price
                                plans? We have answers!</p>
                            <a href="{{route('faq')}}">Read F.A.Q <i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="contact-area">
                            <div class="contact-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                <div class="contact-thumb">
                                    <img src="assets/img/contact1.png" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h4 class="lasthead">Email Us</h4>
                                    <a href="Mailto:info@mosto.com">info@mosto.com</a>
                                </div>
                            </div>
                            <div class="contact-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                <div class="contact-thumb">
                                    <img src="assets/img/contact2.png" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h4 class="lasthead">Call Us</h4>
                                    <a href="Tel:565656855">+1 (987) 664-32-11</a>
                                    <a href="Tel:565656855">+1 (987) 664-32-11</a>
                                </div>
                            </div>
                            <div class="contact-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                <div class="contact-thumb">
                                    <img src="assets/img/contact3.png" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h4 class="lasthead">Visit Us</h4>
                                    <p>4293 Euclid Avenue, Los Angeles,CA 90012</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
