
<!-- Search -->
				<div class="sidebar-widget search-box">
					<div class="sidebar-title">
						<h5>Search :-</h5>
					</div>
					<form method="get" class="form" action="{{ route('search') }}">
						<div class="form-group">
							<input type="search" name="search" value="" id="search" placeholder="Search....." required>
							<button type="submit"><span class="icon fa fa-search"></span></button>
						</div>
					</form>
				</div>    
				<!-- Categories Widget -->
				<div class="sidebar-widget categories-widget">
					<div class="sidebar-title">
						<h5>Categories :-</h5>
					</div>
					
					<div class="widget-content">
						<ul class="blog-cat">
							@foreach ($kategori as $k)
							<li><a href="{{ url("kategori/$k->slug") }}">{{ $k->name }}<span>( {{ $photo->where('category_id', $k->id)->count() }} )</span></a></li>
							@endforeach
						</ul>
					</div>
				</div>