@section('title', 'Cart | full Surveilance')
@section('meta_desc', 'Cart | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">
    <!--== Start Product Cart Area Wrapper ==-->
    <div class="product-area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="text-center empty-cart {{ cart_count() == 0 ? '' : 'd-none' }}">
                        <span class="text-danger text-center">Your cart is Empty</span>
                    </div>

                    <div class="cart-table-wrap {{ cart_count() == 0 ? 'd-none' : '' }}">
                        <div class="table-responsive">
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th class="width-thumbnail"></th>
                                        <th class="width-name">Product</th>
                                        <th class="width-price"> Price</th>
                                        <th class="width-quantity">Quantity</th>
                                        <th class="width-subtotal">Subtotal</th>
                                        <th class="width-remove"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach (get_cart_details() as $item)
                                      <tr>
                                        <input type="hidden" name="item_count_cart[]" value="{{ $item->product_id }}" class="total-cart-item">
                                        <td class="product-thumbnail">
                                            <a href="{{ url('item', $item->product_id) }}"><img class="w-100" src="{{ url($item->product->product_image[0]->img)}}" alt="Image" width="96" height="96"></a>
                                        </td>
                                        <td class="product-name">
                                            <h5><a href="{{ url('item', $item->product_id) }}">{{ $item->product->name }}</a></h5>
                                        </td>
                                        <td class="product-price"><span class="amount">${{  number_format($item->product->discount_price, 2) }}</span></td>
                                        <td class="cart-quality">
                                            <div class="product-details-quality">
                                                <div class="pro-qty" data-id="{{ $item->product_id }}" data-amount="{{ $item->product->discount_price }}">
                                                    <div class="dec qty-btn dec-cart">-</div>
                                                    <input type="text" title="Quantity" class="count-product" data-id="{{ $item->product_id }}" data-amount="{{ $item->product->discount_price }}" value="{{ cart_count_per_product($item->product_id) }}">
                                                    <div class="inc qty-btn inc-cart">+</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product-total"><span>${{  number_format($item->product->discount_price * $item->quantity, 2) }}</span></td>
                                        <td class="product-remove" data-id="{{ $item->product_id }}" data-qty="0"><a href="#/"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="cart-shiping-update-wrapper">
                            <div class="cart-shiping-btn continure-btn">
                                <a class="btn btn-link" href="{{ url('shop') }}"><i class="fa fa-angle-left"></i> Back To Shop</a>
                            </div>
                            <div class="grand-total-wrap">

                                <div class="sub-grand-total-render">
                                    @include('user.data.subtotal-data') 
                                </div>

                                <div class="grand-total-btn">
                                    <a class="btn btn-link" href="{{ url('checkout') }}">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection