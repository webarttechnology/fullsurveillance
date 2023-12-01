@section('title', 'My Account | full Surveilance')
@section('meta_desc', 'My Account | full Surveilance')
@extends('user.master.layout')
@section('content')
    <main class="main-content">
        <!--== Start My Account Wrapper ==-->
        <div class="account-area section-space">
            <div class="container">
                <div class="myaccount-page-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <nav class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="myaccount-nav-link active" id="dashboad-tab" data-bs-toggle="tab"
                                    data-bs-target="#dashboad" type="button" role="tab" aria-controls="dashboad"
                                    aria-selected="true">Dashboard</button>
                                <button class="myaccount-nav-link" id="orders-tab" data-bs-toggle="tab"
                                    data-bs-target="#orders" type="button" role="tab" aria-controls="orders"
                                    aria-selected="false"> Orders</button>
                                <button class="myaccount-nav-link" id="address-edit-tab" data-bs-toggle="tab"
                                    data-bs-target="#address-edit" type="button" role="tab"
                                    aria-controls="address-edit" aria-selected="false">Address</button>
                                <button class="myaccount-nav-link" id="account-info-tab" data-bs-toggle="tab"
                                    data-bs-target="#account-info" type="button" role="tab"
                                    aria-controls="account-info" aria-selected="false">Account Details</button>
                                <a class="myaccount-nav-link" href="{{ url('/logout') }}">Logout</a>
                            </nav>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel"
                                    aria-labelledby="dashboad-tab">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                        <div class="welcome">
                                            <p>Hello, <strong>{{Auth::user()->name}}</strong></p>
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>
                                        <table class="myaccount-table table-responsive text-center table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as  $order)
                                                   
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $order->created_at->format('M d, Y h:i A') }}</td>
                                                        <td>{{ $order->status }}</td>
                                                        <td>${{ number_format($order->payable_amount, 2) }}</td>
                                                        <td>
                                                            {{-- <button type="button" class="btn btn-sm btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#orderModal-{{ $order->id }}">
                                                                View
                                                            </button> --}}
                                                            <button type="button"
                                                                class="btn btn-sm btn-primary product-review-btn action-btn-quick-review"
                                                                data-id="{{ $order->id }}">
                                                                View
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="address-edit" role="tabpanel"
                                    aria-labelledby="address-edit-tab">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>
                                        <address>
                                            <p><strong>Alex Tuntuni</strong></p>
                                            <p>1355 Market St, Suite 900 <br>
                                                San Francisco, CA 94103</p>
                                            <p>Mobile: (123) 456-7890</p>
                                        </address>
                                        <a href="#" class="check-btn sqr-btn"><i class="fa fa-edit"></i> Edit
                                            Address</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-info" role="tabpanel"
                                    aria-labelledby="account-info-tab">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>
                                        <form class="account-details-form mt-4" action="{{ url('/update-account') }}"
                                            method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="single-input-item">
                                                        <label for="name" class="required">Name</label>
                                                        <input type="text" id="name" name="name"
                                                            value="{{ $user->name }}" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="single-input-item">
                                                <label for="mobile" class="required">Mobile</label>
                                                <input type="text" id="mobile" name="mobile" minlength="10"
                                                    maxlength="10" value="{{ $user->mobile }}" readonly/>
                                            </div>
                                            <div class="single-input-item">
                                                <label for="email" class="required">Email Address</label>
                                                <input type="email" id="email" name="email"
                                                    value="{{ $user->email }}" readonly/>
                                            </div>
                                            <fieldset>
                                                <legend>Password change <input type="checkbox" class=""
                                                        id="password" value="yes"></legend>
                                                <div id="password-section" style="display: none;">
                                                    <div class="single-input-item">
                                                        <label for="current-pwd" class="required">Current Password</label>
                                                        <input type="password" id="current-pwd" name="currentPwd" />
                                                    </div>
                                                    <div id="error-message" style="display: none; color: red;"></div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="new-pwd" class="required">New
                                                                    Password</label>
                                                                <input type="password" id="new-pwd" name="newPwd" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="confirm-pwd" class="required">Confirm
                                                                    Password</label>
                                                                <input type="password" id="confirm-pwd"
                                                                    name="confirmPwd" />
                                                                <span id="error-pwdmsg"
                                                                    style="color: red; display: none;">Passwords do not
                                                                    match</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </fieldset>
                                            <div class="single-input-item">
                                                <button type="submit" class="check-btn sqr-btn" id="submit-btn">Save
                                                    Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End My Account Wrapper ==-->
    </main>

    <!-- Modal -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="allproduct">
                        @include('user.data.allproduct-list')
                    </div>
               
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#current-pwd').on('blur', function() {
            var currentPassword = $(this).val();
            $.ajax({
                url: '/check-password',
                method: 'POST',
                data: {
                    current_password: currentPassword,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success === true) {
                        // Password matches
                        console.log('Password is correct');
                        $('#error-message').hide();
                        $('#new-pwd').prop('readonly', false);
                        $('#confirm-pwd').prop('readonly', false);
                    } else {
                        // Password doesn't match
                        // console.log('Password is incorrect');
                        $('#error-message').text('Incorrect password. Please try again.').show();
                        $('#new-pwd').prop('readonly', true);
                        $('#confirm-pwd').prop('readonly', true);
                    }
                },
                error: function(error) {
                    console.error('Error occurred:', error);
                }
            });
        });

        $(document).ready(function() {
           

            $('#confirm-pwd').on('input', function() {
                var newPassword = $('#new-pwd').val();
                var confirmPassword = $(this).val();
                var errorMsg = $('#error-pwdmsg');
                var submitBtn = $('#submit-btn');
                if (newPassword !== confirmPassword) {
                    errorMsg.css('display', 'block');
                    submitBtn.prop('disabled', true);
                } else {
                    errorMsg.css('display', 'none');
                    submitBtn.prop('disabled', false);
                }
            });

        

            $('#password').change(function() {
                if ($(this).is(':checked')) {
                    $('#password-section').show();
                } else {
                    $('#password-section').hide();
                }
            });
        });

        $(function() {
            $(document).on('click', '.action-btn-quick-review', function() {
                $.ajax({
                    type: 'POST',
                    url: '/get-allproduct',
                    data: {
                        id: $(this).data('id')
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $('#orderModal').modal('show');
                        $('.allproduct').html(data);
                    },
                });
            });

        });
    </script>
@endsection
