@if (count(get_cart_details()) > 0)
@php
$subTotal = [];
foreach (get_cart_details() as $value) {
     $subTotal[] = $value->product->discount_price * $value->quantity;
}
@endphp
<div class="grand-total-content pt-0">
    <h5>Subtotal <span>${{ number_format( array_sum($subTotal) , 2) }}</span></h5>
    <div class="grand-total">
    <h4>Total <span>${{ number_format( array_sum($subTotal) , 2) }}</span></h4>
    </div>
</div>
@endif
