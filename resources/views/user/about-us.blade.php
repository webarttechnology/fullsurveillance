@section('title', 'About Us | full Surveilance')
@section('meta_desc', 'About Us | full Surveilance')
@extends('user.master.layout')
@section('content')

<!-- <main class="main-content"> -->

<!--== Start Page Header Area Wrapper ==-->
{{-- <div class="page-header-area">
    <div class="container abt-container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-header-content">
                    <h2 class="page-header-title">About Us</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home //</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
</div> --}}
<!--== End Page Header Area Wrapper ==-->

<!--== Start Divider Area ==-->
<div class="divider-area section-space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="ps-lg-10 pe-lg-10 ms-lg-2 me-lg-2 mb-10 mb-lg-0 text-center text-lg-start">
                    <img src="{{ url('user/assets/images/photos/about-img.jpg') }}" alt="Image-HasTech" width="449" height="550">
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <h2 class="divider-title mt-n2">Who We Are?</h2>
                <p class="divider-desc">Highly qualified and motivated professionals
                    Entry level, mid-level and high end custom security systems is what we do. From standard analog TVI
                    to multi megapixel (13MP) IP cameras including face recognition, license plate recognition, POS text
                    integration and tracking PTZ's. We have installed CCTV systems for small mom and pop shops to
                    high-end commercial clients with next level security needs. We do access control and biometric entry
                    control systems. We install and repair single and multi-tenant video and voice intercoms. We do mesh
                    and beam networks for Wi-Fi and Internet. Full Surveillance will do all the planning, consulting and
                    installation of your Network Wiring. Need a custom computer system build for any industry? We got
                    you covered. We do POS systems and video integration. VOIP phone systems setup and line acquisitions
                    at excellent prices. Home system automation planning and setup.

                </p>
                <button class="btn btn-theme" type="submit">Contact Us <i
                    class="icon fa fa-arrow-right ms-1"></i></button>
            </div>
        </div>
    </div>
</div>
<!--== End Divider Area ==-->

<!--== Start Video Area ==-->
<div class="video-area section-bottom-space">
    <div class="container">
        <h2 class="section-four-title text-center mt-n3 mb-4 mb-lg-9">Smart Fashion <span
                class="d-block fw-bold text-primary">With Smart Devices</span></h2>
        <a class="video-wrp ht-popup-video" data-fancybox data-type="iframe"
            href="https://player.vimeo.com/video/172601404?autoplay=1">
            <img src="{{ url('user/assets/images/photos/bg-video.png') }}" alt="Image-HasTech" width="1250" height="500">
            <span class="btn-play"><span class="icon"><i class="fa fa-play"></i></span></span>
        </a>
    </div>
</div>
<!--== End Video Area ==-->

<!--== Start Team Area ==-->
<div class="team-area section-bottom-space">
    <div class="container">
        <h2 class="section-title text-black text-center mt-n2">Our Team</h2>
        <div class="row mt-n1 mb-n6">
            <div class="col-sm-6 col-md-6 col-lg-4 mb-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img class="w-100" src="{{ url('user/assets/images/team/1.jpg') }}" alt="Image-HasTech">
                    </div>
                    <div class="team-info">
                        <h4 class="team-title mt-n1">Kiersten Lange</h4>
                        <h5 class="team-reg">Chif Admin</h5>
                        <div class="social-items">
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-dribbble"></i></a>
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img class="w-100" src="{{ url('user/assets/images/team/2.jpg') }}" alt="Image-HasTech">
                    </div>
                    <div class="team-info">
                        <h4 class="team-title mt-n1">Monroe Bond</h4>
                        <h5 class="team-reg">Chif Admin</h5>
                        <div class="social-items">
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-dribbble"></i></a>
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-6">
                <div class="team-item">
                    <div class="team-thumb">
                        <img class="w-100" src="{{ url('user/assets/images/team/3.jpg') }}" alt="Image-HasTech">
                    </div>
                    <div class="team-info">
                        <h4 class="team-title mt-n1">Raymond Atkins</h4>
                        <h5 class="team-reg">Chif Admin</h5>
                        <div class="social-items">
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-dribbble"></i></a>
                            <a href="#" target="_blank" rel="noopener"><i
                                    class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Team Area ==-->

