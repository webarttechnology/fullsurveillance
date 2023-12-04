@section('title', 'Service | full Surveilance')
@section('meta_desc', 'Service | full Surveilance')
@extends('user.master.layout')
@section('content')
<style>
    .product-list-info .info-bottom {
        padding-right: 0px !important;
    }
    .pro-qty input {
      height: 35px !important;
    }
</style>
<main class="main-content">
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
                <select class="select-shoing search-sorting">
                    <option value="default">Default Sorting</option>
                    <option value="low">Price: low to high</option>
                    <option value="high">Price: high to low</option>
                </select>
                <div class="product-showing-count">
                    Showing <span>1–{{ $product->count() }}</span> of <span>{{ $product->total() }}</span> results
                </div>
                <nav class="pagination-area ms-md-auto mt-3 mt-md-0">
                    @if ($product->hasPages())
                    {{ $product->onEachSide(3)->links('user.data.custom_pagination') }}
                    @endif
                </nav>
            </div>
            <!--== End Product Top Bar Area Wrapper ==-->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="column-three" role="tabpanel"
                    aria-labelledby="column-three-tab">
                    <div class="row mb-n6">
                        @foreach ($product as $item)
                        <div class="col-sm-6 col-lg-6 col-xl-4 mb-6">
                           <!--== Start Product Item ==-->
                           <div class="product-item">
                               <a class="product-item-thumb" href="{{ url('item', $item->id) }}">
                                   <img src="{{ url($item->product_image[0]->img ?? '#') }}" width="270" height="264" alt="Image-HasTech">
                               </a>
                               {{-- <span class="badges">-10%</span> --}}
                               @php
                                   if(Auth::check()){
                                      $wishlistCheck  = App\Models\Wishlist::where('product_id', $item->id)->where('user_id', Auth::id())->first();
                                   }else{
                                       $wishlistCheck = App\Models\Wishlist::where('product_id', $item->id)->where('uuid', Session::get('uuid'))->first();
                                   }
                               @endphp
                               <div class="product-item-action">
                                   <button type="button" class="product-action-btn action-btn-wishlist {{ $wishlistCheck  ? 'active-wishlist' : '' }}" data-id="{{ $item->id }}">
                                       <i class="icon-heart"></i>
                                   </button>
                                   <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                       <i class="icon-shuffle"></i>
                                   </button>
                                   <button type="button" class="product-action-btn action-btn-quick-view"  data-id="{{ $item->id }}">
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

                        {{-- <div class="col-sm-6 col-lg-4 mb-6">
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
                        </div> --}}

                        <div class="col-12">
                            <nav class="pagination-area mt-6 mb-6">
                                @if ($product->hasPages())
                                    {{ $product->onEachSide(3)->links('user.data.custom_pagination') }}
                                @endif
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade product-list-items" id="nav-list" role="tabpanel"
                    aria-labelledby="nav-list-tab">
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
                                            <div class="info-bottom pr-0">
                                                <div class="product-list-price">${{ number_format($item->discount_price, 2) }}</div>

                                                <div class="d-flex justify-content-end">
                                                <div class="pro-qty {{  cart_count_per_product($item->id) > 0 ? '' : 'd-none' }}" data-id="{{ $item->id }}">
                                                    <div class="dec qty-btn dec-cart">-</div>
                                                    <input type="text" title="Quantity" class="count-product" data-id="{{ $item->id }}" data-amount="{{ $item->discount_price }}" value="{{ cart_count_per_product($item->id) }}">
                                                    <div class="inc qty-btn inc-cart">+</div>
                                                </div>
                                                <button class="info-btn-cart add-cart {{  cart_count_per_product($item->id) > 0 ? 'd-none' : '' }} " type="button" data-id="{{ $item->id }}"><i class="icon-handbag"></i></button>
                                             
                                                </div>
                                               

                                          {{-- <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button> --}}
                                                
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
                        {{-- <div class="col mb-8">
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
                        </div> --}}
                        <div class="col-12 col-lg-12 col-md-12">
                            {{-- <nav class="pagination-area mt-6 mb-6">
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
                            </nav> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--== End Product Area Wrapper ==-->
</main>
@endsection

@section('script')
<script>
    $(function(){
        $(document).on('change','.search-sorting',function(){
            if($(this).val() == 'default'){
                var url =  window.location.origin + '/service';
            }else{
                var url =  window.location.origin + '/service' +'?sort=' + $(this).val();
            }
            // console.log(url);
            window.location = url;
        });
    });
</script>
@endsection