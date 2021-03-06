@extends('frontend.base')

@section('title', 'Category')

@section('content')
	<div id="search-section">
		<div class="container clearfix">
			<div class="search-in-cat">
				<form method="get" role="form" class="clearfix" action="search">
					<input type="text" name="q" id="search-input" placeholder="Search Keywords" class="form-control">
					<button type="submit" class="btn-search">Search</button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>
			<div class="subscribe">
				<form method="get" role="form" class="clearfix">
					<input type="text" name="email" id="search-input" placeholder="Your Email" class="form-control">
					<button type="submit" class="btn-search">SUBSCRIBE</button>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>
		</div>
	</div>

	<div class="cat-nav-section">
		<div class="container">
			<ul class="nav cat-menu">
				<li class="home"><a href="javascript:;"></a></li>
				<?php
				// $current_link = $_SERVER['REQUEST_URI'];
				// $explode = explode("/",$current_link);
				// if($explode[3] == 'category'){
				// }
				if(isset($slug)) {
					$sub_category = App\Models\ListingCategory::where('slug', $slug)->first();
					$categories = App\Models\ListingCategory::where('id', $sub_category->parent)->get();
				}else{
					$categories = App\Models\ListingCategory::all();
				}
				//dd($category);
				?>
				<?php foreach ($categories as $category): ?>
					<?php foreach ($category->children as $child): ?>
					<li><a href="{{ url('category', $child->slug) }}">{{ $child->title }}</a></li>
					<?php endforeach ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div>

	<div class="content">
		<div class="container">
			<div class="row">
				<div class="listings">
				@foreach ($listings as $listing)
					<?php
					$assets = json_decode($listing->assets);
					$filename = substr($assets[0], strrpos($assets[0], '/') + 1);
					$img_entry = str_replace($filename, 'thumb-'.$filename, $assets[0]);
					?>
					<div class="col-md-6">
						<div class="listing-entry">
							<h3 class="listing-title"><a href="<?php echo url('category', array($listing->listingCategory->slug, $listing->slug)) ?>">{{ $listing->title }}</a></h3>
							<div class="listing-content">
								<div class="listing-thumb">
									<a href="javascript:;"><img src="{{ asset($img_entry) }}" alt=""></a>
								</div>
								<div class="listing-text">
									<p>{!! substr(strip_tags($listing->content), 0, 175) !!}</p>
									<a href="{{ url('category', array($listing->listingCategory->slug, $listing->slug)) }}" class="listing-more">View More &raquo;</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
				<!-- 
					<div class="col-md-6">
						<div class="listing-entry">
							<h3 class="listing-title"><a href="javascript:;">KACA FILM V-KOOL ALL VARIANT</a></h3>
							<div class="listing-content">
								<div class="listing-thumb">
									<a href="javascript:;"><img src="{{ asset('assets/frontend/img/listing-item.jpg') }}" alt=""></a>
								</div>
								<div class="listing-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<a href="javascript:;" class="listing-more">View More &raquo;</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="listing-entry">
							<h3 class="listing-title"><a href="javascript:;">KACA FILM V-KOOL ALL VARIANT</a></h3>
							<div class="listing-content">
								<div class="listing-thumb">
									<a href="javascript:;"><img src="{{ asset('assets/frontend/img/listing-item.jpg') }}" alt=""></a>
								</div>
								<div class="listing-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<a href="javascript:;" class="listing-more">View More &raquo;</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="listing-entry">
							<h3 class="listing-title"><a href="javascript:;">KACA FILM V-KOOL ALL VARIANT</a></h3>
							<div class="listing-content">
								<div class="listing-thumb">
									<a href="javascript:;"><img src="{{ asset('assets/frontend/img/listing-item.jpg') }}" alt=""></a>
								</div>
								<div class="listing-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<a href="javascript:;" class="listing-more">View More &raquo;</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="listing-entry">
							<h3 class="listing-title"><a href="javascript:;">KACA FILM V-KOOL ALL VARIANT</a></h3>
							<div class="listing-content">
								<div class="listing-thumb">
									<a href="javascript:;"><img src="{{ asset('assets/frontend/img/listing-item.jpg') }}" alt=""></a>
								</div>
								<div class="listing-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<a href="javascript:;" class="listing-more">View More &raquo;</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="listing-entry">
							<h3 class="listing-title"><a href="javascript:;">KACA FILM V-KOOL ALL VARIANT</a></h3>
							<div class="listing-content">
								<div class="listing-thumb">
									<a href="javascript:;"><img src="{{ asset('assets/frontend/img/listing-item.jpg') }}" alt=""></a>
								</div>
								<div class="listing-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<a href="javascript:;" class="listing-more">View More &raquo;</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="listing-entry">
							<h3 class="listing-title"><a href="javascript:;">KACA FILM V-KOOL ALL VARIANT</a></h3>
							<div class="listing-content">
								<div class="listing-thumb">
									<a href="javascript:;"><img src="{{ asset('assets/frontend/img/listing-item.jpg') }}" alt=""></a>
								</div>
								<div class="listing-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<a href="javascript:;" class="listing-more">View More &raquo;</a>
								</div>
							</div>
						</div>
					</div>
					-->
				</div>
			</div>
		</div>
	</div>
@stop

@section('page-styles')
	{{-- expr --}}
@stop

@section('page-scripts')
	<script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.flexslider-min.js') }}"></script>
@stop

@section('inline-script')
	<script type="text/javascript">
		$(function(){
			$('.teaser-home .cat-item').eq(0).css({
				'left': '73px',
				'top': '3px'
			});
			$('.teaser-home .cat-item').eq(1).css({
				'left': '303px',
				'top': '3px'
			});
			$('.teaser-home .cat-item').eq(2).css({
				'left': '534px',
				'top': '3px'
			});
			$('.teaser-home .cat-item').eq(3).css({
				'left': '73px',
				'bottom': '3px'
			});
			$('.teaser-home .cat-item').eq(4).css({
				'left': '305px',
				'bottom': '3px'
			});
			$('.teaser-home .cat-item').eq(5).css({
				'left': '535px',
				'bottom': '3px'
			});

			$('.flexslider').each(function(){
				var sliderSettings = {
					controlNav: false,
					directionNav: false,
					animationSpeed: 700,
					slideshowSpeed: randomIntFromInterval(5000, 2000),
					easing: 'easeInOutBack',
					useCSS: false
				};

				$(this).flexslider(sliderSettings);
			});

			function randomIntFromInterval(min,max)
			{
			    return Math.floor(Math.random()*(max-min+1)+min);
			}
		});
	</script>
@stop