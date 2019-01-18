@extends('frontend.layouts.master')
@section('content')
<!-- row -->
	<div class="row">
 <!-- post -->
 	@foreach($last2featuredpost as $post)
	<div class="col-md-6">
		<div class="post post-thumb">
		  <a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>			  
		   <div class="post-body">
			<div class="post-meta">
     			<a class="post-category cat-2" href="#">{{ $post->relCategory->name }}</a>
				<span class="post-date">{{ date('d M Y',strtotime($post->published_date)) }}</span>
			</div>
				<h3 class="post-title"><a href="#">{{ $post->title }}</a></h3>
			</div>
		</div>
	</div>
		@endforeach		
	</div>
		<!-- /row -->

		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Recent Posts</h2>
				</div>
			</div>
		@php
			$x=0;
 		@endphp
		@foreach($recent_posts as $post)
	<!-- post -->
	<div class="col-md-4">
		<div class="post">
			<a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>
				<div class="post-body">
					<div class="post-meta">
						<a class="post-category cat-1" href="#">{{ $post->relCategory->name }}</a>
						<span class="post-date">{{ date('d M Y',strtotime($post->published_date)) }}</span>
					</div>
						<h3 class="post-title"><a href="#">{{ $post->title }}</a></h3>
				</div>
		</div>
	</div>

		@php
			$x++;
		@endphp
		
		@if($x==3)
			<div class="clearfix visible-md visible-lg"></div>
				@php
				$x=0;
				@endphp
		@endif		
			@endforeach
	<!-- /post -->

	<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<div class="col-md-12">
								<div class="section-title">
									<h2>All Posts</h2>
								</div>
							</div>
							<div class="col-md-12">
								<div class="post post-thumb">
									<a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-1" href="#">{{ $post->relCategory->name }}</a>
											<span class="post-date">{{ date('d M Y',strtotime($post->published_date)) }}</span>
										</div>
										<h3 class="post-title"><a href="blog-post.html">{{ $post->title }}</a></h3>
									</div>
								</div>
							</div>
							<!-- /post -->

							<div class="clearfix visible-md visible-lg"></div>

							<!-- post -->
							@php
								$x=0;
					 		@endphp
							@foreach($all_posts as $post)
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href="category.html">{{ $post->relCategory->name }}</a>
											<span class="post-date">{{ date('d M Y',strtotime($post->published_date)) }}</span>
										</div>
										<h3 class="post-title"><a href="blog-post.html">{{ $post->title }}</a></h3>
									</div>

								</div>
							</div>

							@php
								$x++;
							@endphp
							
							@if($x==2)
								<div class="clearfix visible-md visible-lg"></div>
								@php
									$x=0;
								@endphp
							@endif		
							@endforeach
							<!-- /post -->
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
									
								</div>
							</div>
							
						</div>
					</div>

					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>
							@foreach($popular_posts as $post)
							<div class="post post-widget">
								<a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">{{ $post->title }}</a></h3>
								</div>
							</div>
							@endforeach
							
						<!-- /post widget -->

						<!-- post widget -->
					
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							@foreach($all_categories as $post)
							<div class="category-widget">
								<ul>
								  <li><a href="{{ route('details',$post->id) }}" class="cat-1">{{ $post->name }}<span>340</span></a></li>
								</ul>
							</div>
							@endforeach
						</div>
						<!-- /catagories -->

						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		
		<!-- section -->
		<hr>
		<div class="section section-grey">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Featured Posts</h2>
						</div>
					</div>

					<!-- post -->
					@foreach($last3featureds as $post)
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">{{ $post->relCategory->name }}</a>
									<span class="post-date">{{ date('d M Y',strtotime($post->published_date)) }}</span>
								</div>
								<h3 class="post-title"><a href="#">{{ $post->title }}</a></h3>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /post -->

			</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
									<div class="col-md-12">
										<div class="section-title">
											<h2>All Posts</h2>
										</div>
									</div>
										<!-- post -->
									@foreach($posts as $post)
									<div class="col-md-12">
										<div class="post post-widget">
											<a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-3" href="category.html">{{ $post->relCategory->name }}</a>
												<span class="post-date">{{ date('d M Y',strtotime($post->published_date)) }}</span>
											</div>
										</div>
												<h3 class="post-title"><a href="blog-post.html">{{ $post->title }}</a></h3>
												{{-- <p>{{ $post->short_description }}</p> --}}
										</div>
									</div>
								
								</div>
						@endforeach
				</div>
	    	</div>
		</div>
	</div>
</div>

					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						
					</div>
		</div>
					<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				@yield('content')
				<!-- row -->
				<div class="row">	
					@yield('content')
				</div>
				<!-- /row -->

				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
@endsection