<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>GetfastProduction | Homepage</title>
    <!-- Stylesheets -->
    <link href="{{ asset("/themes/css/bootstrap.css") }}" rel="stylesheet" />
    <link href="{{ asset("/themes/css/style.css") }}" rel="stylesheet" />
    <link href="{{ asset("/themes/css/responsive.css") }}" rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap"
        rel="stylesheet"
    />

    <!-- Color Switcher Mockup -->
    <link href="{{ asset("/themes/css/color-switcher-design.css") }}" rel="stylesheet" />

    <!-- Color Themes -->
    <link
        id="theme-color-file"
        href="{{ asset("/themes/css/color-themes/default-theme.css") }}"
        rel="stylesheet"
    />

    <link
        rel="shortcut icon"
        href="{{ asset("/themes/images/getfast.png") }}"
        type="image/x-icon"
    />
    <link rel="icon" href="{{ asset("/themes/images/getfast.png") }}" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />

</head>

<body>
        <!-- NAVBAR -->
        @include('layouts.includes.navbar')
        @include('layouts.includes.banner')
        <!-- NAVBAR END -->
        
<!-- NAVBAR -->
{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-1 border-bottom" id="nav-top">
    <div class="container">
        <a href="{{ url("{{route('bookshop.home')}}") }}" class="logo-img"><img src="{{ asset("/themes/{{asset('/')}}assets/img/logo.png") }}" alt=""></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="{{ url("{{route('bookshop.home')}}") }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{ url("{{route('all-books')}}") }}" class="nav-link">Books</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{ url("{{route('discount-books')}}") }}" class="nav-link">Discount's Books</a>
                </li>
                <li class="nav-item px-2">
                    <a href="{{ url("#") }}" class="nav-link">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="{{ url("#") }}" data-toggle="dropdown">
                        <span class="image-circle"><img src="{{ asset("/themes/{{Auth::user()->image? Auth::user()->image_url:Auth::user()->default_img}}") }}" width="30" alt=""></span>
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url("{{route('user.home')}}") }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-muted"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="{{ url("#") }}">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-muted"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="{{ url("{{url('logout')}}") }}">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-muted"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
<!-- NAVBAR END -->
<!-- HEADER -->
{{-- <section class="header py-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="headings">
                    <h3><a href="{{ url("{{route('bookshop.home')}}") }}" class="text-secondary"><b class="text-danger">Book</b> Shop</a></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-user">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-danger" href="{{ url("#") }}" data-toggle="dropdown"><i class="fas fa-cog"></i> Your
                                activities</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ url("{{route('user.reviews')}}") }}">Reviews</a>
                                <a class="dropdown-item" href="{{ url("{{route('user.orders')}}") }}">Orders</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shopping-cart text-right">
                    <a href="{{ url("{{route('cart')}}") }}" class="text-danger"><i class="fas fa-shopping-cart fa-2x m-1"></i>
                        @if(Cart::content()->count())
                            <span class="count-cart">{{Cart::content()->count()}}</span>
                        @endif
                    </a>

                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- HEADER END -->

@yield('content')


<!-- jQuery -->
<script type="text/javascript" src="{{ asset("/themes/{{asset('/')}}assets/js/jquery.min.js") }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset("/themes/{{asset('/')}}assets/js/popper.min.js") }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset("/themes/{{asset('/')}}assets/js/bootstrap.min.js") }}"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="{{ asset("/themes/{{asset('/')}}assets/js/script.js") }}"></script>

</body>

</html>
