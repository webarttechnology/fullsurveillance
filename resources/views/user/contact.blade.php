@section('title', 'Contact | full Surveilance')
@section('meta_desc', 'Contact | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">
            <!--== Start Page Header Area Wrapper ==-->
            <div class="page-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-header-content">
                                <h2 class="page-header-title">Contact Us</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="page-header-thumb">
                                <img src="assets/images/photos/page-title.png" alt="Image-HasTech" width="546" height="281">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Page Header Area Wrapper ==-->

            <!--== Start Contact Area Wrapper ==-->
            <div class="contact-area section-top-space">
                <div class="container">
                    <div class="contact-wrp" data-bg-img="assets/images/photos/bg4.png">
                        <div class="row">
                            <div class="col-lg-5 col-xl-4">
                                <div class="contact-info-area">
                                    <h3 class="contact-info-area-title text-black">Contact Info</h3>

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="assets/images/icons/pin2.png" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mb-2 mt-n1">Head Office</h4>
                                            <p>Your address here <span>54/X, New Down City</span></p>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="assets/images/icons/call.png" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mb-2 mt-n1">Phone</h4>
                                            <a href="tel://+00123456789 ">+00 123 456 789</a>
                                            <a href="tel://+00123456989">+00 123 456 989</a>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="assets/images/icons/email.png" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mt-n1">Email</h4>
                                            <a href="mailto://demo@example.com">youremail@demo.com</a>
                                            <a href="mailto://example@demo.info">www.yoursite.web</a>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                                <div class="contact-form-area">
                                    <h3 class="contact-form-title text-black">Get In Touch</h3>
                                    <!--== Start Contact Form ==-->
                                    <form class="contact-form" id="contact-form" action="https://htmldemo.net/elehaus/elehaus/assets/php/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-input-item">
                                                    <input class="form-control" type="text" name="con_name" id="name" placeholder="Your Name">
                                                    <i class="icon fa fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input-item">
                                                    <input class="form-control" type="email" name="con_email" id="mail" placeholder="Enter Your Mail">
                                                    <i class="icon fa fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input-item">
                                            <input class="form-control" type="text" name="con_subject" id="subject" placeholder="Your Subject">
                                            <i class="icon fa fa-phone-square"></i>
                                        </div>
                                        <div class="form-input-item">
                                            <textarea class="form-control" name="con_message" id="message" placeholder="Your Message"></textarea>
                                        </div>
                                        <button class="btn btn-theme btn-submit mt-2" type="submit">Submit Now <i class="icon fa fa-arrow-right"></i></button>
                                    </form>
                                    <!--== End Contact Form ==-->

                                    <!--== Message Notification ==-->
                                    <div class="form-message"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Contact Area Wrapper ==-->

            <!--== Start Map Area Wrapper ==-->
            <div class="map-area mb-n2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d802879.9165497769!2d144.83475730949783!3d-38.180874157285366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sbd!4v1636803638401!5m2!1sen!2sbd"></iframe>
            </div>
            <!--== End Map Area Wrapper ==-->
</main>
@endsection