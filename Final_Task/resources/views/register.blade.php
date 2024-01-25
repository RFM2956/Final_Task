<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->

    <!-- Icons font CSS-->
    <link href="{{ asset('back/register/assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('back/register/assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('back/register/assets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('back/register/assetsvendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('back/register/assets/css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <h2 class="title">Sign Up</h2>
                    <form method="POST" action="{{ route('client.registerPost')}}">
                        @csrf
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">UserName</label>
                                    <input class="input--style-4" type="text" name="name" required>
                                </div>
                                @error('name')
                                {{$message}}
                                @enderror
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" required>
                                </div>
                                @error('email')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="row row-space">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" required>
                                </div>
                                @error('password')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="password" name="cpassword" required>
                                </div>
                                @error('cpassword')
                                {{$message}}
                                @enderror
                            </div>

                        </div>

                        <div style="gap:30px; display:flex" class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            <a href="{{ route('client.login')}}" class="btn btn--radius-2 btn--blue" type="submit" style="text-decoration:none; background: red">Return To Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('back/register/assets/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor JS-->
    <script src="{{ asset('back/register/assets/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('back/register/assets/vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('back/register/assets/vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('back/register/assets/js/global.js') }}"></script>

</body>

</html>
<!-- end document-->
