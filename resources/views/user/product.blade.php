@section('title', ''.$product->name.'')
@section('meta_desc', 'Product | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">
<style>
     .product-action-btn {
        text-align: center;
        width: 27px;
        height: 27px;
        border-radius: 50%;
        border: none;
        background: transparent;
     }
</style>

    <!--== Start Product Detail Area Wrapper ==-->
    <div class="product-detail-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-detail-thumb me-lg-6">
                        <div class="swiper single-product-thumb-slider">
                            <div class="swiper-wrapper">

                                 @foreach ($product->product_image as $item)
                                 <a class="lightbox-image swiper-slide" data-fancybox="gallery"  href="{{ url($item->img ?? '#') }}">
                                 <img src="{{ url($item->img ?? '#') }}" width="640" height="530" alt="Image">
                                 </a>
                                 @endforeach

                            </div>
                            <!-- swiper pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="single-product-nav-wrp">
                            <div class="swiper single-product-nav-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($product->product_image as $item)
                                    <div class="nav-item swiper-slide">
                                        <img src="{{ url($item->img) }}" alt="Image" width="127" height="127">
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="swiper-button-style11">
                                <!--== Start Swiper Navigation ==-->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-detail-content">
                        <h2 class="product-detail-title mt-n1 me-10">{{ $product->name }}</h2>
                        <div class="product-detail-price">${{ number_format($product->discount_price, 2) }} - <span class="price-old">${{ number_format($product->actual_price, 2) }}</span></div>
                        <div class="product-detail-review">
                            <div class="product-detail-review-icon">
                                <i data-star="{{ $averageRating }}"></i>
                            </div>
                            <p class="product-detail-review-show">( {{ count($review) }} Review )</p>
                        </div>

                        {{-- <div class="product-color-list">
                            <h4>Color:</h4>
                            <div class="product-color-list-check">
                                <input class="form-check-input bg-red" type="radio" name="flexRadioColorList" id="colorList1">
                                <label class="form-check-label" for="colorList1">Red</label>
                            </div>
                            <div class="product-color-list-check">
                                <input class="form-check-input bg-green" type="radio" name="flexRadioColorList"
                                    id="colorList2" checked>
                                <label class="form-check-label" for="colorList2">Green</label>
                            </div>
                            <div class="product-color-list-check me-0">
                                <input class="form-check-input bg-blue" type="radio" name="flexRadioColorList"
                                    id="colorList3">
                                <label class="form-check-label" for="colorList3">Blue</label>
                            </div>
                        </div> --}}


                        {{-- <p class="product-detail-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimo veniam, quis
                            nostrud exercitation ullamco laboris nisi.</p> --}}

                        <div class="mb-3">
                            {{-- <div class="pro-qty">
                                <input type="text" title="Quantity" value="1">
                            </div> --}}
                            <div class="pro-qty {{  cart_count_per_product($product->id) > 0 ? '' : 'd-none' }}" data-id="{{ $product->id }}">
                                    <div class="dec qty-btn dec-cart">-</div>
                                    <input type="text" title="Quantity" class="count-product" data-id="{{ $product->id }}" data-amount="{{ $product->discount_price }}" value="{{ cart_count_per_product($product->id) }}">
                                    <div class="inc qty-btn inc-cart">+</div>
                            </div>
                            <button class="product-detail-cart-btn add-cart {{  cart_count_per_product($product->id) > 0 ? 'd-none' : '' }} " type="button" data-id="{{ $product->id }}">Add to cart</button>
                       
                        </div>
                        <div>
                            @php
                            if(Auth::check()){
                               $wishlistCheck  = App\Models\Wishlist::where('product_id', $product->id)->where('user_id', Auth::id())->first();
                            }else{
                                $wishlistCheck = App\Models\Wishlist::where('product_id', $product->id)->where('uuid', Session::get('uuid'))->first();
                            }
                          @endphp
                            <button type="button" class="product-detail-compare-btn">
                                <i class="icon icon-shuffle"></i> Compare
                            </button>
                            <button type="button" class="product-action-btn action-btn-wishlist {{ $wishlistCheck  ? 'active-wishlist' : '' }}" data-id="{{ $product->id }}">
                                <i class="icon-heart"></i>
                            </button>
                        </div>
                        <!--== Start Features Area Wrapper ==-->
                        <div class="features-two-area">
                            <div class="row mb-n3">
                                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                                    <!--== Start Feature Item ==-->
                                    <div class="feature-two-item">
                                        <img class="icon" src="{{ url('user/assets/images/icons/1.png') }}" width="44" height="38"
                                            alt="Icon"> <span class="feature-two-title">Support 24/7</span>
                                    </div>
                                    <!--== End Feature Item ==-->
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                                    <!--== Start Feature Item ==-->
                                    <div class="feature-two-item">
                                        <img class="icon" src="{{ url('user/assets/images/icons/3.png') }}" width="48" height="38"
                                            alt="Icon"> <span class="feature-two-title">Card Payment</span>
                                    </div>
                                    <!--== End Feature Item ==-->
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-3">
                                    <!--== Start Feature Item ==-->
                                    <div class="feature-two-item">
                                        <img class="icon" src="{{ url('user/assets/images/icons/4.png') }}" width="50" height="38"
                                            alt="Icon"> <span class="feature-two-title">Free Shipping</span>
                                    </div>
                                    <!--== End Feature Item ==-->
                                </div>
                            </div>
                        </div>
                        <!--== End Features Area Wrapper ==-->
                        <ul class="product-detail-meta">
                            <li><span>Categories:</span> {{ $product->category->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--== Start Product Detail Tab Area Wrapper ==-->
            <div class="nav product-detail-nav" id="product-detail-nav-tab" role="tablist">
                <button class="product-detail-nav-link active" id="description-tab" data-bs-toggle="tab"
                    data-bs-target="#description" type="button" role="tab" aria-controls="description"
                    aria-selected="true">Description</button>
                {{-- <button class="product-detail-nav-link" id="specification-tab" data-bs-toggle="tab"
                    data-bs-target="#specification" type="button" role="tab" aria-controls="specification"
                    aria-selected="false">Specification</button> --}}
                <button class="product-detail-nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                    type="button" role="tab" aria-controls="review" aria-selected="false">Review</button>
            </div>
            <div class="tab-content" id="product-detail-nav-tabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel"
                    aria-labelledby="description-tab">
                    <p class="product-detail-nav-description">
                        {!! $product->desc !!}
                    </p>
                </div>


                <div class="tab-pane" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <!--== Start Reviews Content Item ==-->
                    @foreach ($allreview as $reviewdata)
                    <div class="product-review-item">
                        <div class="product-review-top">
                            <div class="product-review-thumb">
                                <img src="{{ url('user/assets/images/shop/details/c1.png') }}" alt="Images">
                            </div>
                            <div class="product-review-content">
                                <h4 class="product-review-name">{{ ucfirst(@$reviewdata->user_data->name) }}</h4>
                                <div class="product-review-icon">
                                    @for ($i = 1; $i <= $reviewdata->star_rating; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor

                                    @for ($i = $reviewdata->star_rating + 1; $i <= 5; $i++)
                                        <i class="fa fa-star-o"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="desc">{{ $reviewdata->comment }}</p>
                        <button type="button" class="review-reply"><i class="fa fa fa-undo"></i></button>
                    </div>
                @endforeach
                </div>
            </div>
            <!--== End Product Detail Tab Area Wrapper ==-->
        </div>
    </div>
    <!--== End Product Detail Area Wrapper ==-->

    <!--== Start Related Product Area Wrapper ==-->
    @php
        $relatedproducts = App\Models\Product::whereNot('id', $product->id)->where('category_id', $product->category_id)->orderBy('id', 'desc')->get();
    @endphp
    @if (count($relatedproducts) > 0)
    <div class="product-area section-bottom-space">
        <div class="container">
            <h2 class="section-title text-center mt-n3">Related Products</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 g-0 product-two-items">
                <x-product-item :itemList="$relatedproducts" />
            </div>
        </div>
    </div>
    @endif
    
    <!--== End Related Product Area Wrapper ==-->
</main>
@endsection