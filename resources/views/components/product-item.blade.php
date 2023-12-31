<style>
    .product-list-item .info-bottom {
        padding-right: 0px !important;
    }
    .pro-qty input {
      height: 35px !important;
    }
    </style>
    <!--== Start Product Item ==-->
@foreach ($itemList as $item)
      <div class="product-item product-item-border">
        <a class="product-item-thumb" href="{{ url('item', $item->id) }}">
            <img src="{{ url($item->product_image[0]->img ?? '#') }}" width="290" height="248" alt="Image-HasTech">
        </a>
        {{-- <span class="badges rounded-0">-10%</span> --}}
        <div class="product-item-action">
            @php
            if(Auth::check()){
               $wishlistCheck  = App\Models\Wishlist::where('product_id', $item->id)->where('user_id', Auth::id())->first();
            }else{
                $wishlistCheck = App\Models\Wishlist::where('product_id', $item->id)->where('uuid', Session::get('uuid'))->first();
            }
        @endphp
            <button type="button" class="product-action-btn action-btn-wishlist {{ $wishlistCheck  ? 'active-wishlist' : '' }}" data-id="{{ $item->id }}">
                <i class="icon-heart"></i>
            </button>
            {{-- <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                <i class="icon-shuffle"></i>
            </button> --}}
            <button type="button" class="product-action-btn action-btn-quick-view" data-id="{{ $item->id }}">
                <i class="icon-magnifier"></i>
            </button>
        </div>
        <div class="product-item-info">
            <h5 class="product-item-title"><a href="{{ url('item', $item->id) }}">{{ $item->name }}</a></h5>
            <div class="info-bottom">
                <div class="product-item-price">${{ number_format($item->discount_price, 2) }}</div>
                {{-- <button type="button" class="info-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"><i class="icon-handbag"></i></button> --}}

                <div class="d-flex justify-content-end">
                    <div class="pro-qty {{  cart_count_per_product($item->id) > 0 ? '' : 'd-none' }}" data-id="{{ $item->id }}">
                        <div class="dec qty-btn dec-cart">-</div>
                        <input type="text" title="Quantity" class="count-product" data-id="{{ $item->id }}" data-amount="{{ $item->discount_price }}" value="{{ cart_count_per_product($item->id) }}">
                        <div class="inc qty-btn inc-cart">+</div>
                    </div>
                    <button class="info-btn-cart add-cart {{  cart_count_per_product($item->id) > 0 ? 'd-none' : '' }} " type="button" data-id="{{ $item->id }}"><i class="icon-handbag"></i></button>
                    </div>

                {{-- <div class="product-item-review-icon">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div> --}}
            </div>
        </div>
    </div>
@endforeach
 
    <!--== End Product Item ==-->
