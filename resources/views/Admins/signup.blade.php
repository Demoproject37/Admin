<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Signup</title>

    <!-- Fontfaces CSS-->
    <link href="{!! url('asset/css/font-face.css') !!}" rel="stylesheet" media="all">
    <link href="{!! url('asset/vendor/font-awesome-4.7/css/font-awesome.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! url('asset/vendor/font-awesome-5/css/fontawesome-all.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! url('asset/vendor/mdi-font/css/material-design-iconic-font.min.css') !!}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{!! url('asset/vendor/bootstrap-4.1/bootstrap.min.css') !!}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{!! url('asset/vendor/animsition/animsition.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! url('asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! url('asset/vendor/wow/animate.css') !!}" rel="stylesheet" media="all">
    <link href="{!! url('asset/vendor/css-hamburgers/hamburgers.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! url('asset/vendor/slick/slick.css') !!}" rel="stylesheet" media="all">
    <link href="{!! url('asset/vendor/select2/select2.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! url('asset/vendor/perfect-scrollbar/perfect-scrollbar.css') !!}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{!! url('asset/css/theme.css') !!}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{!! url('asset/images/icon/logo.png') !!}" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('register.custom') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="au-input au-input--full" type="text" name="name"
                                        placeholder="Enter Your Full Name ">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email"
                                        placeholder="Enter your Email Id">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="gender">
                                        <option>---------</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input class="form-control" type="date" name="dob">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="au-input au-input--full" name="address" placeholder="Enter your Address">
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"
                                        placeholder="Enetr your Password">
                                </div>
                                <div class="form-group">
                                    <label>Re-type Password</label>
                                    <input class="au-input au-input--full" type="password" name="cpassword">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign
                                    in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{ route('login') }}">Sign in Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{!! url('asset/vendor/jquery-3.2.1.min.js') !!}"></script>
    <!-- Bootstrap JS-->
    <script src="{!! url('asset/vendor/bootstrap-4.1/popper.min.js') !!}"></script>
    <script src="{!! url('asset/vendor/bootstrap-4.1/bootstrap.min.js') !!}"></script>
    <!-- Vendor JS       -->
    <script src="{!! url('asset/vendor/slick/slick.min.js') !!}"></script>
    <script src="{!! url('asset/vendor/wow/wow.min.js') !!}"></script>
    <script src="{!! url('asset/vendor/animsition/animsition.min.js') !!}"></script>
    <script src="{!! url('asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}"></script>
    <script src="{!! url('asset/vendor/counter-up/jquery.waypoints.min.js') !!}"></script>
    <script src="{!! url('asset/vendor/counter-up/jquery.counterup.min.js') !!}"></script>
    <script src="{!! url('asset/vendor/circle-progress/circle-progress.min.js') !!}"></script>
    <script src="{!! url('asset/vendor/perfect-scrollbar/perfect-scrollbar.js') !!}"></script>
    <script src="{!! url('asset/vendor/chartjs/Chart.bundle.min.js') !!}"></script>
    <script src="{!! url('asset/vendor/select2/select2.min.js') !!}"></script>

    <!-- Main JS-->
    <script src="{!! url('asset/js/main.js') !!}"></script>

</body>

</html>
<!-- end document-->
