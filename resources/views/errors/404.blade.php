@section('title', '404')
@section('meta_desc', '404')
@extends('user.master.layout')
@section('content')
<main class="main-content">
    <!--== Start Page Not Found Area Wrapper ==-->
    <div class="page-not-found-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="error-content text-center">
                        <h1>We Are Sorry, Page Not Found</h1>
                        <p>Unfortunately the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exist. Check the Url you entered for any mistakes and try again. <a class="d-block" href="{{ url('/') }}">Back to Homepage</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Not Found Area Wrapper ==-->
</main>
@endsection