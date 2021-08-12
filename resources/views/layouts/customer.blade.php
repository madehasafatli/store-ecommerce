<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/tooplate-main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <!--

    -->
</head>

<body>
<!-- Navigation -->

{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">--}}
{{--    <div class="container">--}}
{{--        <ul class="navbar-nav">--}}
{{--        <a class="nav-item" href="#"><img src="{{asset('img/logodash.png')}}" alt=""></a>--}}
{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="{{route('dashboard')}}">Home--}}
{{--                    <span class="sr-only">(current)</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Products</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">About Us</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">Contact Us</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <ul class="text-right navbar-nav ml-auto">--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>--}}

{{--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                    <a class="dropdown-item" href="{{ route('profile.show') }}">{{__('Profile')}}</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <form method="POST" action="{{ route('logout') }}">--}}
{{--                        @csrf--}}
{{--                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                           onclick="event.preventDefault();this.closest('form').submit();">--}}
{{--                            {{__('Log Out')}}--}}
{{--                        </a>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</nav>--}}
<!-- Footer Starts Here -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <center><img src="{{asset('/img/logo.png')}}" alt=""></center>
                </div>
            </div>
            <div class="col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Ends Here -->


<!-- Sub Footer Starts Here -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-text">
                    <p>Copyright &copy; 2021 MakMa Company

                        - Design: <a rel="nofollow" href="#">MakMa Store</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Footer Ends Here -->


<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<!-- Additional Scripts -->
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>


</body>

</html>
