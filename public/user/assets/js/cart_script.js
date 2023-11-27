$(function(){

  function message(){
    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "progressBar": true,
        // "positionClass": "toast-top-center",
      };
  }


  var pathnameSegments = window.location.pathname.split('/');
  var firstPathname = pathnameSegments[1]; 

  $(document).on('click','.add-cart',function(){
      message();

      var btnThis = $(this);

      $(btnThis).prev().find('input').val(1);
      $(btnThis).hide();
      $(btnThis).prev().removeClass('d-none');

      if(firstPathname == 'wishlist' ){
        $(btnThis).parent().parent().remove();
        var item_count_wishlist = new Array();
        $('input[name^="item_count_wishlist"]').each(function() {item_count_wishlist.push($(this).val());});
        if( item_count_wishlist.length == 0){
          $('.wishlist-table-wrap').addClass('d-none');
          $('.empty-wishlist').removeClass('d-none');
          ToMoveScroll();
        }
      }

    $.ajax({
        type: 'POST',
        url: '/add-cart',
        data: {id: $(this).data('id')},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
          refreshCart();
          if(data.status == 'success'){
            totalCartCount();
            toastr.success(data.msg);
          }else if(data.status == 'error'){
            toastr.error(data.msg);
          }
        },
    });
  });



  $(document).on('click','.qty-btn',function(e){
    e.preventDefault();
    var $button = $(this);
    var oldValue = $button.parent().find('input').val();
    if ($button.hasClass('inc')) {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
         newVal = 0;
      }
    }
    $button.parent().find('input').val(newVal);

    // alert($button.parent().data('id'));

    UpdateRemoveCart($button.parent().data('id'), newVal);

    ////// Hide or Show Add Cart or Qty bnt
     
    if(firstPathname == 'shop' || firstPathname == 'item' ){
      if(newVal == 0){
        /////// Hide quatity 
        $button.parent().addClass('d-none');
        /////  Show Add to Cart btn
        $button.parent().next().removeClass('d-none');
        $button.parent().next().show();
     }
    }

    ////// Remove row when qty is 0 in cart page
      if(firstPathname == 'cart'){

        if(newVal == 0){
            $button.parent().parent().parent().parent().remove();
        }

        ///// Amount Change  specific product

        var perCartAmount = $button.parent().data('amount') * newVal;
        var withdollar   = '$' + perCartAmount.toFixed(2);

        $button.parent().parent().parent().next().find('span').text(withdollar);

        SubTotal();
      }

      RemoveCartShowEmpty();
     

  });


    function UpdateRemoveCart(id, newVal){


      $.ajax({
        type: 'POST',
        url: '/update-remove-cart',
        data: {id: id, qty: newVal},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
          refreshCart();
          if(data.status == 'success'){
            totalCartCount();
            SubTotal();
            if(newVal == 0){
              toastr.success(data.msg);
             }
          }else if(data.status == 'error'){
            toastr.error(data.msg);
          }
        },
    });

    }


    $(document).on('click','.product-remove',function(e){
        e.preventDefault();
        UpdateRemoveCart($(this).data('id'), $(this).data('qty'));
        $(this).parent().remove();
        RemoveCartShowEmpty();
        SubTotal();
    });

    function totalCartCount()
    {

      $.ajax({
        type: 'POST',
        url: '/total-cart-count',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            $('.cart-count-show').text(data);
        },
    });

    }


    function refreshCart()
    {

      $.ajax({
        type: 'POST',
        url: '/refresh-cart',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            $('.cart-content-padding').html(data);
        },
     });

    }

    function RemoveCartShowEmpty()
    {
         ////// Remove row when qty is 0 in cart page
         if(firstPathname == 'cart'){

          var item_count_cart= new Array();
          
          $('input[name^="item_count_cart"]').each(function() {item_count_cart.push($(this).val());});
  
          if( item_count_cart.length == 0){
            $('.cart-table-wrap').addClass('d-none');
            $('.empty-cart').removeClass('d-none');
            ToMoveScroll();
          }
  
        }
    }

    function ToMoveScroll()
    {
      $('html, body').animate({scrollTop : 0}, 800);
      return false;
    }


    $(document).on('keyup','.count-product',function(e){

       if($(this).val()){

        UpdateRemoveCart($(this).data('id'), $(this).val());
        
        SubTotal();

        if(firstPathname == 'cart'){
         var perCartAmount = $(this).data('amount') * $(this).val();
         var withdollar   = '$' + perCartAmount.toFixed(2);
         $(this).parent().parent().parent().next().find('span').text(withdollar);
         if($(this).val() == 0 ){
            $(this).parent().parent().parent().parent().remove();
         }
         RemoveCartShowEmpty();
        }

        if(firstPathname == 'shop' || firstPathname == 'item' ){
          if($(this).val() == 0){
            /////// Hide quatity 
            $(this).parent().addClass('d-none');
            /////  Show Add to Cart btn
            $(this).parent().next().removeClass('d-none');
            $(this).parent().next().show();
         }
        }

       }
    });



    function SubTotal(){
      $.ajax({
        type: 'POST',
        url: '/sub-grand-total-cart',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            $('.sub-grand-total-render').html(data);
        },
     });
    }


    ///////  Wishlist

  $(document).on('click', '.action-btn-wishlist',function(e){
        e.preventDefault();
        message();

        var btnAction = $(this);

        // btnAction.addClass('active-wishlist');

        $.ajax({
          type: 'POST',
          url: '/add-wishlist',
          data: {id: $(this).data('id')},
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success:function(data){
               console.log(data);
              if(data.status == 'success'){

                   totalWishlistCount();

                 if(data.type == 'add'){

                  btnAction.addClass('active-wishlist');

                 }else if(data.type == 'remove'){
                  btnAction.removeClass('active-wishlist');

                  if(firstPathname == 'wishlist'){
                    btnAction.parent().parent().remove();

                    var item_count_wishlist = new Array();
          
                    $('input[name^="item_count_wishlist"]').each(function() {item_count_wishlist.push($(this).val());});
            
                    if( item_count_wishlist.length == 0){
                      $('.wishlist-table-wrap').addClass('d-none');
                      $('.empty-wishlist').removeClass('d-none');
                      ToMoveScroll();
                    }

                  }
                }

                toastr.success(data.msg);

              }else if(data.status == 'error'){
                toastr.error(data.msg);
              }
          },
       });
  });



  function totalWishlistCount()
  {

      $.ajax({
        type: 'POST',
        url: '/total-wishlist-count',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
            $('.wishlist-count-show').text(data);
        },
      });

  }



});