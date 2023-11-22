@section('title', 'All product | full Surveilance')
@section('meta_desc', 'All product | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    {{-- <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-header-content">
                        <h2 class="page-header-title">Products</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
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
    </div> --}}
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <div class="product-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-9 order-0 order-lg-1">
                    <!--== Start Product Top Bar Area Wrapper ==-->
                    <div class="shop-top-bar">
                        <div class="nav nav-tabs shop-filter-nav active" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="column-three-tab" data-bs-toggle="tab" data-bs-target="#column-three" type="button" role="tab" aria-controls="column-three" aria-selected="true"><i class="icon-grid icons"></i></button>
                            <button class="nav-link mr-0" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="icon-list icons"></i></button>
                        </div>
                        <select class="select-shoing">
                            <option data-display="Default Sorting">Default Sorting</option>
                            <option value="3">Price: low to high</option>
                            <option value="4">Price: high to low</option>
                        </select>
                        <div class="product-showing-count">
                            Showing <span>1–{{ $product->count() }}</span> of <span>{{ $product->total() }}</span> results
                        </div>
                        {{-- <nav class="pagination-area ms-md-auto mt-3 mt-md-0">
                            <ul class="page-numbers">
                                <li>
                                    <a class="page-number active" href="shop.html">1</a>
                                </li>
                                <li>
                                    <a class="page-number" href="shop.html">2</a>
                                </li>
                                <li>
                                    <a class="page-number next" href="shop.html">
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                    <!--== End Product Top Bar Area Wrapper ==-->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="column-three" role="tabpanel" aria-labelledby="column-three-tab">
                            <div class="row mb-n6">


                                @foreach ($product as $item)
                                 <div class="col-sm-6 col-lg-6 col-xl-4 mb-6">
                                    <!--== Start Product Item ==-->
                                    <div class="product-item">
                                        <a class="product-item-thumb" href="shop-single-product.html">
                                            <img src="{{ url($item->product_image[0]->img ?? '#') }}" width="270" height="264" alt="Image-HasTech">
                                        </a>
                                        {{-- <span class="badges">-10%</span> --}}
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
                                        <div class="product-item-info text-center pb-6">
                                            <h5 class="product-item-title mb-2"><a href="{{ url('item', $item->id) }}">{{ $item->name }}</a></h5>
                                            <div class="product-item-price">${{ number_format($item->discount_price, 2) }} - <span class="price-old">${{ number_format($item->actual_price, 2) }}</span></div>
                                            {{-- <div class="product-item-review-icon">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                @endforeach

                                {{-- <div class="col-12">
                                    <nav class="pagination-area mt-6 mb-6">
                                        <ul class="page-numbers justify-content-center">
                                            <li>
                                                <a class="page-number active" href="shop.html">1</a>
                                            </li>
                                            <li>
                                                <a class="page-number" href="shop.html">2</a>
                                            </li>
                                            <li>
                                                <a class="page-number next" href="shop.html">
                                                    <i class="icon-arrow-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade product-list-items" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                            <div class="row row-cols-1 row-cols-sm-2 mb-n8">


                                @foreach ($product as $item)
                                   <div class="col mb-8">
                                    <!--== Start Product Item ==-->
                                    <div class="product-list-item">
                                        <a class="product-list-thumb" href="{{ url('item', $item->id) }}">
                                            <img src="{{ url($item->product_image[0]->img ?? '#') }}" width="107px" height="107px" alt="Image-HasTech">
                                        </a>
                                        <div class="product-list-info">
                                            <h5 class="product-list-title"><a href="{{ url('item', $item->id) }}">{{ $item->name }}</a></h5>
                                            <div class="info-bottom">
                                                <div class="product-list-price">${{ number_format($item->discount_price, 2) }}</div>
                                                <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button>
                                                {{-- <div class="product-list-review-icon">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End Product Item ==-->
                                </div>
                                @endforeach

                                <div class="col-12 col-lg-12 col-md-12">
                                    <nav class="pagination-area mt-6 mb-6">
                                        <ul class="page-numbers justify-content-center">
                                            <li>
                                                <a class="page-number active" href="shop.html">1</a>
                                            </li>
                                            <li>
                                                <a class="page-number" href="shop.html">2</a>
                                            </li>
                                            <li>
                                                <a class="page-number next" href="shop.html">
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
                <div class="col-lg-4 col-xl-3 order-1 order-lg-0">
                    <!--== Start Sidebar Area Wrapper ==-->
                    <div class="sidebar-area mt-10 mt-lg-0">
                        <div class="widget-item widget-item-one pb-5">
                            <h3 class="widget-two-title text-black">Category</h3>
                            <div class="widget-categories-list">
                                 @foreach ($categories as $item)
                                   <a class="widget-category-item" href="#"> <span class="icon"><img src="{{ url($item->img ?? '#') }}" width="24px" height="24px" alt="Icon"></span> {{ $item->name }} ({{ $item->product->count() }})</a>
                                 @endforeach
                            </div>
                        </div>

                        <div class="widget-item widget-item-one">
                            <h3 class="widget-two-title text-black">Product Filter</h3>
                            <div class="widget-filter-size">
                                <h4 class="filter-size-title">Filter By Size</h4>
                                <div class="filter-form-check">
                                    <input class="filter-form-check-input" type="checkbox" id="filterSizeChecked1">
                                    <label class="filter-form-check-label" for="filterSizeChecked1">All (65)</label>
                                </div>
                                <div class="filter-form-check">
                                    <input class="filter-form-check-input" type="checkbox" id="filterSizeChecked2">
                                    <label class="filter-form-check-label" for="filterSizeChecked2">Small (15)</label>
                                </div>
                                <div class="filter-form-check">
                                    <input class="filter-form-check-input" type="checkbox" id="filterSizeChecked3">
                                    <label class="filter-form-check-label" for="filterSizeChecked3">Medium (10)</label>
                                </div>
                                <div class="filter-form-check">
                                    <input class="filter-form-check-input" type="checkbox" id="filterSizeChecked4">
                                    <label class="filter-form-check-label" for="filterSizeChecked4">Lerge (22)</label>
                                </div>
                            </div>
                            <div class="widget-price-filter pe-0">
                                <h4 class="filter-price-title">Filter By Price</h4>
                                <div class="slider-range" id="slider-range"></div>
                                <div class="slider-labels">
                                    <p>Price:</p>
                                    <div class="caption">
                                        <span id="slider-range-value1"></span>
                                    </div>
                                    <span> - </span>
                                    <div class="caption">
                                        <span id="slider-range-value2"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-item widget-item-one">
                            <h3 class="widget-two-title text-black">New products</h3>
                            <div class="widget-product-items">

                                @foreach (App\Models\Product::orderBy('id', 'desc')->limit(3)->get() as $item)
                                <a href="{{ url('item', $item->id) }}" class="widget-product-two-item">
                                    <div class="widget-product-two-thumb">
                                        <img src="{{ url($item->product_image[0]->img ?? '#') }}" width="70" height="70" alt="Image">
                                    </div>
                                    <div class="widget-product-content">
                                        <h5 class="widget-product-two-title">{{ $item->name }}</h5>
                                        <span class="widget-product-two-price">${{ number_format($item->discount_price, 2) }}</span>
                                    </div>
                                </a>
                                @endforeach
                                
                            </div>
                        </div>

                        {{-- <div class="widget-item mb-0 p-0">
                            <div class="widget-banner product-banner-eight-item" data-bg-img="{{ url('user/assets/images/shop/banner/20.png') }}">
                                <h5 class="product-banner-eight-desc text-primary">Sparing Sales</h5>
                                <h2 class="product-banner-eight-title mt-n2">Mexi Phone With EMI</h2>
                                <a class="btn product-banner-eight-btn" href="shop.html">Shop Now <i class="icon fa fa-arrow-right"></i></a>
                                <img class="ms-1" src="{{ url('user/assets/images/shop/banner/21.png') }}" width="225" height="201" alt="Image-HasTech">
                            </div>
                        </div> --}}
                        
                    </div>
                    <!--== End Sidebar Area Wrapper ==-->
                </div>
            </div>
        </div>
    </div>
    <!--== End Product Area Wrapper ==-->

</main>
@endsection