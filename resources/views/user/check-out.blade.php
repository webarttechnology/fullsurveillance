@section('title', 'Checkout | full Surveilance')
@section('meta_desc', 'Checkout | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">
    <!--== Start Checkout Area Wrapper ==-->
    <div class="section-space shop-checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout-coupon-wrap mb-8 mb-lg-10 pb-lg-2">
                        <p class="cart-page-title">Have a coupon? <a class="checkout-coupon-active" href="#/">Click here to enter your code</a></p>
                        <form class="checkout-coupon-content">
                            <p>If you have a coupon code, please apply it below.</p>
                            <input type="text" placeholder="Coupon code" class="coupon-code">
                            <button class="apply-coupon">Apply coupon</button>
                            <a href="#" class="btn btn-lg btn-danger remove-coupon" style="display: none">Remove Coupon</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>First name <abbr class="required" title="required">*</abbr></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>Last name <abbr class="required" title="required">*</abbr></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>Company name (optional) <abbr class="required" title="required">*</abbr></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>Country / Region <abbr class="required" title="required">*</abbr></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>Street Address <abbr class="required" title="required">*</abbr></label>
                                    <input class="billing-address" placeholder="House number and street name" type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>District <abbr class="required" title="required">*</abbr></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>Postcode / ZIP (optional) <abbr class="required" title="required">*</abbr></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>Phone <abbr class="required" title="required">*</abbr></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="billing-info mb-4">
                                    <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="checkout-account">
                            <input class="checkout-toggle" id="shipping" type="checkbox">
                            <span> <label for="shipping">Ship to a different address?</label> </span>
                        </div>
                        <div class="different-address open-toggle mt-30">
                            <div class="row">
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>First name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Last name <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Company name (optional) <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Country / Region <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Street Address <abbr class="required" title="required">*</abbr></label>
                                        <input class="billing-address" placeholder="House number and street name" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Town / City <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>District <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Postcode / ZIP (optional) <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Phone <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="billing-info mb-4">
                                        <label>Email Address <abbr class="required" title="required">*</abbr></label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="additional-info-wrap">
                            <label>Order notes (optional)</label>
                            <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="your-order-area mt-10 mt-lg-0">
                        <h4>Your order</h4>
                        <div class="your-order-wrap">
                            <div class="your-order-info-wrap">
                                <div class="your-order-title">
                                    <h6>Product <span>Subtotal</span></h6>
                                </div>
                                <div class="your-order-product">
                                    <ul>
                                        @foreach (get_cart_details() as $item)
                                        <li>{{ Illuminate\Support\Str::limit($item->product->name, 30, '...') }} × {{ $item->quantity }} <span>${{  number_format($item->product->discount_price, 2) }}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @php
                                    $subTotal = [];
                                    foreach (get_cart_details() as $value) {
                                        $subTotal[] = $value->product->discount_price * $value->quantity;
                                    }
                                @endphp
                                <div class="your-order-subtotal">
                                    <h3>Subtotal <span>${{ number_format( array_sum($subTotal) , 2) }}</span></h3>
                                </div>
                                <div class="your-order-subtotal coupon-section" style="display: none">
                                    <h3>Coupon discount <span class="coupon-discount">$0</span></h3>
                                </div>
                               
                                <div class="your-order-total">
                                    <h3>Total <span>${{ number_format( array_sum($subTotal) , 2) }}</span></h3>
                                </div>
                            </div>
                            <div class="payment-method">
                                <span class="d-block pb-3"><b>Payment Methods</b></span>
                                <div class="pay-top sin-payment">
                                    <input id="payment-method-3" class="input-radio" type="radio" value="cheque" name="payment_method">
                                    <label for="payment-method-3">Cash on delivery </label>
                                    <div class="payment-box payment_method_bacs">
                                        <p>Pay with cash upon delivery. </p>
                                    </div>
                                </div>
                                <div class="pay-top sin-payment sin-payment-3">
                                    <input id="payment-method-4" class="input-radio" type="radio" value="cheque" name="payment_method">
                                    <label for="payment-method-4">PayPal <img alt="" src="{{ url('user/assets/images/photos/paypal.webp') }}" width="35" height="23"></label>
                                    <div class="payment-box payment_method_bacs">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-order">
                            <a href="#">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Checkout Area Wrapper ==-->
</main>
@endsection