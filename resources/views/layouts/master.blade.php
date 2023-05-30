<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Getfast - Home')</title>
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{asset('/')}}assets/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css"> --}}

    <meta charset="utf-8">
    <title>PT Kuantum Buku Sejahtera | Penerbit dengan Pelayanan Terbaik dan Terpercaya!</title>
    <meta name="description" content="Getfast hadir di tengah-tengah masyarakat untuk melengkapi dan memenuhi permasalahan kebutuhan kaos sablon, Serta menjadi media untuk memenuhi kebutuhan fashion yang lebih baik.">
    <meta name="keywords" content="Getfast, jombang, jawa timur, indonesia">
    <meta name="author" content="faiz">
    <!-- Stylesheets -->
    <link href="{{ asset("/themes/css/bootstrap.css") }}" rel="stylesheet">
    <link href="{{ asset("/themes/css/style.css") }}" rel="stylesheet">
    <link href="{{ asset("/themes/css/responsive.css") }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/2a563a7704.js"></script>


    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@300;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="themes/css/color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="{{ asset("/themes/css/color-themes/default-theme.css") }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset("/themes/images/icon.jpg") }}" type="image/x-icon">
    <link rel="icon" href="{{ asset("/themes/images/icon.jpg") }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>
<body>

    <!-- NAVBAR -->
    @include('layouts.includes.navbar')
<!-- NAVBAR END -->
<br><br><br><br><br>
@yield('content')

<footer class="main-footer">
    <div class="pattern-layer-one"
        style="background-image: url(themes/images/background/pattern-14.png)"></div>
    <div class="pattern-layer-two"
        style="background-image: url(themes/images/background/pattern-15.png)"></div>
    <!--Waves end-->
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href=""><img
                                            src="themes/images/logo-getfast.png"
                                            alt="" /></a>
                                </div>
                                                                        <div class="text"><p>PT. Kuantum Buku Sejahtera adalah salah satu perusahaan yang bergerak di bidang penerbitan dan pendistribusian buku khususnya buku-buku SMK di seluruh Indonesia. PT Kuantum Buku Sejahtera&#8230;</div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li><a href="" class="fa fa-facebook-f"
                                            target="_blank"></a></li>
                                    <li><a href="https://www.instagram.com/quantumbook.id" class="fa fa-instagram"
                                            target="_blank"></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCUQDbcDgBskeDiJbcRGtAaA" class="fa fa-youtube"
                                            target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Link Cepat</h5>
                                <ul class="list-link">
                                    <li><a href="page/tentang-kami">Tentang Kami</a></li>
                                    <li><a href="page/visi-dan-misi">Visi dan Misi</a></li>
                                    <li><a href="page/layanan">Layanan</a></li>
                                    <li><a href="products">Produk</a></li>
                                    <li><a href="blogs">Blog</a></li>
                                    <li><a href="contact">Kontak</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget" style="color: white">
                                <h5>Hubungi Kami</h5>
                                <ul>
                                    <li>
                                        
                                        <strong><i class="fa fa-map-marker" aria-hidden="true"></i>Address</strong>
                                        Jl. Pondok Blimbing Indah Selatan X N6 No.5 Kota Malang - Jawa Timur                                            </li>
                                    <li>
                                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                                        <strong>Phone</strong>
                                        <a
                                            href="tel:+62 822-9951-2221" style="color: white">+62 822-9951-2221</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                        <strong>E-Mail</strong>
                                        <a
                                            href="mailto:office@quantumbook.id" style="color: white">office@quantumbook.id</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright">Copyright &copy; 2022 PT Kuantum Buku Sejahtera.
                            All Rights Reserved.</div>
                    </div>
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <ul class="footer-nav">
                            <li><a href="page/tentang-kami">About Us</a></li>
                            <li><a href="page/terms-of-service">Terms of service</a></li>
                            <li><a href="page/privacy-policy">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>


 <!-- Search Popup -->
 <div class="search-popup">
    <button class="close-search style-two">X</button>
    <button class="close-search"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
    </button>
    <form action="{{route('all-books')}}">
        <div class="input-group input-group-sm m-1">
            <input type="text" name="term" value="{{request('term')}}" class="form-control" placeholder="Search Book..">
            <div class="input-group-append">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </div>
    </form>
    <div class="form-group">
        <input type="text" name="q" value="" placeholder="Cari Produk" required="">
        <button type="submit"><i class="fa fa-search"></i></button>
    </div>
    </form>    </div>
