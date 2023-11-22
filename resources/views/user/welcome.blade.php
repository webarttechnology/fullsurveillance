@section('title', 'full Surveilance')
@section('meta_desc', 'full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">
<!--== Start Hero Area Wrapper ==-->
<div class="hero-four-slider-area pt-xl-6">
    <div class="container-fluid">
        <div class="hero-four-wrp d-xl-flex">
            <div class="swiper hero-four-slider-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hero-four-slide-item bg-img h-100" data-bg-img="assets/images/slider/slider4-bg1.jpg">
                        <div class="row align-items-center position-relative h-100">
                            <div class="col-12 col-sm-6 col-lg-6">
                                <div class="hero-four-slide-content">
                                    <h1 class="hero-four-slide-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque itaque delectus error? Nesciunt, dolorum recusandae.</h1>
                                    <p class="hero-four-slide-desc">Wireless Connection With Mobile</p>
                                    <a class="btn btn-white" href="#">Shop Now <i class="icon fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- <div class="col-12 col-sm-6 col-lg-6">
                                <div class="hero-four-slide-thumb">
                                    <img src="assets/images/slider/slider4.png" width="372" height="437" alt="Image">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-banner-area">
                <!--== Start Product Banner Item ==-->
                <div class="product-banner-item mb-xl-4">
                    <div class="product-banner-thumb">
                        <img src="{{ url('user/assets/images/brand-logo/left-side-bg.png') }}" width="530" height="310" alt="Image-HasTech">
                    </div>
                    <div class="product-banner-content ps-3 ps-sm-8">
                        <h5 class="product-banner-desc">CCTV Sales Coming</h5>
                        <h2 class="product-banner-title">Smart CCTV With <br> Wireless Connection</span></h2>
                        <a class="btn-link text-hover-headings-color fw-semi-bold" href="#">Shop Now <i class="icon ms-1 fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!--== End Product Banner Item ==-->

                <!--== Start Product Banner Item ==-->
                <div class="product-banner-item">
                    <div class="product-banner-thumb">
                        <img src="{{ url('user/assets/images/brand-logo/left-side-bg.png') }}" width="530" height="310" alt="Image-HasTech">
                    </div>
                    <div class="product-banner-content ps-3 ps-sm-8">
                        <h5 class="product-banner-desc">CCTV Sales Coming</h5>
                        <h2 class="product-banner-title">Smart CCTV With <br> Wireless Connection</span></h2>
                        <a class="btn-link text-hover-headings-color fw-semi-bold" href="#">Shop Now <i class="icon ms-1 fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!--== End Product Banner Item ==-->
            </div>
        </div>
    </div>
</div>
<!--== End Hero Area Wrapper ==-->

<!--== Start Features Area Wrapper ==-->
<div class="features-area">
    <div class="container-fluid">
        <div class="features-wrp bg-gray-light">
            <div class="row mb-n6">
                <div class="col-sm-6 col-md-6 col-lg-3 mb-6">
                    <!--== Start Feature Item ==-->
                    <div class="feature-item justify-content-center">
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
                    <div class="feature-item justify-content-center">
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
                    <div class="feature-item justify-content-center">
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
                    <div class="feature-item justify-content-center border-0">
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
</div>
<!--== End Features Area Wrapper ==-->


<!--== Start Product Tab Area Wrapper ==-->
<div class="product-area section-space">
    <div class="container-fluid">
        <h2 class="text-center text-lg-start mt-n2 mb-6 mb-l-8">Top Products!</h2>
        <div class="product-tab-content">
            
            <ul class="nav nav-tabs mb-6" id="myTab3" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="product-audio-video3-tab" data-bs-toggle="tab" data-bs-target="#product-audio-video3" type="button" role="tab" aria-controls="product-audio-video3" aria-selected="true">Audio & Video</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="product-gamming3-tab" data-bs-toggle="tab" data-bs-target="#product-gamming3" type="button" role="tab" aria-controls="product-gamming3" aria-selected="false">Gamming</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="product-heahphone3-tab" data-bs-toggle="tab" data-bs-target="#product-heahphone3" type="button" role="tab" aria-controls="product-heahphone3" aria-selected="false">Heahphone</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent3">

                <div class="tab-pane fade show active" id="product-audio-video3" role="tabpanel" aria-labelledby="product-audio-video3-tab">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-0 product-two-items">
                       
                        <x-product-item :itemList="$product" />

                    </div>
                </div>

                <div class="tab-pane fade" id="product-gamming3" role="tabpanel" aria-labelledby="product-gamming3-tab">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-0 product-two-items">
                        <div class="col">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-item-border">
                                <a class="product-item-thumb" href="#">
                                    <img src="{{ url('user/assets/images/shop/b11.jpg')}}" width="290" height="248" alt="Image-HasTech">
                                </a>
                                <span class="badges rounded-0">-10%</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    {{-- <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button> --}}
                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info">
                                    <h5 class="product-item-title"><a href="#">Android Television Super New DGT -256</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-item-price">$260.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="product-heahphone3" role="tabpanel" aria-labelledby="product-heahphone3-tab">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-0 product-two-items">
                        <div class="col">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-item-border">
                                <a class="product-item-thumb" href="#">
                                    <img src="{{ url('user/assets/images/shop/b10.jpg')}}" width="290" height="248" alt="Image-HasTech">
                                </a>
                                <span class="badges bg-theme4 rounded-0">HOT</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    {{-- <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button> --}}
                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info">
                                    <h5 class="product-item-title"><a href="#">Game Triger Finger New Insulated PH-X</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-item-price">$298.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Product Tab Area Wrapper ==-->

<!--== Start Product Banner Area Wrapper ==-->
<div class="product-banner-area">
    <div class="container-fluid">
        <div class="row mb-n6">
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-6">
                <!--== Start Product Banner Item ==-->
                <div class="product-banner-item">
                    <div class="product-banner-thumb">
                        <img src="{{ url('user/assets/images/brand-logo/bg.png')}}" width="566" height="330" alt="Image-HasTech">
                    </div>
                    <div class="product-banner-five-content text-center">
                        <h5 class="product-banner-desc">Sparing Sales Coming</h5>
                        <h2 class="product-banner-five-title">Camera Setup <span class="d-block">Machine</span></h2>
                        <a class="btn-link" href="#">Shop Now <i class="icon ms-1 fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!--== End Product Banner Item ==-->
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-6">
                <!--== Start Product Banner Item ==-->
                <div class="product-banner-item">
                    <div class="product-banner-thumb">
                        <img src="{{ url("user/assets/images/brand-logo/bg-2.png")}}" width="566" height="330" alt="Image-HasTech">
                    </div>
                    <div class="product-banner-five-content text-center">
                        <h5 class="product-banner-desc">Sparing Sales Coming</h5>
                        <h2 class="product-banner-five-title">Camera Setup <span class="d-block">Machine</span></h2>
                        <a class="btn-link" href="#">Shop Now <i class="icon ms-1 fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!--== End Product Banner Item ==-->
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-6 ms-xl-0 ms-auto me-xl-0 me-auto">
                <!--== Start Product Banner Item ==-->
                <div class="product-banner-item">
                    <div class="product-banner-thumb">
                        <img src="{{ url('user/assets/images/brand-logo/bg.png')}}" width="566" height="330" alt="Image-HasTech">
                    </div>
                    <div class="product-banner-five-content text-center">
                        <h5 class="product-banner-desc">Sparing Sales Coming</h5>
                        <h2 class="product-banner-five-title">Camera Setup <span class="d-block">Machine</span></h2>
                        <a class="btn-link" href="#">Shop Now <i class="icon ms-1 fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!--== End Product Banner Item ==-->
            </div>
        </div>
    </div>
</div>
<!--== End Product Banner Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->
<div class="product-area section-space">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-5 col-xxl-4">
                <div class="daily-deals-area daily-deals-style2 pb-6 pb-lg-8 pb-xl-0 mb-10 mb-xl-0">
                    <h3 class="daily-deals-title ps-7">Daily Deals!</h3>
                    <div class="daily-deals-swiper-button swiper-button-style3">
                        <!--== Start Swiper Navigation ==-->
                        <div class="swiper-button-prev"><i class="icon-arrow-left"></i></div>
                        <div class="swiper-button-next"><i class="icon-arrow-right"></i></div>
                    </div>
                    <div class="swiper product-daily-deals-three-slider">
                        <div class="swiper-wrapper">
                            <!--== Start Product Item ==-->
                            <div class="swiper-slide product-item product-item-border product-daily-deals-item">
                                <div class="product-item-info">
                                    <div class="countdown1 justify-content-start mb-6" data-countdown="2023/12/01"></div>
                                    <h5 class="product-item-title"><a href="#">Headphone Supersonic New Adi-25</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-item-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <a class="product-item-thumb" href="#">
                                    <img src="{{ url('user/assets/images/brand-logo/cctv.png') }}" width="308" height="328" alt="Image-HasTech">
                                </a>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                            </div>
                            <!--== End Product Item ==-->

                            <!--== Start Product Item ==-->
                            <div class="swiper-slide product-item product-item-border product-daily-deals-item">
                                <div class="product-item-info">
                                    <div class="countdown1 justify-content-start mb-6" data-countdown="2023/12/01"></div>
                                    <h5 class="product-item-title"><a href="#">Android Smart Watch New DGT -256</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-item-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <a class="product-item-thumb" href="#">
                                    <img src="{{ url('user/assets/images//brand-logo/cctv.png') }}" width="308" height="328" alt="Image-HasTech">
                                </a>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-7 col-xxl-8">
                <div class="product-tab3-content">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="product-audio-video2-tab" data-bs-toggle="tab" data-bs-target="#product-audio-video2" type="button" role="tab" aria-controls="product-audio-video2" aria-selected="true">Audio & Video</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product-gamming2-tab" data-bs-toggle="tab" data-bs-target="#product-gamming2" type="button" role="tab" aria-controls="product-gamming2" aria-selected="false">Gamming</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product-heahphone2-tab" data-bs-toggle="tab" data-bs-target="#product-heahphone2" type="button" role="tab" aria-controls="product-heahphone2" aria-selected="false">Heahphone</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade show active" id="product-audio-video2" role="tabpanel" aria-labelledby="product-audio-video2-tab">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-2 row-cols-xxl-3 mb-n8">
                                <div class="col mb-8">
                                    <!--== Start Product Item ==-->
                                    <div class="product-list-item">
                                        <a class="product-list-thumb" href="#">
                                            <img src="{{ url('user/assets/images/shop/p7.jpg') }}" width="107" height="107" alt="Image-HasTech">
                                        </a>
                                        <div class="product-list-info">
                                            <h5 class="product-list-title"><a href="#">D-Phone Android Latest UI New XP</a></h5>
                                            <div class="info-bottom">
                                                <div class="product-list-price">$256.00</div>
                                                <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                                <div class="product-list-review-icon">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="product-gamming2" role="tabpanel" aria-labelledby="product-gamming2-tab">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-2 row-cols-xxl-3 mb-n8">
                                <div class="col mb-8">
                                    <!--== Start Product Item ==-->
                                    <div class="product-list-item">
                                        <a class="product-list-thumb" href="#">
                                            <img src="{{ url('user/assets/images/shop/p9.jpg') }}" width="107" height="107" alt="Image-HasTech">
                                        </a>
                                        <div class="product-list-info">
                                            <h5 class="product-list-title"><a href="#">Vivi Movi Box Black HK With Eye Protect</a></h5>
                                            <div class="info-bottom">
                                                <div class="product-list-price">$256.00</div>
                                                <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                                <div class="product-list-review-icon">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                              
                            </div>
                        </div>

                        <div class="tab-pane fade" id="product-heahphone2" role="tabpanel" aria-labelledby="product-heahphone2-tab">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-2 row-cols-xxl-3 mb-n8">
                                <div class="col mb-8">
                                    <!--== Start Product Item ==-->
                                    <div class="product-list-item">
                                        <a class="product-list-thumb" href="#">
                                            <img src="{{ url('user/assets/images/shop/p11.jpg')}}" width="107" height="107" alt="Image-HasTech">
                                        </a>
                                        <div class="product-list-info">
                                            <h5 class="product-list-title"><a href="#">Headphone Supersonic New Adi-25</a></h5>
                                            <div class="info-bottom">
                                                <div class="product-list-price">$256.00</div>
                                                <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                                <div class="product-list-review-icon">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Product Area Wrapper ==-->

<!--== Start Product Categories Area Wrapper ==-->
<div class="product-categories-area">
    <div class="container-fluid">
        <div class="product-categories-wrp section-space bg-img" data-bg-img="assets/images/shop/category/bg2.jpg">
            <div class="section-title text-center">
                <h2 class="title mt-n2 mb-0">Top Categories</h2>
            </div>
            <div class="swiper product-categories-three-slider swiper-button-style product-categories-items">
                <div class="swiper-wrapper">
                    <!--== Start Product Categorie Item ==-->
                    <a href="#" class="swiper-slide product-category-item">
                        <div class="product-category-thumb">
                            <img src="{{ url('user/assets/images/brand-logo/rounded-camera.png') }}" width="101" height="101" alt="Image-HasTech">
                        </div>
                        <h5 class="product-category-title">Audio/Dideo</h5>
                    </a>
                    <!--== End Product Categorie Item ==-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Product Categories Area Wrapper ==-->

<!--== Start Product Tab Area Wrapper ==-->
<div class="product-area section-space">
    <div class="container-fluid">
        <h2 class="text-center text-lg-start mt-n2 mb-6 mb-l-8">Bestseller Products!</h2>
        <div class="product-tab-content">
            <ul class="nav nav-tabs mb-6" id="myTab3" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="product-audio-video4-tab" data-bs-toggle="tab" data-bs-target="#product-audio-video4" type="button" role="tab" aria-controls="product-audio-video4" aria-selected="true">Audio & Video</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="product-gamming4-tab" data-bs-toggle="tab" data-bs-target="#product-gamming4" type="button" role="tab" aria-controls="product-gamming4" aria-selected="false">Gamming</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="product-heahphone4-tab" data-bs-toggle="tab" data-bs-target="#product-heahphone4" type="button" role="tab" aria-controls="product-heahphone4" aria-selected="false">Heahphone</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent3">

                <div class="tab-pane fade show active" id="product-audio-video4" role="tabpanel" aria-labelledby="product-audio-video4-tab">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-0 product-two-items">
                        <div class="col">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-item-border">
                                <a class="product-item-thumb" href="#">
                                    <img src="{{ url('user/assets/images/brand-logo/cctv.png') }}" width="290" height="248" alt="Image-HasTech">
                                </a>
                                <span class="badges rounded-0">-10%</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info">
                                    <h5 class="product-item-title"><a href="#">Game Triger Finger New Insulated PH-X</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-item-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="product-gamming4" role="tabpanel" aria-labelledby="product-gamming4-tab">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-0 product-two-items">
                        <div class="col">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-item-border">
                                <a class="product-item-thumb" href="#">
                                    <img src="{{ url('user/assets/images/shop/b11.jpg')}}" width="290" height="248" alt="Image-HasTech">
                                </a>
                                <span class="badges rounded-0">-10%</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info">
                                    <h5 class="product-item-title"><a href="#">Android Television Super New DGT -256</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-item-price">$260.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="product-heahphone4" role="tabpanel" aria-labelledby="product-heahphone4-tab">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-0 product-two-items">
                        <div class="col">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-item-border">
                                <a class="product-item-thumb" href="#">
                                    <img src="{{ url('user/assets/images/shop/b10.jpg')}}" width="290" height="248" alt="Image-HasTech">
                                </a>
                                <span class="badges bg-theme4 rounded-0">HOT</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info">
                                    <h5 class="product-item-title"><a href="#">Game Triger Finger New Insulated PH-X</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-item-price">$298.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                        <div class="product-item-review-icon">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Product Tab Area Wrapper ==-->

<!--== Start Product Banner Area Wrapper ==-->
<div class="product-banner-area">
    <div class="container-fluid">
        <div class="row mb-n6">
            <div class="col-12 col-lg-6 mb-6">
                <!--== Start Product Banner Item ==-->
                <div class="product-banner-item">
                    <div class="product-banner-thumb">
                        <img src="{{ url('user/assets/images/brand-logo/cctvbg.jpg') }}" width="860" height="357" alt="Image-HasTech">
                    </div>
                    <div class="product-banner-six-content text-center">
                        <h5 class="product-banner-desc">Get 50% Off</h5>
                        <h2 class="product-banner-nine-title text-uppercase">Smart Television <span class="d-block">With Pen</span></h2>
                        <a class="btn product-banner-five-btn d-none d-sm-inline-block" href="#">Shop Now <i class="icon fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!--== End Product Banner Item ==-->
            </div>
            <div class="col-12 col-lg-6 mb-6">
                <!--== Start Product Banner Item ==-->
                <div class="product-banner-item">
                    <div class="product-banner-thumb">
                        <img src="{{ url('user/assets/images/brand-logo/cctvbg.jpg') }}" width="860" height="357" alt="Image-HasTech">
                    </div>
                    <div class="product-banner-six-content text-center">
                        <h5 class="product-banner-desc">Get 50% Off</h5>
                        <h2 class="product-banner-nine-title text-uppercase">Smart Phone <span class="d-block">With Pen</span></h2>
                        <a class="btn product-banner-five-btn d-none d-sm-inline-block" href="#">Shop Now <i class="icon fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!--== End Product Banner Item ==-->
            </div>
        </div>
    </div>
</div>
<!--== End Product Banner Area Wrapper ==-->

<!--== Start Brand Logo Area Wrapper ==-->
<div class="section-space">
    <div class="container-fluid">
        <div class="swiper brand-logo-two-slider-container swiper-button-style swiper-button-style8">
            <div class="swiper-wrapper">
                <div class="swiper-slide brand-logo-item">
                    <!--== Start Brand Logo Item ==-->
                    <img src="{{ url('user/assets/images/brand-logo/1.png')}}" width="124" height="79" alt="Image-HasTech">
                    <!--== End Brand Logo Item ==-->
                </div>
                <div class="swiper-slide brand-logo-item">
                    <!--== Start Brand Logo Item ==-->
                    <img src="{{ url('user/assets/images/brand-logo/2.png')}}" width="124" height="79" alt="Image-HasTech">
                    <!--== End Brand Logo Item ==-->
                </div>
                <div class="swiper-slide brand-logo-item">
                    <!--== Start Brand Logo Item ==-->
                    <img src="{{ url('user/assets/images/brand-logo/3.png')}}" width="124" height="79" alt="Image-HasTech">
                    <!--== End Brand Logo Item ==-->
                </div>
                <div class="swiper-slide brand-logo-item">
                    <!--== Start Brand Logo Item ==-->
                    <img src="{{ url('user/assets/images/brand-logo/4.png')}}" width="124" height="79" alt="Image-HasTech">
                    <!--== End Brand Logo Item ==-->
                </div>
                <div class="swiper-slide brand-logo-item">
                    <!--== Start Brand Logo Item ==-->
                    <img src="{{ url('user/assets/images/brand-logo/5.png')}}" width="124" height="79" alt="Image-HasTech">
                    <!--== End Brand Logo Item ==-->
                </div>
                <div class="swiper-slide brand-logo-item">
                    <!--== Start Brand Logo Item ==-->
                    <img src="{{ url('user/assets/images/brand-logo/6.png')}}" width="124" height="79" alt="Image-HasTech">
                    <!--== End Brand Logo Item ==-->
                </div>
                <div class="swiper-slide brand-logo-item">
                    <!--== Start Brand Logo Item ==-->
                    <img src="{{ url('user/assets/images/brand-logo/7.png')}}" width="124" height="79" alt="Image-HasTech">
                    <!--== End Brand Logo Item ==-->
                </div>
            </div>
            <!--== Start Swiper Navigation ==-->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>
<!--== End Brand Logo Area Wrapper ==-->

<!--== Start News Letter Area Wrapper ==-->
<div class="newsletter-area bg-img" data-bg-img="{{ url('user/assets/images/photos/bg2.jpg')}}">
    <div class="container-fluid">
        <div class="newsletter-two-content-wrap border-0">
            <div class="row align-items-center">
                <div class="col-lg-5 offset-lg-1">
                    <div class="newsletter-two-content">
                        <img class="icon-img" src="{{ url('user/assets/images/icons/5.png')}}" alt="Icon">
                        <div class="info">
                            <h3 class="title text-white">Join our newsletter & 10% Off</h3>
                            <p class="text-white">Sign up for our newsletter to get up-to-date from us</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form class="newsletter-two-form mt-5 mt-lg-0 ms-lg-6">
                        <input type="email" class="form-control" placeholder="Enter Your Mail">
                        <button class="btn-submit" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End News Letter Area Wrapper ==-->
</main>
@endsection