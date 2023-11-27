@section('title', 'Cart | full Surveilance')
@section('meta_desc', 'Cart | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    {{-- <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-header-content">
                        <h2 class="page-header-title">Cart</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home //</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
                                    <a class="btn btn-link" href="{{ url('chekout') }}">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           



            {{-- <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="cart-calculate-discount-wrap mb-40">
                        <h4>Calculate shipping </h4>
                        <div class="calculate-discount-content">
                            <div class="select-style">
                                <select class="select-active">
                                    <option>Bangladesh</option>
                                    <option>Bahrain</option>
                                    <option>Azerbaijan</option>
                                    <option>Barbados</option>
                                    <option>Barbados</option>
                                </select>
                            </div>
                            <div class="select-style">
                                <select class="select-active">
                                    <option>State / County</option>
                                    <option>Bahrain</option>
                                    <option>Azerbaijan</option>
                                    <option>Barbados</option>
                                    <option>Barbados</option>
                                </select>
                            </div>
                            <div class="input-style">
                                <input type="text" placeholder="Town / City">
                            </div>
                            <div class="input-style mb-6">
                                <input type="text" placeholder="Postcode / ZIP">
                            </div>
                            <div class="calculate-discount-btn">
                                <a class="btn btn-link" href="#/">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="cart-calculate-discount-wrap mb-40 mt-10 mt-md-0">
                        <h4>Coupon Discount </h4>
                        <div class="calculate-discount-content">
                            <p>Enter your coupon code if you have one.</p>
                            <div class="input-style mb-6">
                                <input type="text" placeholder="Coupon code">
                            </div>
                            <div class="calculate-discount-btn">
                                <a class="btn btn-link" href="#/">Apply Coupon</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="grand-total-wrap mt-10 mt-lg-0">
                        <div class="grand-total-content">
                            <h5>Subtotal <span>$180.00</span></h5>
                            <div class="grand-shipping">
                                <span>Shipping</span>
                                <ul>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Free shipping</label></li>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Flat rate: <span>$100.00</span></label></li>
                                    <li><input type="radio" name="shipping" value="info" checked="checked"><label>Local pickup: <span>$120.00</span></label></li>
                                </ul>
                            </div>
                            <div class="shipping-country">
                                <p>Shipping to Bangladesh</p>
                            </div>
                            <div class="grand-total">
                                <h4>Total <span>$185.00</span></h4>
                            </div>
                        </div>
                        <div class="grand-total-btn">
                            <a class="btn btn-link" href="shop-checkout.html">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</main>
@endsection