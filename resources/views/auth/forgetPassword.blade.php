<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <style>
        body {
            background-position: center;
            background-color: #eee;
            background-repeat: no-repeat;
            background-size: cover;
            color: #505050;
            font-family: "Rubik", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.5;
            text-transform: none
        }

        .forgot {
            background-color: #fff;
            padding: 12px;
            border: 1px solid #dfdfdf
        }

        .padding-bottom-3x {
            padding-bottom: 72px !important
        }

        .card-footer {
            background-color: #fff
        }

        .btn {
            font-size: 13px
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #76b7e9;
            outline: 0;
            box-shadow: 0 0 0 0px #28a745
        }

    </style>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container padding-bottom-3x mb-2 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="forgot">
                    <h2>Forgot your password?</h2>
                    <p>Change your password in three easy steps. This will help you to secure your password!</p>
                    <ol class="list-unstyled">
                        <li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
                        <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link
                        </li>
                        <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
                    </ol>
                </div>

                <form action="{{ url('email') }}" method="GET" class="card mt-4">
                    <div class="card-body">
                        <div class="form-group"> <label for="email-for-pass">Enter your email address</label> <input
                                class="form-control" type="text" id="email-for-pass"><small
                                class="form-text text-muted">Enter the email address you used during the registration on
                                BBBootstrap.com. Then we'll email a link to this address.</small> </div>
                    </div>
                    <div class="card-footer"> <button class="btn btn-success" id="email" type="submit">Get New
                            Password</button>
                        <a href="{{ url('login') }}" class="btn btn-danger">Back to Login</a>
                        {{-- <button class="btn btn-danger" type="submit" id="email"></button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- SwitAlert2 --}}
    <script src="sweetalert2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'>
    </script>
    <script type='text/javascript'></script>



    <script>
        $('body').on('click', '#ok', function() {
            console.log('email clicked');
            Swal.fire(
                'Good job!',
                'Check Your GMAIL now!',
                'success'
            )
        });
    </script>

</body>

</html>