<!--== Start Testimonial Area ==-->
<div class="testimonial-area section-space bg-img" data-bg-img="{{ url('user/assets/images/photos/bg1.jpg') }}">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title text-white mt-n2 mb-n1">Customer Review</h2>
        </div>
        <div class="swiper-button-style2 mb-n3">
            <div class="swiper testimonial-slider-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-item">
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consl adipi elit, sed do eiusmod tempor incididu ut labore et
                                dolore magn aliqua Ut enim admin.</p>
                            <img class="icon-quote" src="{{ url('user/assets/images/icons/quote1.png') }}" alt="Image" width="69"
                                height="65">
                        </div>
                        <div class="testimonial-info">
                            <div class="client-thumb">
                                <img src="{{ url('user/assets/images/photos/client1.png') }}" alt="Image" width="94" height="94">
                            </div>
                            <div class="info">
                                <h4 class="name">Merida Swan</h4>
                                <h5 class="designation">Chairman</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-item">
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consl adipi elit, sed do eiusmod tempor incididu ut labore et
                                dolore magn aliqua Ut enim admin.</p>
                            <img class="icon-quote" src="{{ url('user/assets/images/icons/quote1.png') }}" alt="Image" width="69"
                                height="65">
                        </div>
                        <div class="testimonial-info">
                            <div class="client-thumb">
                                <img src="{{ url('user/assets/images/photos/client2.png') }}" alt="Image" width="94" height="94">
                            </div>
                            <div class="info">
                                <h4 class="name">Demetri Caron</h4>
                                <h5 class="designation">Customer</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-item">
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consl adipi elit, sed do eiusmod tempor incididu ut labore et
                                dolore magn aliqua Ut enim admin.</p>
                            <img class="icon-quote" src="{{ url('user/assets/images/icons/quote1.png') }}" alt="Image" width="69"
                                height="65">
                        </div>
                        <div class="testimonial-info">
                            <div class="client-thumb">
                                <img src="{{ url('user/assets/images/photos/client3.png') }}" alt="Image" width="94" height="94">
                            </div>
                            <div class="info">
                                <h4 class="name">Anaiah Whitten</h4>
                                <h5 class="designation">HR Head</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-item">
                        <div class="testimonial-content">
                            <p>Lorem ipsum dolor sit amet, consl adipi elit, sed do eiusmod tempor incididu ut labore et
                                dolore magn aliqua Ut enim admin.</p>
                            <img class="icon-quote" src="{{ url('user/assets/images/icons/quote1.png') }}" alt="Image" width="69"
                                height="65">
                        </div>
                        <div class="testimonial-info">
                            <div class="client-thumb">
                                <img src="{{ url('user/assets/images/photos/client4.png') }}" alt="Image" width="94" height="94">
                            </div>
                            <div class="info">
                                <h4 class="name">Juidan Swan</h4>
                                <h5 class="designation">Customer</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Start Swiper Navigation ==-->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>
<!--== End Testimonial Area ==-->

<!--== Start Features Area Wrapper ==-->
<div class="features-area section-top-space">
    <div class="container">
        <div class="row mb-n8 mt-n2">
            <div class="col-sm-6 col-md-6 col-lg-3 mb-6">
                <!--== Start Feature Item ==-->
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ url('user/assets/images/icons/1.png') }}" width="44" height="38" alt="Icon">
                    </div>
                    <div class="feature-content">
                        <h4 class="feature-title">Support 24/7</h4>
                        <p>Delicated 24/7 Support</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-6">
                <!--== Start Feature Item ==-->
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ url('user/assets/images/icons/2.png') }}" width="38" height="38" alt="Icon">
                    </div>
                    <div class="feature-content">
                        <h4 class="feature-title">Easy Returns</h4>
                        <p>Shop With Confidence</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-6">
                <!--== Start Feature Item ==-->
                <div class="feature-item">
                    <div class="feature-icon">
                        <img src="{{ url('user/assets/images/icons/3.png') }}" width="48" height="38" alt="Icon">
                    </div>
                    <div class="feature-content">
                        <h4 class="feature-title">Card Payment</h4>
                        <p>12 Months Installments</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-6">
                <!--== Start Feature Item ==-->
                <div class="feature-item border-0">
                    <div class="feature-icon">
                        <img src="{{ url('user/assets/images/icons/4.png') }}" width="50" height="38" alt="Icon">
                    </div>
                    <div class="feature-content">
                        <h4 class="feature-title">Free Shipping</h4>
                        <p>Capped at $50 per order</p>
                    </div>
                </div>
                <!--== End Feature Item ==-->
            </div>
        </div>
    </div>
</div>
<!--== End Features Area Wrapper ==-->

<!--== Start Gallery Area Wrapper ==-->
<div class="gallery-area section-space">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title mb-n1 mt-n2">Follow <span class="text-primary">@Full Surveillance</span> on Instagram</h2>
        </div>
        <div class="row row-cols-3 row-cols-sm-3 row-cols-lg-5 gx-4 mb-n6 justify-content-center">
            <div class="col mb-6">
                <div class="gallery-item">
                    <img src="{{ url('user/assets/images/photos/gallery1.png') }}" alt="Instagram Image">
                    <a class="gallery-overlay" target="_blank" rel="noopener" href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col mb-6">
                <div class="gallery-item">
                    <img src="{{ url('user/assets/images/photos/gallery2.png') }}" alt="Instagram Image">
                    <a class="gallery-overlay" target="_blank" rel="noopener" href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col mb-6">
                <div class="gallery-item">
                    <img src="{{ url('user/assets/images/photos/gallery3.png') }}" alt="Instagram Image">
                    <a class="gallery-overlay" target="_blank" rel="noopener" href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col mb-6">
                <div class="gallery-item">
                    <img src="{{ url('user/assets/images/photos/gallery4.png') }}" alt="Instagram Image">
                    <a class="gallery-overlay" target="_blank" rel="noopener" href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col mb-6">
                <div class="gallery-item">
                    <img src="{{ url('user/assets/images/photos/gallery5.png') }}" alt="Instagram Image">
                    <a class="gallery-overlay" target="_blank" rel="noopener" href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Gallery Area Wrapper ==-->

<!-- </main> -->
@endsection