<!-- End Header Search -->

<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>
            <div class="sidebar-textwidget">

                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <a href=""><img
                                    src="themes/images/logo-quantum-book-white.png"
                                    alt="" /></a>
                        </div>
                        <div class="content-box">
                            
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="nav-item">
                                            <a href="/login" class="theme-btn btn-style-two"><span
                                                class="txt">Masuk</span></a><br><a class="nav-link" href="{{ route('register') }}">belum punya akun?</a>
                                        
                                    @else
                                        <li class="nav-item dropdown">
                                           <center><a id="navbarDropdown" class="theme-btn btn-style-two" href="user-home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <span class="txt"> <img src="{{Auth::user()->image? Auth::user()->image_url:Auth::user()->default_img}}" width="50" alt=""> {{ Auth::user()->name }} <span class="caret"></span>
                                        </span>
                                        </a>
                                        </center>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                                                                <h2>Tentang Kami</h2>
                            <p class="text"><p>PT. Kuantum Buku Sejahtera adalah salah satu perusahaan yang bergerak di bidang penerbitan dan pendistribusian buku khususnya buku-buku SMK di seluruh Indonesia. PT Kuantum Buku Sejahtera atau yang dapat disebut&#8230;</p>
                            <a href="contact" class="theme-btn btn-style-two"><span
                                    class="txt">Konsultasi</span></a>
                        </div>
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <ul class="list-style-one">
                                <li><span
                                        class="icon fa fa-location-arrow"></span>Jl. Pondok Blimbing Indah Selatan X N6 No.5 Kota Malang - Jawa Timur                                        </li>
                                <li><span class="icon fa fa-phone"></span>+62 822-9951-2221</li>
                                <li><span class="icon fa fa-envelope"></span>office@quantumbook.id</li>
                                <li><span class="icon fa fa-clock-o"></span>9.00 s/d 17.00 WIB</li>
                            </ul>
                        </div>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li class="facebook"><a href=""
                                    class="fa fa-facebook-f"></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/quantumbook.id"
                                    class="fa fa-instagram"></a></li>
                            <!-- <li class="twitter"><a href="#" class="fa fa-twitter"></a></li> -->
                            <!-- <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li> -->
                            <li class="youtube"><a href="https://www.youtube.com/channel/UCUQDbcDgBskeDiJbcRGtAaA"
                                    class="fa fa-youtube"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END sidebar widget item -->

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-200ca823-dd01-4749-ad4b-9440e0c42a1d"></div>


<script src="{{ asset("/themes/js/jquery.js") }}"></script>
<script src="{{ asset("/themes/js/popper.min.js") }}"></script>
<script src="{{ asset("/themes/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/themes/js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
<script src="{{ asset("/themes/js/jquery.fancybox.js") }}"></script>
<script src="{{ asset("/themes/js/appear.js") }}"></script>
<script src="{{ asset("/themes/js/parallax.min.js") }}"></script>
<script src="{{ asset("/themes/js/tilt.jquery.min.js") }}"></script>
<script src="{{ asset("/themes/js/jquery.paroller.min.js") }}"></script>
<script src="{{ asset("/themes/js/owl.js") }}"></script>
<script src="{{ asset("/themes/js/mixitup.js") }}"></script>
<script src="{{ asset("/themes/js/wow.js") }}"></script>
<script src="{{ asset("/themes/js/nav-tool.js") }}"></script>
<script src="{{ asset("/themes/js/jquery-ui.js") }}"></script>
<script src="{{ asset("/themes/js/jquery.bootstrap-touchspin.js") }}"></script>
<script src="{{ asset("/themes/js/script.js") }}"></script>
<script src="{{ asset("/themes/js/color-settings.js") }}"></script>

<!-- jQuery -->
<script type="text/javascript" src="{{asset('/')}}assets/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('/')}}assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="{{asset('/')}}assets/js/script.js"></script>

</body>
</html>
