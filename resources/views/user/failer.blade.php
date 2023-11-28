@php
     Session::forget('paymentFail');
@endphp
@section('title', 'Order Fail | full Surveilance')
@section('meta_desc', 'Order Fail | full Surveilance')
@extends('user.master.layout')
@section('content')
<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-5">
        <div class="border border-3 border-danger"></div>
        <div class="card  bg-white shadow p-5">
            <div class="mb-4 text-center">
                <svg height="32" style="overflow:visible;enable-background:new 0 0 32 32" viewBox="0 0 32 32" width="32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Error_1_"><g id="Error"><circle cx="16" cy="16" id="BG" r="16" style="fill:#D72828;"/><path d="M14.5,25h3v-3h-3V25z M14.5,6v13h3V6H14.5z" id="Exclamatory_x5F_Sign" style="fill:#E6E6E6;"/></g></g></g></svg>
            </div>
            <div class="text-center">
                <h1>Oops!</h1>
                <p>Sorry your order has been fail</p>
                <a href="{{ url('/') }}" class="btn-register-now">Back Home</a>
            </div>
        </div>
    </div>
</div>
@endsection