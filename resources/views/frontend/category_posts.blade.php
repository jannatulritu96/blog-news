@extends('frontend.layouts.master')
@section('content')
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Category Posts</h2>
						</div>
					</div>
							<!-- post -->
					@foreach($posts as $post)
					<div class="col-md-12">
						<div class="post post-row">
							<a class="post-img" href="{{ route('details',$post->id) }}"><img src="{{ asset($post->image) }}" alt=""></a>
						<div class="post-body">
							<div class="post-meta">
								<a class="post-category cat-3" href="category.html">{{ $post->relCategory->name }}</a>
								<span class="post-date">{{ date('d M Y',strtotime($post->published_date)) }}</span>
						</div>
							</div>
								<h3 class="post-title"><a href="blog-post.html">{{ $post->title }}</a></h3>
								<p>{{ $post->short_description }}</p>
								</div>
					</div>
							<!-- /post -->
				</div>
						@endforeach
				</div>
					<div class="col-md-4">
						 @include('frontend._mostReadAndFeatured')
					</div>
				</div>
@endsection