@extends('layouts.site')

@section('content')

<!-- BREADCRUMBS -->
<div class="page-large-title">
		<div class="container">
			<h1 class="title">Blog List </h1>
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="{{ url('/')}}">Home</a> / <a href="{{ route('blog')}}">Blog</a> 
			</nav>
		</div><!-- .container -->
	</div><!-- .page-large-title -->
	
	<div class="container">
		@foreach($errors->all() as $err)
			<li>{{ $err }}</li>
		@endforeach
	
		@if(Session::has('success'))
			<p class="alert alert-success">{{ Session::get('success') }}</p>
		@endif
		@if(Session::has('error'))
			<p class="alert alert-danger">{{ Session::get('error') }}</p>
		@endif
		<div class="row">
			<div class="col-md-9 col-xs-12 section-common">
				<ul class="blog-list">
				@foreach($blogg as $blogs)
					<li>
						<div class="item-blog-list">
							<a href="{{ url('read',$blogs->id) }}" class="thumb light-effect"><img style="width:400px; max-width:400px; height:250px; max-height:250px" src="{{asset('images/'.$blogs->image)}}" alt="" ></a>
							<div class="content">
								<h2 class="title"><a href="{{ url('read',$blogs->id) }}">{{$blogs->title}}</a></h2>
								<div class="post-meta">
									By {{ $blogs->postby }} <span class="split">/</span> {{ $blogs->date }} <span class="split">/</span> {{$blogs->created_at->diffForHumans()}}   
								</div>
								<p class="desc">{!! str_limit($blogs->body, $limit = 120, $end = '...') !!}</p>
								<a href="{{ url('read',$blogs->id) }}" class="readmore">READ MORE <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div><!-- .item-blog-list -->
					</li>
					@endforeach					
				</ul><!-- .blog-list -->
				{{ $blogg->render()}}
				<!-- <span href="#" class="btn-ajax-loading"><i class="fa fa-refresh"></i> <span>LOAD MORE OUR BLOG ...</span></a> -->
			</div><!-- col -->
			<div class="col-md-3 col-xs-12 section-common sidebar">
				
				<aside class="widget widget_search">
					<form action="#" class="searchform">
						<input type="search" class="inp-search" placeholder="Search for something">
						<input type="submit" class="btn-search" value="Search">
					</form>
				</aside><!-- .widget_search -->
				
				<aside class="widget widget_categories">
					<h2 class="widget-title section-title">Categories</h2>
					<div class="clear"></div>
					<ul>
						<li><a href="#">All</a> (999)</li>
						<li><a href="#">Accessories</a> (216)</li>
						<li><a href="#">Shorts</a> (312)</li>
						<li><a href="#">Dress</a> (157)</li>
						<li><a href="#">Shoes</a> (101)</li>
						<li><a href="#">Clothes</a> (98)</li>
						<li><a href="#">New collection</a> (76)</li>
						<li><a href="#">T-shirt</a> (39)</li>
					</ul>
				</aside><!-- .widget_categories -->
				
				<aside class="widget widget_recent_post">
					<h2 class="widget-title section-title">Recent Post</h2>
					<div class="clear"></div>
					<ul>
						<li>
							<a href="#" class="item-recent-post">
								<span class="thumb"><img src="http://placehold.it/80" alt=""></span>
								<h2 class="title">The First Simple post</h2>
								<span class="post-date">30 Apr, 2016</span>
							</a>
						</li>
						<li>
							<a href="#" class="item-recent-post">
								<span class="thumb"><img src="http://placehold.it/80" alt=""></span>
								<h2 class="title">Winter collection for women</h2>
								<span class="post-date">30 Apr, 2016</span>
							</a>
						</li>
						<li>
							<a href="#" class="item-recent-post">
								<span class="thumb"><img src="http://placehold.it/80" alt=""></span>
								<h2 class="title">Gallery Spring Fashion 2015</h2>
								<span class="post-date">30 Apr, 2016</span>
							</a>
						</li>
					</ul>
				</aside><!-- .widget_recent_post -->
				
				<aside class="widget widget_categories">
					<h2 class="widget-title section-title">Archives</h2>
					<div class="clear"></div>
					<ul>
						<li><a href="#">May</a> (15)</li>
						<li><a href="#">April</a> (32)</li>
						<li><a href="#">March</a> (12)</li>
						<li><a href="#">February</a> (22)</li>
						<li><a href="#">January</a> (42)</li>
						<li><a href="#">December</a> (9)</li>
					</ul>
				</aside><!-- .widget_categories -->
				
				<aside class="widget widget_instagram">
					<h2 class="widget-title section-title">Instagram</h2>
					<div class="clear"></div>
					<ul>
						<li><a href="#"><img src="http://placehold.it/83" alt=""></a></li>
						<li><a href="#"><img src="http://placehold.it/83" alt=""></a></li>
						<li><a href="#"><img src="http://placehold.it/83" alt=""></a></li>
						<li><a href="#"><img src="http://placehold.it/83" alt=""></a></li>
						<li><a href="#"><img src="http://placehold.it/83" alt=""></a></li>
						<li><a href="#"><img src="http://placehold.it/83" alt=""></a></li>
						<li><a href="#"><img src="http://placehold.it/83" alt=""></a></li>
						<li><a href="#"><img src="http://placehold.it/83" alt=""></a></li>
						<li><a href="#"><img src="http://placehold.it/83" alt=""></a></li>
					</ul>
				</aside><!-- .widget_categories -->
				
			</div><!-- col -->
		</div><!-- .row -->
	</div><!-- .container -->

@endsection