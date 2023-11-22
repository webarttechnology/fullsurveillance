<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="full Surveilance">
		<title>Admin Login | full Surveilance</title>
		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.3.67/css/materialdesignicons.min.css" integrity="sha512-nRzny9w0V2Y1/APe+iEhKAwGAc+K8QYCw4vJek3zXhdn92HtKt226zHs9id8eUq+uYJKaH2gPyuLcaG/dE5c7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<!-- Ekka CSS -->
		<link id="ekka-css" rel="stylesheet" href="{{ asset('admin_panel/assets/css/ekka.css') }}" />
		
		<!-- FAVICON -->
		<link href="{{ asset('assets/images/logo.png')}}" rel="shortcut icon" />

		<!-- Bootstrap css -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		{{-- Toast --}}
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		<link rel="stylesheet" href="{{ asset('admin_panel/assets/css/custom.css') }}">
	</head>
	<body class="sign-inup" id="body">

        <div class="container d-flex align-items-center mt-5 justify-content-center form-height-login pt-24px pb-24px loginsect">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="ec-brand">
                                <a href="#" title="Ekka">
                                    <img class="ec-brand-icon" src="{{ asset('assets/images/logo.png')}}" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-5">
                            @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                            @endif
                            <h4 class="text-dark mb-5">Sign In</h4>
                            <form action="{{ url('admin/login-action') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                                        @error('email')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                        @enderror 
                                    </div>
                                    
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter Password">
                                        @error('password')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="d-flex my-2 justify-content-between">
                                            {{-- <div class="d-inline-block mr-3">
                                                <div class="control control-checkbox">Remember me
                                                    <input type="checkbox" />
                                                    <div class="control-indicator"></div>
                                                </div>
                                            </div> --}}
                                            
                                            {{-- <p><a class="text-blue" href="#">Forgot Password?</a></p> --}}
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>
                                        
                                        {{-- <p class="sign-upp">Don't have an account yet ?
                                            <a class="text-blue" href="#">Sign Up</a>
                                        </p> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Javascript -->
		<script src="{{ asset('admin_panel/assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
		<script src="{{ asset('admin_panel/assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('admin_panel/assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
		<script src="{{ asset('admin_panel/assets/plugins/slick/slick.min.js')}}"></script>
	
		<!-- Ekka Custom -->	
		<script src="{{ asset('admin_panel/assets/js/ekka.js')}}"></script>

		{{-- Toast --}}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	</body>
</html>