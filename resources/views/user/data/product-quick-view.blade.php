@if ($productView ?? null)
<div>
    <button type="button" class="btn-close" data-bs-dismiss="modal"><span>×</span></button>
                    <div class="row row-gutter-0">
                        <div class="col-lg-6">
                            <div class="single-product-slider">
                                <div class="single-product-thumb">
                                    <div class="swiper single-product-quick-view-slider">
                                        <div class="swiper-wrapper">
                                            @foreach ($productView->product_image as $item)
                                            <div class="swiper-slide">
                                                <div class="thumb-item">
                                                    <img src="{{ url($item->img ?? '#') }}" alt="Image" width="640" height="710">
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-detail-content mt-6 mt-lg-0">
                                <h2 class="product-detail-title mt-n1 me-10"> {{ $productView->name }} </h2>
                                <div class="product-detail-price">${{ number_format($productView->discount_price, 2) }} - <span class="price-old">${{ number_format($productView->actual_price, 2) }}</span></div>
                                {{-- <div class="product-detail-review">
                                    <div class="product-detail-review-icon">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <p class="product-detail-review-show">( 1 Review )</p>
                                </div> --}}
                                
                                <div class="mb-3">
                                    {{-- <div class="pro-qty mb-2 mb-sm-0">
                                        <input type="text" title="Quantity" value="01">
                                    </div>
                                    <button class="product-detail-cart-btn" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">Add to cart</button>
                                --}}
                                <div class="pro-qty {{  cart_count_per_product($productView->id) > 0 ? '' : 'd-none' }}" data-id="{{ $productView->id }}">
                                    <div class="dec qty-btn dec-cart">-</div>
                                    <input type="text" title="Quantity" class="count-product" data-id="{{ $productView->id }}" data-amount="{{ $productView->discount_price }}" value="{{ cart_count_per_product($productView->id) }}">
                                    <div class="inc qty-btn inc-cart">+</div>
                                </div>
                                <button class="product-detail-cart-btn add-cart {{  cart_count_per_product($productView->id) > 0 ? 'd-none' : '' }} " type="button" data-id="{{ $productView->id }}">Add to cart</button>
                              </div>
                                {{-- <div>
                                    <button type="button" class="product-detail-compare-btn" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                        <i class="icon icon-shuffle"></i> Compare
                                    </button>
                                    <button type="button" class="product-detail-wishlist-btn" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="icon icon-heart"></i> Add to wishlist
                                    </button>
                                </div> --}}
                                <ul class="product-detail-meta pt-6">
                                    <li><span>Categories:</span> {{ $productView->category->name }} </li>
                                </ul>
                            </div>
                            <p class="product-detail-desc">
                                {!! $productView->desc !!}
                            </p>
       </div>
    </div>
</div>
@endif
