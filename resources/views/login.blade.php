<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | SIBI MANDA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('public/login') }}/images/logo.png" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/login') }}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('public/login') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('public/login') }}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/login') }}/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/login') }}/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/login') }}/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/login') }}/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/login') }}/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/login') }}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public/login') }}/css/main.css">
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form validate-form" style="font-family:Arial">
                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        <h1>SIBI</h1>
                        <h3>MANDA</h3>

                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" required />
                            <span class="focus-input100"></span>
                            <span class="label-input100">Email</span>
                        </div>


                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password" required />
                            <span class="focus-input100"></span>
                            <span class="label-input100">Password</span>
                        </div>

                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>
                        </div>


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </form>

                </div>

                <div class="login100-more mt-3"
                    style="background-image: url('{{ url('public/login') }}/images/bg-3.jpg');">
                    <h4 style="font-family:Arial; color:white;" class="mb-0 fixed-bottom mt-3">MANDRASAH ALIYAH NEGERI 2
                        KETAPANG</h4>

                    <h4 style="font-family:Arial; color:white;" class="mb-4 fixed-bottom mt-3" style="margin-left: 50%">
                        SISTEM INFORMASI BUKU INDUK</h4>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('public/login') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{ url('public/login') }}/vendor/animsition/js/animsition.min.js"></script>
    <script src="{{ url('public/login') }}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ url('public/login') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('public/login') }}/vendor/select2/select2.min.js"></script>
    <script src="{{ url('public/login') }}/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{ url('public/login') }}/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="{{ url('public/login') }}/vendor/countdowntime/countdowntime.js"></script>
    <script src="{{ url('public/login') }}/js/main.js"></script>

</body>

</html>
