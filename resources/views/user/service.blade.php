@section('title', 'Service | full Surveilance')
@section('meta_desc', 'Service | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-header-content">
                        <h2 class="page-header-title">Products</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home //</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
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

    <!--== Start Product Area Wrapper ==-->
    <div class="product-area section-space">
        <div class="container">
            <!--== Start Product Top Bar Area Wrapper ==-->
            <div class="shop-top-bar">
                <div class="nav nav-tabs shop-filter-nav active" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="column-three-tab" data-bs-toggle="tab"
                        data-bs-target="#column-three" type="button" role="tab" aria-controls="column-three"
                        aria-selected="true"><i class="icon-grid icons"></i></button>
                    <button class="nav-link mr-0" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list"
                        type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i
                            class="icon-list icons"></i></button>
                </div>
                <select class="select-shoing">
                    <option data-display="Default Sorting">Default Sorting</option>
                    <option value="1">Featured</option>
                    <option value="2">Best Selling</option>
                    <option value="3">Price: low to high</option>
                    <option value="4">Price: high to low</option>
                </select>
                <div class="product-showing-count">
                    Showing <span>1–9</span> of <span>10</span> results
                </div>
                <nav class="pagination-area ms-md-auto mt-3 mt-md-0">
                    <ul class="page-numbers">
                        <li>
                            <a class="page-number active" href="#">1</a>
                        </li>
                        <li>
                            <a class="page-number" href="#">2</a>
                        </li>
                        <li>
                            <a class="page-number next" href="#">
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--== End Product Top Bar Area Wrapper ==-->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="column-three" role="tabpanel"
                    aria-labelledby="column-three-tab">
                    <div class="row mb-n6">
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <a class="product-item-thumb" href="single-product.php">
                                    <img src="assets/images/brand-logo/cctv.png" width="270" height="264" alt="Image-HasTech">
                                </a>
                                <span class="badges">-10%</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare"
                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center pb-6">
                                    <h4 class="product-item-title mb-2"><a href="#">Game Triger
                                            Finger New Insulated PH-X</a></h4>
                                    <div class="product-item-price">$160.00 - <span class="price-old">$260.00</span>
                                    </div>
                                    <div class="product-item-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <a class="product-item-thumb" href="single-product.php">
                                    <img src="assets/images/brand-logo/cctv.png" width="270" height="264" alt="Image-HasTech">
                                </a>
                                <span class="badges bg-theme3">New</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare"
                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center pb-6">
                                    <h4 class="product-item-title mb-2"><a href="#">Android
                                            Television Super New DGT Smart -256</a></h4>
                                    <div class="product-item-price">$256.00</div>
                                    <div class="product-item-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <a class="product-item-thumb" href="#">
                                    <img src="assets/images/brand-logo/cctv.png" width="270" height="264" alt="Image-HasTech">
                                </a>
                                <span class="badges bg-theme4">Hot</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare"
                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center pb-6">
                                    <h4 class="product-item-title mb-2"><a href="#">Headphone
                                            Supersonic Pew Adi Cable -25</a></h4>
                                    <div class="product-item-price">$280.00</div>
                                    <div class="product-item-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <a class="product-item-thumb" href="#">
                                    <img src="assets/images/brand-logo/cctv.png" width="270" height="264" alt="Image-HasTech">
                                </a>
                                <span class="badges">Sold Out</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare"
                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center pb-6">
                                    <h4 class="product-item-title mb-2"><a href="#">Bluetooth
                                            Speaker New Without Cable XP</a></h4>
                                    <div class="product-item-price">$253.00</div>
                                    <div class="product-item-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <a class="product-item-thumb" href="#">
                                    <img src="assets/images/brand-logo/cctv.png" width="270" height="264" alt="Image-HasTech">
                                </a>
                                <span class="badges">-10%</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare"
                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center pb-6">
                                    <h4 class="product-item-title mb-2"><a href="#">Game Triger
                                            Finger New Insulated PH-X</a></h4>
                                    <div class="product-item-price">$160.00 - <span class="price-old">$260.00</span>
                                    </div>
                                    <div class="product-item-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <a class="product-item-thumb" href="#">
                                    <img src="assets/images/brand-logo/cctv.png" width="270" height="264" alt="Image-HasTech">
                                </a>
                                <span class="badges bg-theme3">New</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare"
                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center pb-6">
                                    <h4 class="product-item-title mb-2"><a href="#">Android
                                            Television Super New DGT White -256</a></h4>
                                    <div class="product-item-price">$280.00</div>
                                    <div class="product-item-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <a class="product-item-thumb" href="#">
                                    <img src="assets/images/brand-logo/cctv.png" width="270" height="264" alt="Image-HasTech">
                                </a>
                                <span class="badges bg-theme4">Hot</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare"
                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center pb-6">
                                    <h4 class="product-item-title mb-2"><a href="#">Headphone
                                            Supersonic Pew Adi Speaker -25</a></h4>
                                    <div class="product-item-price">$156.00</div>
                                    <div class="product-item-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <a class="product-item-thumb" href="#">
                                    <img src="assets/images/brand-logo/cctv.png" width="270" height="264" alt="Image-HasTech">
                                </a>
                                <span class="badges">Sold Out</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare"
                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center pb-6">
                                    <h4 class="product-item-title mb-2"><a href="#">Bluetooth
                                            Speaker New Smart Without Cable</a></h4>
                                    <div class="product-item-price">$198.00</div>
                                    <div class="product-item-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item">
                                <a class="product-item-thumb" href="#">
                                    <img src="assets/images/brand-logo/cctv.png" width="270" height="264" alt="Image-HasTech">
                                </a>
                                <span class="badges">-10%</span>
                                <div class="product-item-action">
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon-heart"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-compare"
                                        data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon-shuffle"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </div>
                                <div class="product-item-info text-center pb-6">
                                    <h4 class="product-item-title mb-2"><a href="#">Game Triger
                                            Finger New Insulated PH-X</a></h4>
                                    <div class="product-item-price">$160.00 - <span class="price-old">$260.00</span>
                                    </div>
                                    <div class="product-item-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!--== End Product Item ==-->
                        </div>
                        <div class="col-12">
                            <nav class="pagination-area mt-6 mb-6">
                                <ul class="page-numbers justify-content-center">
                                    <li>
                                        <a class="page-number active" href="#">1</a>
                                    </li>
                                    <li>
                                        <a class="page-number" href="#">2</a>
                                    </li>
                                    <li>
                                        <a class="page-number next" href="#">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade product-list-items" id="nav-list" role="tabpanel"
                    aria-labelledby="nav-list-tab">
                    <div class="row row-cols-1 row-cols-sm-2 mb-n8">
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p7.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">D-Phone Android
                                            Latest UI New XP</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item border-0">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p8.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Digital Lens
                                            Camera HYU-259Xl</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p9.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Vivi Movi Box
                                            Black HK With Eye Protect</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item border-0">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p10.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Bluetooth Speaker
                                            Without Cable</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p11.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Headphone
                                            Supersonic New Adi-25</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item border-0">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p12.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Game Triger Finger
                                            New Insulated PH-X</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p13.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Watch Android
                                            Latest UI New SM</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item border-0">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p7.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">D-Phone Android
                                            Latest UI New XP</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p8.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Digital Lens
                                            Camera HYU-259Xl</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item border-0">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p9.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Vivi Movi Box
                                            Black HK With Eye Protect</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p10.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Bluetooth Speaker
                                            Without Cable</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item border-0">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p11.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Headphone
                                            Supersonic New Adi-25</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p12.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Game Triger Finger
                                            New Insulated PH-X</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col mb-8">
                            <!--== Start Product Item ==-->
                            <div class="product-list-item border-0">
                                <a class="product-list-thumb" href="#">
                                    <img src="assets/images/shop/p13.jpg" width="107" height="107" alt="Image-HasTech">
                                </a>
                                <div class="product-list-info">
                                    <h5 class="product-list-title"><a href="#">Watch Android
                                            Latest UI New SM</a></h5>
                                    <div class="info-bottom">
                                        <div class="product-list-price">$256.00</div>
                                        <button type="button" class="info-btn-cart" data-bs-toggle="modal"
                                            data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
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
                        <div class="col-12">
                            <nav class="pagination-area mt-6 mb-6">
                                <ul class="page-numbers justify-content-center">
                                    <li>
                                        <a class="page-number active" href="#">1</a>
                                    </li>
                                    <li>
                                        <a class="page-number" href="#">2</a>
                                    </li>
                                    <li>
                                        <a class="page-number next" href="#">
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Product Area Wrapper ==-->
</main>
@endsection