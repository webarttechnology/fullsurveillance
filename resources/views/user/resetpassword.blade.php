<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <title>Forgot Password</title>
    <style>
        .form-gap {
            padding-top: 70px;
        }
    </style>
</head>

<body>
    <div class="form-gap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center">Reset Password?</h2>
                            <p>You can reset your password here.</p>
                            <div class="panel-body">


                                <form class="form-horizontal" role="form" method="POST"
                                    action="{{ url('/password/reset') }}">
                                    @csrf
                                    <input type="hidden" id="email" name="email" placeholder="email address"
                                        class="form-control" value="{{ $user->email }}">
                                    {{-- <input type="hidden" id="token" name="token"
                                    class="form-control" value="{{$user->remember_token}}"> --}}
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="password" type="password" class="form-control"
                                                placeholder="Enter Your New Password" name="password">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope color-blue"></i></span>
                                            <input id="password-confirm" type="password" class="form-control"
                                                placeholder="Enter Your Confirm Password" name="password_confirmation">

                                        </div>
                                    </div>
                                    <p id="error-msg" style="color: red; display: none;">Passwords do not match!</p>
                                    <div class="form-group">
                                        <button type="submit" id="submitBtn" class="btn btn-lg btn-primary btn-block" disabled>Reset
                                            Password</button>
                                    </div>

                                    <input type="hidden" class="hide" name="token" id="token" value="">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#password, #password-confirm').on('keyup', function() {
                var password = $('#password').val();
                var confirmPassword = $('#password-confirm').val();

                // Check if passwords match
                if (password === confirmPassword) {
                    $('#error-msg').hide();
                    $('#submitBtn').prop('disabled', false); // Enable the button
                } else {
                    $('#error-msg').show();
                    $('#submitBtn').prop('disabled', true); // Disable the button
                }
            });
        });
    </script>
</body>

</html>