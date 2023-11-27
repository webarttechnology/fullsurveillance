@section('title', 'Login Registration | full Surveilance')
@section('meta_desc', 'Login Registration | full Surveilance')
@extends('user.master.layout')
@section('content')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    {{-- <div class="page-header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-header-content">
                        <h2 class="page-header-title">Login / Register</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home //</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login-Register</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="page-header-thumb">
                        <img src="{{ url('user/assets/images/photos/page-title.png') }}" alt="Image-HasTech" width="546" height="281">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--== End Page Header Area Wrapper ==-->
    <!--== Start Login Wrapper ==-->
    <div class="login-register-area section-space">
        <div class="container">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>   
            @endif
            @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>   
            @endif
            <div class="row">
                <div class="col-md-5 login-register-border">
                    <div class="login-register-content">
                        <div class="login-register-title mb-30">
                            <h3>Login</h3>
                            <p>Welcome back! Please enter your username and password to login. </p>
                        </div>
                        <div class="login-register-style login-register-pr">
                            <form action="{{ url('/login-action') }}" method="post" class="login-signup">
                                @csrf
                                 <input type="hidden" name="type" value="login">
                                <div class="login-register-input">
                                    <input type="email" name="email" placeholder="Email address">
                                    <span class="login-email-error text-danger"></span>
                                </div>
                                <div class="login-register-input">
                                    <input type="password" name="password" placeholder="Password">
                                    <div class="forgot">
                                        <a href="#">Forgot?</a>
                                    </div>
                                    <span class="login-password-error text-danger"></span>
                                </div>
                                {{-- <div class="remember-me-btn">
                                    <input id="remember-me-checkbox" type="checkbox">
                                    <label for="remember-me-checkbox">Remember me</label>
                                </div> --}}
                                <div class="btn-register">
                                    <button type="submit" class="btn-register-now">Login</button>
                                </div>
                            </form>
                            <div class="alert alert-success login-success-msg mt-2 d-none" role="alert"></div>   
                            <div class="alert alert-danger login-error-msg mt-2 d-none" role="alert"></div>   
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="login-register-content login-register-pl">
                        <div class="login-register-title mb-30">
                            <h3>Register</h3>
                            <p>Create new account today to reap the benefits of a personalized shopping experience. </p>
                        </div>
                        <div class="login-register-style">
                            <form action="{{ url('/register-action') }}" method="post" class="login-signup">
                                 @csrf
                                 <input type="hidden" name="type" value="register">
                                <div class="login-register-input">
                                    <input type="text" name="name"  placeholder="Enter name">
                                    <span class="register-name-error text-danger"></span>
                                </div>
                                <div class="login-register-input">
                                    <input type="number" name="mobile"  placeholder="Enter mobile">
                                    <span class="register-mobile-error text-danger"></span>
                                </div>
                                <div class="login-register-input">
                                <input type="email" name="email" placeholder="E-mail address">
                                <span class="register-email-error text-danger"></span>
                                </div>
                                <div class="login-register-input">
                                <input type="password" name="password" placeholder="Password">
                                <span class="register-password-error text-danger"></span>
                                </div>
                                <div class="login-register-input">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                {{-- <div class="login-register-paragraph">
                                    <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="login-register.html">privacy policy.</a></p>
                                </div> --}}
                                <div class="btn-register">
                                     <button type="submit" class="btn-register-now">Register</button>
                                </div>
                            </form>

                            <div class="alert alert-success register-success-msg mt-2 d-none" role="alert"></div>   
                            <div class="alert alert-danger register-error-msg mt-2 d-none" role="alert"></div>   
           
                            {{-- <div class="register-benefits">
                                <h4>Sign up today and you will be able to :</h4>
                                <p>The Loke Buyer Protection has you covered from click to delivery. Sign up <br>or sign in and you will be able to:</p>
                                <ul>
                                    <li><i class="fa fa-check-circle-o"></i> Speed your way through checkout</li>
                                    <li><i class="fa fa-check-circle-o"></i> Track your orders easily</li>
                                    <li><i class="fa fa-check-circle-o"></i> Keep a record of all your purchases</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Login Wrapper ==-->
</main>
@endsection

@section('script')

<script>
     $(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.login-signup').on('submit', function(e){
            e.preventDefault();

            ClearRegistrationError();

            var form = $(this)[0];

            var typeForm = $(this).serializeArray()[1].value;

            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success:function(data){

                    if(data.status == 'success'){

                        if(typeForm == 'register'){
                            $('.register-success-msg').removeClass('d-none');
                            $('.register-success-msg').text(data.msg);
                        }

                        form.reset();
                        
                        if(data.type == 'login'){
                            $('.login-success-msg').removeClass('d-none');
                            $('.login-success-msg').text(data.msg);
                            window.setTimeout(function() {
                                window.location.href = data.url;
                            }, 1000);
                        }

                    }else if(data.status == 'error'){
                        
                        if(data.type == 'login'){
                            $('.login-error-msg').removeClass('d-none');
                            $('.login-error-msg').text(data.msg);
                        }else{
                            $('.register-error-msg').removeClass('d-none');
                            $('.register-error-msg').text(data.msg);
                        }
                        
                    }
                },
                error:function(data){

                    // console.log(data.responseJSON.errors);

                    if(typeForm == 'register'){
                    if(data.responseJSON.errors.name){
                        $('.register-name-error').text(data.responseJSON.errors.name[0]);
                     }

                     if(data.responseJSON.errors.mobile){
                        $('.register-mobile-error').text(data.responseJSON.errors.mobile[0]);
                     }

                     if(data.responseJSON.errors.email){
                        $('.register-email-error').text(data.responseJSON.errors.email[0]);
                     }

                     if(data.responseJSON.errors.password){
                        $('.register-password-error').text(data.responseJSON.errors.password[0]);
                     }
                    }

                    if(typeForm == 'login'){

                     if(data.responseJSON.errors.email){
                        $('.login-email-error').text(data.responseJSON.errors.email[0]);
                     }
                     if(data.responseJSON.errors.password){
                        $('.login-password-error').text(data.responseJSON.errors.password[0]);
                     }

                    }

                },
            });


        });

        function ClearRegistrationError(){
            $('.register-success-msg').addClass('d-none');
            $('.register-error-msg').addClass('d-none');
            $('.register-password-error').text('');
            $('.register-email-error').text('');
            $('.register-mobile-error').text('');
            $('.register-name-error').text('');
            $('.login-email-error').text('');
            $('.login-password-error').text('');
            $('.login-success-msg').addClass('d-none');
            $('.login-error-msg').addClass('d-none');
        }
           
     });
</script>

@endsection