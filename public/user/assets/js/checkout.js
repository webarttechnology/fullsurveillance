$(function(){

  function message(){
    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "progressBar": true,
        // "positionClass": "toast-top-center",
      };
  }


$(document).on('click','.apply-coupon',function(e){
    e.preventDefault();
    message();

    var applyBtn = $(this);

    var coupon = $('.coupon-code').val();
    $.ajax({
        type: 'POST',
        url: '/apply-coupon',
        data: {coupon: coupon },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
          if(data.status == 'success'){

            applyBtn.hide();
            
            $('.remove-coupon').show();

            $('.coupon-section').show();
            $('.coupon-discount').text('-$'+data.data.coupon_discount_amount);
            $('.your-order-total span').text('$'+data.data.payable_amount);

            toastr.success(data.message);

          }else if(data.status == 'error'){
            applyBtn.show();
            toastr.error(data.message);
          }
        },
    });
});


$(document).on('click','.remove-coupon',function(e){
  e.preventDefault();
  message();

  var removeBtn = $(this);

   $('.coupon-code').val('');

  $.ajax({
      type: 'POST',
      url: '/cart-total-amount',
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        removeBtn.hide();
        $('.apply-coupon').show();
        $('.remove-coupon').hide();
        $('.coupon-section').hide();
        $('.coupon-discount').text('$0');
        $('.your-order-total span').text('$'+data);
        toastr.success('Coupon remove successfully');
      },
  });
});


});