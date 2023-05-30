<meta charset="utf-8">
<title>quantumbook | galeri</title>
<!-- Stylesheets -->
<link href="{{ asset("/assets/landingPage/themes/css/bootstrap.css") }}" rel="stylesheet">
<link href="{{ asset("/assets/landingPage/themes/css/style.css") }}" rel="stylesheet">
<link href="{{ asset("/assets/landingPage/themes/css/responsive.css") }}" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="{{ asset("/assets/landingPage/themes/css/color-switcher-design.css") }}" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="{{ asset("/assets/landingPage/themes/css/color-themes/default-theme.css") }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset("/assets/landingPage/themes/images/favicon.png") }}" type="image/x-icon">
<link rel="icon" href="{{ asset("/assets/landingPage/themes/images/favicon.png") }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url({{ asset("assets/landingPage/themes/images/background/pattern-16.png") }})"></div>
    	<div class="auto-container">
			<h2>{{ $judul }}</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{ url("/") }}">home</a></li>
				<li>{{ $judul }}</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<!--Shop Single-->
                	<div class="shop-section">
{{-- 						
                        <!--Sort By-->
                        <div class="items-sorting">
                        	<div class="row clearfix">
                                <div class="results-column col-md-6 col-sm-6 col-xs-12">
                                    <h6>Showing Items 1–9 of 36 results</h6>
                                </div>
                                <div class="select-column pull-right col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <select name="sort-by">
                                            <option>Default Sorting</option>
                                            <option>By Order</option>
                                            <option>By Price</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        
                        <div class="our-shops">
                        	
                            <div class="row clearfix">
                                @forelse ($galeri as $item)
                                    <!-- Shop Item -->
								<div class="single-product-item col-lg-4 col-md-6 col-sm-12 text-center">
                                    <div class="img-holder">
                                       <img width="270" height="300" src="{{ asset("assets/landingPage/images/photo/thumb/$item->image") }}" class="" alt="">
                                   </div>
                                   <div class="title-holder text-center">
                                       <div class="static-content">
                                           <h3 class="title text-center"><a href="{{ url("shop-single.html") }}">{{ $item->title }}</a></h3>
                                       </div>
                                       <a href="{{ url("/galeri/$item->slug") }}" class="">
                                       <div class="overlay-content">
                                           <ul class="clearfix">
                                               {{-- <li>
                                                   <a href="{{ url("shop-single.html") }}"><span class="flaticon-shopping-cart"></span>
                                                       <div class="toltip-content">
                                                           <p>Add to Cart</p>
                                                       </div>
                                                   </a>
                                               </li> --}}
                                               {{-- <li>
                                                   <a href="{{ url("/galeri/$item->slug") }}" class=""><span class="fa fa-heart"></span>
                                                       <div class="toltip-content">
                                                           <p>Add Whishlist</p>
                                                       </div>
                                                   </a>
                                               </li> --}}
                                               {{-- <li>
                                                   <a href="{{ url("$item->image") }}" class="lightbox-image" data-fancybox="shop-gallery"><span class="fa fa-expand"></span>
                                                       <div class="toltip-content">
                                                           <p>Zoom In</p>
                                                       </div>
                                                   </a>
                                               </li> --}}
                                           </ul>
                                       </div>  </a>
                                   </div>
                               </div>
                               @empty
                               <section class="error-section">
                                <div class="auto-container">
                                    <div class="content">
                                        <h1>404</h1>
                                        <h2>Oops! That page can’t be found</h2>
                                        <div class="text">Sorry, but the page you are looking for does not existing</div>
                                        <a href="http://localhost/quantumbook-main/" class="theme-btn btn-style-three"><span class="txt">Go to Home Page</span></a>
                                    </div>
                                </div>
                            </section>
                                                            @endforelse
                            	
                                
                            </div>
                            
                        </div>
                        {{ $galeri->links('vendor.pagination.custom') }}
                        
                    </div>
                </div>
               <!-- Sidebar Side -->
	<div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
		<aside class="sidebar sticky-top">
			<div class="sidebar-inner">
                @include('components.photo_sidebar',[
                    'photo'=>$photo,
                    'kategori'=>$kategori])
			</div>
		</aside>
	</div>
				



			</div>
		</div>
	</div>
	
<script src="{{ asset("/assets/landingPage/themes/js/jquery.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/popper.min.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/jquery.fancybox.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/appear.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/parallax.min.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/tilt.jquery.min.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/jquery.paroller.min.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/owl.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/mixitup.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/wow.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/nav-tool.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/jquery-ui.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/script.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/color-settings.js") }}"></script>