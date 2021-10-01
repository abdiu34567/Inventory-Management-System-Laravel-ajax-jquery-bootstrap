<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title></title>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
        <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

        <!-- PLUGINS CSS STYLE -->
        <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
        <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
        <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
        <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
        <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

        <!-- SLEEK CSS -->
        <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

        <!-- FAVICON -->
        <link href="assets/img/favicon.png" rel="shortcut icon" />

        <script src="assets/plugins/nprogress/nprogress.js"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand">
                            <a href="/index.html">
                                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                                    </g>
                                </svg>
                                <span class="brand-name">Melfen Tech</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Sign In</h4>

                        @if ($error == 'found')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                        @endif

                        <form action="{{ url('dashboard') }}" method="POST">
                            @csrf

                            <div class="row">

                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" name="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Email">

                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="form-group col-md-12 ">
                                    <input type="password" name="password" class="form-control input-lg" id="cpassword" placeholder=" Password">

                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <div class="d-inline-block mr-3">
                                        <label class="control control-checkbox">
                                            <input type="checkbox" name="remember" />
                                            <div class="control-indicator"></div>
                                            Remember Me
                                        </label>

                                    </div>

                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
                                    <p>
                                        <a class="text-blue float-right" href="{{ url('forget/password') }}">Forget
                                            Password</a>
                                    </p>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pl-0">
            <p class="text-center">&copy; Design and developed by Melfen Tech

            </p>
        </div>
    </div>
</body>

</html>
