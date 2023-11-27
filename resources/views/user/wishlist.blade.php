@section('title', 'Wishlist | full Surveilance')
@section('meta_desc', 'Wishlist | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">
    <!--== Start Wishlist Area Wrapper ==-->
    <div class="wishlist-page-area section-space">
        <div class="container">
            <div class="text-center empty-wishlist {{ wishlist_count() == 0 ? '' : 'd-none' }}">
                <span class="text-danger text-center">Your wishlist is Empty</span>
            </div>
            @if (count(get_wishlist_details()) > 0)
            <div class="table-responsive wishlist-table-wrap">
                <table class="wishlist-table-content">
                    <thead>
                        <tr>
                            <th class="width-remove"></th>
                            <th class="width-thumbnail"></th>
                            <th class="width-name">Product</th>
                            <th class="width-price">price</th>
                            {{-- <th class="width-stock-status"> Stock status </th> --}}
                            <th class="width-wishlist-cart"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( get_wishlist_details() as $item)
                        <tr>
                            <input type="hidden" name="item_count_wishlist[]" value="{{ $item->product_id }}" class="total-wishlist-item">
                            <td class="product-remove"><a href="#" class="action-btn-wishlist" data-id="{{ $item->product_id }}">×</a></td>
                            <td class="product-thumbnail">
                                <a href="{{ url('item', $item->product_id) }}"><img src="{{ url($item->product->product_image[0]->img)}}" alt="Image" width="96" height="96"></a>
                            </td>
                            <td class="product-name">
                                <h5><a href="{{ url('item', $item->product_id) }}">{{ $item->product->name }}</a></h5>
                            </td>
                            <td class="product-price"><span class="amount">${{  number_format($item->product->discount_price, 2) }}</span></td>
                            {{-- <td class="stock-status">
                                <span><i class="fa fa-check"></i> In Stock</span>
                            </td> --}}
                            <td class="wishlist-cart"><a href="#" class="add-cart" data-id="{{ $item->product_id }}">Add to Cart</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
            @endif
        </div>
    </div>
</main>
@endsection