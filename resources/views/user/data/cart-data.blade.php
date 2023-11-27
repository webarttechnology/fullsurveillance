@if (count(get_cart_details()) > 0)
<div>
    <ul>
        
        @foreach (get_cart_details() as $item)
        <li class="single-product-cart">
            <div class="cart-img">
                <a href="{{ url('item', $item->product_id) }}"><img src="{{ url($item->product->product_image[0]->img)}}" alt="Image" width="70" height="67"></a>
            </div>
            <div class="cart-title">
                <h4><a href="{{ url('item', $item->product_id) }}">{{ $item->product->name }}</a></h4>
                <span> {{ $item->quantity }} × <span class="price"> ${{  number_format($item->product->discount_price, 2) }} </span></span>
            </div>
            <div class="cart-delete">
                <a href="#"><i class="pe-7s-trash icons"></i></a>
            </div>
        </li>
        @endforeach
    </ul>
        @php
          $subTotal = [];
          foreach (get_cart_details() as $value) {
               $subTotal[] = $value->product->discount_price * $value->quantity;
          }
        @endphp
    <div class="cart-total">
        <h4>Subtotal: <span>${{ number_format( array_sum($subTotal) , 2) }}</span></h4>
    </div>
    <div class="cart-checkout-btn">
        <a class="cart-btn" href="{{ url('cart') }}">view cart</a>
        <a class="checkout-btn" href="{{ url('chekout') }}">checkout</a>
    </div>
</div>
@else

  <div class="text-center mt-5">
       <span class="text-center text-danger">Your cart is Empty</span>
  </div>
    
@endif



