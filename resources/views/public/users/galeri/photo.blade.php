
<meta charset="utf-8">

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
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!--Page Title-->
    <section class="page-title">
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-16.png)"></div>
    	<div class="auto-container">
			<h2>Detail Photo</h2>
			<ul class="page-breadcrumb">
				<li><a href="{{ url("/") }}">home</a></li>
				<li>Detail Photo</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Shop Single Section-->
    <section class="shop-single-section">
    	<div class="auto-container">
        	
            <!--Shop Single-->
            <div class="shop-page product-details">
                
                <!--Basic Details-->
                <div class="basic-details">
                    <div class="row clearfix">
                    
                        <div class="image-column col-lg-7 col-md-12 col-sm-12">
                            <div class="carousel-outer">
                                <a href="{{ url("assets/landingPage/images/photo/large/$post->image") }}" class="lightbox-image" title="Image Caption Here"><img src="{{ asset("assets/landingPage/images/photo/large/$post->image") }}" alt=""></a>
                            </div>
                        </div>
                        
                        <!--Info Column-->
                        <div class="info-column col-lg-5 col-md-12 col-sm-12">
                            <div class="details-header">
                                <h2>{{ $post->title }}</h2>
                            </div>

                            <div class="text">
                                {{ $post->content }}
                            </div>
                            <ul class="shop-list">
                                @foreach ($category->where('id', $post->category_id) as $item)
                                <li><strong>Category</strong><span class="theme_color">.</span>{{ $item->name }}</li>    
                                @endforeach
                                
                            </ul>
                            
                        </div>
                        
                    </div>
                </div>
                <!--Basic Details-->
            </div>
            
        </div>
    </section>
    <!--End Shop Single Section-->
	
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
<script src="{{ asset("/assets/landingPage/themes/js/jquery.bootstrap-touchspin.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/script.js") }}"></script>
<script src="{{ asset("/assets/landingPage/themes/js/color-settings.js") }}"></script>
