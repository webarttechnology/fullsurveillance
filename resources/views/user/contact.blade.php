@section('title', 'Contact | full Surveilance')
@section('meta_desc', 'Contact | full Surveilance')
@extends('user.master.layout')
@section('content')
<style>
    .spinner-border {
         top: 8px;
         right: 15px;
    }
</style>
<main class="main-content">
            <!--== Start Page Header Area Wrapper ==-->
            {{-- <div class="page-header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-header-content">
                                <h2 class="page-header-title">Contact Us</h2>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home //</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

            <!--== Start Contact Area Wrapper ==-->
            <div class="contact-area section-top-space">
                <div class="container">
                    <div class="contact-wrp" data-bg-img="{{ url('user/assets/images/photos/bg4.png')}}">
                        <div class="row">
                            <div class="col-lg-5 col-xl-4">
                                <div class="contact-info-area">
                                    <h3 class="contact-info-area-title text-black">Contact Info</h3>

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="{{ url('user/assets/images/icons/pin2.png') }}" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mb-2 mt-n1">Head Office</h4>
                                            <p>Your address here <span>54/X, New Down City</span></p>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="{{ url('user/assets/images/icons/call.png') }}" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mb-2 mt-n1">Phone</h4>
                                            <a href="tel://+00123456789 ">+00 123 456 789</a>
                                            <a href="tel://+00123456989">+00 123 456 989</a>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->

                                    <!--== Start Contact Info Item ==-->
                                    <div class="contact-info-item">
                                        <div class="contact-info-icon">
                                            <img src="{{ url('user/assets/images/icons/email.png') }}" alt="Icon">
                                        </div>
                                        <div class="contact-info-content">
                                            <h4 class="contact-info-title mt-n1">Email</h4>
                                            <a href="mailto://demo@example.com">youremail@demo.com</a>
                                            <a href="mailto://example@demo.info">www.yoursite.web</a>
                                        </div>
                                    </div>
                                    <!--== End Contact Info Item ==-->
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
                                <div class="contact-form-area">
                                    <h3 class="contact-form-title text-black">Get In Touch</h3>
                                    <!--== Start Contact Form ==-->
                                    <form class="contact-form" id="contact-form" action="{{ url('contact-send') }}" method="post">
                                         @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-input-item">
                                                    <input class="form-control" type="text" name="name" id="name" placeholder="Your Name">
                                                    <i class="icon fa fa-user"></i>
                                                    <span class="contact-name-error text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input-item">
                                                    <input class="form-control" type="email" name="email" id="mail" placeholder="Enter Your Mail">
                                                    <i class="icon fa fa-envelope"></i>
                                                    <span class="contact-email-error text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input-item">
                                            <input class="form-control" type="text" name="subject" id="subject" placeholder="Your Subject">
                                            <i class="icon fa fa-phone-square"></i>
                                            <span class="contact-subject-error text-danger"></span>
                                        </div>
                                        <div class="form-input-item">
                                            <textarea class="form-control" name="message" id="message" placeholder="Your Message"></textarea>
                                            <span class="contact-message-error text-danger"></span>
                                        </div>
                                        <button class="btn btn-theme btn-submit mt-2 position-relative" type="submit">Submit Now 
                                            <i class="icon fa fa-arrow-right"></i>
                                                <div class="icon spinner-border position-absolute d-none" role="status">
                                                    <span class="sr-only mt-2">Loading...</span>
                                                </div>
                                        </button>
                                    </form>
                                    <!--== End Contact Form ==-->

                                    <!--== Message Notification ==-->
                                    {{-- <div class="form-message"></div> --}}
                                    <div class="contact-success-msg alert alert-success mt-4 d-none"></div>
                                    <div class="contact-error-msg alert alert-danger mt-4 d-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Contact Area Wrapper ==-->

            <!--== Start Map Area Wrapper ==-->
            <div class="map-area mb-n2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d802879.9165497769!2d144.83475730949783!3d-38.180874157285366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sbd!4v1636803638401!5m2!1sen!2sbd"></iframe>
            </div>
            <!--== End Map Area Wrapper ==-->
</main>
@endsection
@section('script')

<script>

   

  

     $('.contact-form').on('submit', function(e){
            e.preventDefault();

            ClearRegistrationError();

            var form = $(this)[0];

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                beforeSend: function() { 
                    $('.spinner-border').removeClass('d-none');
                    $(".btn-submit").prop('disabled', true); // disable button
                },
                success:function(data){
                    $(".btn-submit").prop('disabled', false); 
                    $('.spinner-border').addClass('d-none');
                    if(data.status == 'success'){
                        $('.contact-success-msg').removeClass('d-none');
                        $('.contact-success-msg').text(data.msg).delay(5000).fadeOut('slow');
                        form.reset();
                    }else if(data.status == 'error'){
                        $('.contact-error-msg').removeClass('d-none');
                        $('.contact-error-msg').text(data.msg).delay(5000).fadeOut('slow');
                    }
                },
                error:function(data){
                    $('.spinner-border').addClass('d-none');
                    $(".btn-submit").prop('disabled', false); 
                    $('.form-input-item .icon').css({'top': '30%'});
                    if(data.responseJSON.errors.name){
                        $('.contact-name-error').text(data.responseJSON.errors.name[0]);
                     }
                     if(data.responseJSON.errors.email){
                        $('.contact-email-error').text(data.responseJSON.errors.email[0]);
                     }
                     if(data.responseJSON.errors.subject){
                        $('.contact-subject-error').text(data.responseJSON.errors.subject[0]);
                     } 
                     if(data.responseJSON.errors.message){
                        $('.contact-message-error').text(data.responseJSON.errors.message[0]);
                     }
                    }
            });
    });

        function ClearRegistrationError(){
            $('.form-input-item .icon').css({'top': '50%'});
            $('.contact-success-msg').addClass('d-none');
            $('.contact-error-msg').addClass('d-none');
            $('.contact-name-error').text('');
            $('.contact-email-error').text('');
            $('.contact-subject-error').text('');
            $('.contact-message-error').text('');
        }

</script>
 
@endsection