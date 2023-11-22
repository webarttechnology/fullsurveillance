/**
 * Remove product from cart
*/
function removeProduct(id, elm){
    Swal.fire({
    icon: "warning",
    title: "Are you Sure, You Want To Delete This?",
    showDenyButton: true,
    showCancelButton: false,
    denyButtonText: `No`,
    confirmButtonText: "Yes",
}).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
    $.ajax({
        type: "GET",
        url: 'cart/delete/'+id,
        success: function(response) {
            // Handle the response from the server
            if(response['status'] == "success"){
                toastr.success("Successfully Removed From Cart");
                $(elm).parent().parent().parent().remove();
                let total_amount = $('#total_amount_display').html().replace('$', '');
                let final_amount = (total_amount - response['remove_price']);
                $('#total_amount_display').html('$'+final_amount);
            }

          }
        });
        
    }
    else if (result.isDenied) {
        Swal.fire("Your Data is Safe Now", "", "info");
    }
});
}


/**
 * Remove all products from cart
*/

function clearCart(){
    Swal.fire({
    icon: "warning",
    title: "Are you Sure, You Want To Clearr All?",
    showDenyButton: true,
    showCancelButton: false,
    denyButtonText: `No`,
    confirmButtonText: "Yes",
}).then((result) => {
/* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
    $.ajax({
        type: "GET",
        url: 'cart/clear/',
        success: function(response) {
            // Handle the response from the server
            if(response == "success"){
                toastr.success("Successfully Removed From Cart");
            }
            if(response == "error"){
                toastr.error("Cart is Empty");
            }

        }
        });
        
    }
    else if (result.isDenied) {
        Swal.fire("Your Data is Safe Now", "", "info");
    }
});
}

/**
 * Increment & Decrement Cart Quantity
*/

function incrementCartQuantity(id){    
    if(id == 0){
        let quantity = parseInt($('#quantity').val());
        $('#quantity').val(quantity + 1);
    }else{
        let quantity = parseInt($('#quantity_'+id).val());
        $('#quantity_'+id).val(quantity + 1);
    }
}

function decrementCartQuantity(id){
  if(id == 0){
      let quantity = parseInt($('#quantity').val());
      if(quantity > 1){
          $('#quantity').val(quantity - 1);
      }else{
          $('#quantity').val(quantity);
      }
  }else{
    let quantity = parseInt($('#quantity_'+id).val());
      if(quantity > 1){
          $('#quantity_'+id).val(quantity - 1);
      }else{
          $('#quantity_'+id).val(quantity);
      }
  }
}