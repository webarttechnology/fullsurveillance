
    <!--== Start Product Item ==-->
@foreach ($itemList as $item)
      <div class="product-item product-item-border">
        <a class="product-item-thumb" href="{{ url('item', $item->id) }}">
            <img src="{{ url($item->product_image[0]->img ?? '#') }}" width="290" height="248" alt="Image-HasTech">
        </a>
        {{-- <span class="badges rounded-0">-10%</span> --}}
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
            <h5 class="product-item-title"><a href="{{ url('item', $item->id) }}">{{ $item->name }}</a></h5>
            <div class="info-bottom">
                <div class="product-item-price">${{ number_format($item->discount_price, 2) }}</div>
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
@endforeach
 
    <!--== End Product Item ==-->
