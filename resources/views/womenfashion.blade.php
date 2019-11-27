@extends('layouts.site')

@section('content')

<div class="page-large-title">
		<div class="container">
			<h1 class="title">Women Fashion</h1>
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="{{ url('/')}}">Home</a> / <span>Women Fashion</span>
			</nav>
		</div><!-- .container -->
	</div><!-- .page-large-title -->
	
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-xs-12 section-common">
				<a href="#" class="light-effect adv-main-content"><img src="http://placehold.it/870x370" alt=""></a>
				
				<div class="products row row-inline-block text-center">
                    @foreach($products as $product)
                    @if($product->category->status==1)
					<div class="col-md-4 col-sm-6 col-ip-6 col-xs-12">
						<div class="product-grid">
							<div class="thumb">
								<a style="width:270px; max-height:350px;" href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="">
									<ul class="attribute-list">
										<li><span class="label-coral">New</span></li>
									</ul>
								</a>
								<a href="{{url('/product-detail',$product->id)}}" class="add_to_cart_button">Add to cart</a>
							</div>
							<a href="{{url('/product-detail',$product->id)}}" class="content">
								<h2 class="title">{{$product->p_name}}</h2>
								<span class="category">Women</span>
								<span class="price">
									<span class="amount">${{$product->price}}</span>
								</span>
								<div class="star-rating">
									<span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
								</div>
							</a>
						</div>
					</div><!-- product -->
                     @endif
                    @endforeach 
					
				</div><!-- products -->
				{{ $products->render()}}
			</div><!-- col -->
			<div class="col-md-3 col-xs-12 section-common sidebar">
			
				<aside class="widget widget_search">
					<form action="#" class="searchform">
						<input type="search" class="inp-search" placeholder="Search for something">
						<input type="submit" class="btn-search" value="Search">
					</form>
				</aside><!-- .widget_search -->
				
				<aside class="widget widget_categories">
					<!-- <h2 class="widget-title section-title">Categories</h2> -->
					<div class="clear"></div>
                    @include('frontEnd.layouts.category_menu')
				</aside><!-- .widget_categories -->
				
				<aside class="widget widget-price-filter js__slider_price_wrap">
					<h2 class="widget-title section-title">Filter By Price</h2>
					<div class="clear"></div>
					<div class="filter-slider js__slider_price" data-output="yes" data-min="0" data-max="200" data-start="25" data-end="85" data-currency="$"></div>
					<form action="#" class="clearfix">
						<div class="filter-label">Price: <span>$0</span> <span>-</span> <span>$200</span></div>
						<input type="hidden" value="25" name="min" class="js__input_min" />
						<input type="hidden" value="85" name="max" class="js__input_max" />
						<input type="submit" class="filter-submit" value="Filter" />
					</form>
				</aside><!-- .widget-price-filter -->
				
				<aside class="widget widget_categories">
					<h2 class="widget-title section-title">Select a brand</h2>
					<div class="clear"></div>
					<ul>
						<li><a href="#">Adidas</a> (999)</li>
						<li><a href="#">Antony Morato</a> (216)</li>
						<li><a href="#">Armani jeans</a> (312)</li>
						<li><a href="#">Boss</a> (157)</li>
					</ul>
				</aside><!-- .widget_categories -->
				
				<aside class="widget widget-images">
					<a href="#" class="light-effect"><img src="http://placehold.it/271x360" alt="" />advertisement</a>
				</aside><!-- .widget-images -->
				
			</div><!-- col -->
			<div class="col-xs-12 section-common section-last">
				<div class="row">
					<div class="col-sm-4">
						<a href="#" class="item-service-2 red-style light-effect">
							<h2 style="color:#fff" class="title">Free Shipping</h2>
							<p class="desc">We free Shipping on all orders over $49</p>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="#" class="item-service-2 green-style light-effect">
							<h2 style="color:#fff" class="title">Fast Delivery</h2>
							<p class="desc">You’ll receive your orders in less than 3 days</p>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="#" class="item-service-2 yellow-style light-effect">
							<h2 style="color:#fff" class="title">24/7 Customer Service</h2>
							<p class="desc">Support department professional & friendly</p>
						</a>
					</div>
				</div>
			</div><!-- col -->
		</div><!-- .row -->
	</div><!-- .container -->

@endsection