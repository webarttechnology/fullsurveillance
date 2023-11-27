
$(function(){


    function showLoading() {
        document.querySelector('#loading').classList.add('loading');
        document.querySelector('#loading-content').classList.add('loading-content');
      }
      
      function hideLoading() {
        document.querySelector('#loading').classList.remove('loading');
        document.querySelector('#loading-content').classList.remove('loading-content');
      }

    function message(){
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "progressBar": true,
            // "positionClass": "toast-top-center",
          };
      }

    function printErrorMsg(msg) {
        $.each( msg, function( key, value ) {
            toastr.error(value);
        });
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

        $('.save').submit(function(e){
        e.preventDefault();
          message();

          showLoading();

          var url = $(this).attr('action');
          var method = $(this).attr('method');  
          var data = new FormData($(this)[0]);
          $.ajax({
            url: url,
            type: method,
            data: data,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (data) {  
                hideLoading();     
              if(data.status == 'success'){

                if(data.type == 'store'){
                    $(".save")[0].reset();
                }

                if(data.type == 'update'){
                  setTimeout(function(){ // wait for 1 secs(1000)
                      location.reload(); // then reload the page
                 }, 1000);
              }

                toastr.success(data.message);
                
            }else if(data.status == 'error'){
                toastr.error(data.message);
            }else if(data.status == 'errors'){
                printErrorMsg(data.message)
            }
            }
          });
    });


    $('.delete').on('click',(function(e) {
      e.preventDefault();
      message();
      var type = $(this).data('method');
      var action = $(this).data('action');

      if($(this).data('type') == 'suspended'){
        var msg  = 'Are you sure you want to suspended this user?';
      }else{
        var msg  = 'Are you sure you want to delete this?';
      }
      
      if (confirm(msg)) { 
          $.ajax({
              type: type,
              url: action,
              success:function(data){
                  if(data.status == 'success'){
                      toastr.success(data.message);
                      setTimeout(function(){ // wait for 1 secs(1000)
                          location.reload(); // then reload the page
                     }, 1000);
                  }else if(data.status == 'error'){
                      toastr.error(data.message);
                  } 
              },
          });
       }
  }));


  /////// Restore User

  $('.restore').on('click',(function(e) {
    e.preventDefault();
    message();
    var type = $(this).data('method');
    var action = $(this).data('action');
    if (confirm('Are you sure you want to Put Back this user?')) { 
        $.ajax({
            type: type,
            url: action,
            success:function(data){
                if(data.status == 'success'){
                    toastr.success(data.message);
                    setTimeout(function(){ // wait for 1 secs(1000)
                        location.reload(); // then reload the page
                   }, 1000);
                }else if(data.status == 'error'){
                    toastr.error(data.message);
                } 
            },
        });
     }
}));

////// Fetch Subcategory as per category

$('.category').on('change',(function(e) {
    e.preventDefault();
    if($(this).val()){
        $.ajax({
            type: 'POST',
            url: '/admin/get-subcategory',
            data: {id: $(this).val()},
            success:function(data){
                if(data == 0){
                    $('.addSubcategory').html(''); 
                }else{
                    $('.addSubcategory').html(data);
                }
            },
        });
    }else{
        $('.addSubcategory').html(''); 
    }
}));



//////  Coupon type 

$('.coupon-type').on('change',(function(e) {
    e.preventDefault();
    if($(this).val() == 'Percentage'){
        $('.maximum_amount').show();
    }else{
        $('.maximum_amount').hide();
    }
}));




});