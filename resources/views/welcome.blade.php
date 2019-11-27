@extends('layouts.site')

@section('content')

<div class="section-images-grids section-common">
		<div class="container">
			<div class="row text-center item-images">
				<div class="col-sm-6 item-image"><a href="#" class="light-effect"><img style="width:570px; max-width:570px; height:505px; max-height:505px" src="../asset/images/s1.jpg" alt=""></a></div>
				<div class="col-sm-6 item-image"><a href="#" class="light-effect"><img style="width:570px;  max-width:570px; height:505px; max-height:505px" src="../asset/images/s4.jpg" alt=""></a></div>
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.section-images-grids -->
	
	<div class="section-common section-services">
		<div class="container">
			<ul class="row margin-top--30">
				<li class="col-md-4">
					<a href="#" class="item-service">
						<i class="fa fa-truck thumb"></i>
						<h2 class="title">Free Shipping</h2>
						<p>We free Shipping on all orders over $49 on the world</p>
					</a>
				</li><!--- .col -->
				<li class="col-md-4">
					<a href="#" class="item-service">
						<i class="fa thumb fa-clock-o"></i>
						<h2 class="title">Fast Delivery</h2>
						<p>You will receive your orders in less than 3 days</p>
					</a>
				</li><!--- .col -->
				<li class="col-md-4">
					<a href="#" class="item-service">
						<i class="fa thumb fa-users"></i>
						<h2 class="title">24/7 Services</h2>
						<p>We have a support department professional and friendly</p>
					</a>
				</li><!--- .col -->
			</ul><!--- .row -->
		</div><!--- .container -->
	</div><!--- .section-services -->
	
	<div class="section-featured-product section-common">
		<div class="container tab-product-wrap js__tab">
			<ul class="tab-controls">
				<li id="featured"><a href="#" class="js__tab_control js__active">Featured</a></li>
				<li id="bestseller"><a href="#" class="js__tab_control">Best Seller</a></li>
				<li id="toprated"><a href="#" class="js__tab_control">Top Rated</a></li>
			</ul><!--- .tab-controls -->
			<div class="tab-contents">
				<div class="tab-content js__tab_content js__active">
					<div class="slick-wrap">
						<div class="products products-grid slick-middle-arrow js__slickslider" data-arrows="true" data-dots="false" data-show="4" data-responsive="{'992':2,'650':1}">
						@foreach($products as $product)
                            @if($product->category->status==1)
							<div class="slick-slide">
								<div class="product-grid">
									<div class="thumb">
										<a href="{{url('/product-detail',$product->id)}}"><img style="width:270px; max-height:350px" src="{{url('products/medium/',$product->image)}}" alt="OlexStores_product"></a>
										<!-- <ul class="controls">
											<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
											<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
											<li><a href="{{url('/product-detail',$product->id)}}" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
										</ul> -->
									</div>
									<a href="#" class="content">
										<h2 class="title">{!! str_limit($product->p_name, $limit=20) !!}</h2>
										<span class="category">{{$product->p_color}}</span>
										<span class="price">
											<span class="amount">${{$product->price}}</span>
										</span>
									</a>
								</div>
							</div><!-- product -->
							@endif
                        @endforeach
						</div>	
					</div><!-- .slick-wrap -->
				</div><!--- .tab-content -->
				<div class="tab-content js__tab_content">
					<div class="slick-wrap">
						<div class="products products-grid slick-middle-arrow js__slickslider" data-arrows="true" data-dots="false" data-show="4" data-responsive="{'992':2,'650':1}">
                        @foreach($bestseller as $pro)
                            @if($product->category->status==1)
							<div class="slick-slide">
								<div class="product-grid">
									<div class="thumb">
										<a href="{{url('/product-detail',$pro->id)}}"><img style="width:270px; max-height:350px" src="{{url('products/medium/',$pro->image)}}" alt="">
											<ul class="attribute-list">
												<li><span class="label-coral">New</span></li>
												<li><span class="label-red">Sale</span></li>
											</ul>
										</a>
										<ul class="controls">
											<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
											<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
											<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
										</ul>
										<a href="#" class="add_to_cart_button">Add to cart</a>
									</div>
									<a href="{{url('/product-detail',$pro->id)}}" class="content">
										<h2 class="title">{!! str_limit($pro->p_name, $limit=20) !!}</h2>
										<span class="category">{{$pro->p_color}}</span>
										<span class="price">
											<del><span class="amount">${{$pro->price}}</span></del>
											<ins><span class="amount">${{$pro->price}}</span></ins>
										</span>
									</a>
								</div>
							</div><!-- product -->
                            @endif
                        @endforeach
						</div><!-- .products -->
					</div><!-- .slick-wrap -->
				</div><!--- .tab-content -->
				<div class="tab-content js__tab_content">
                @foreach($toprated as $prod)
                            @if($product->category->status==1)
					<div class="slick-wrap">
						<div class="products products-grid slick-middle-arrow js__slickslider" data-arrows="true" data-dots="false" data-show="4" data-responsive="{'992':2,'650':1}">
							<div class="slick-slide">
								<div class="product-grid">
									<div class="thumb">
										<a href="{{url('/product-detail',$prod->id)}}"><img style="width:270px; max-height:350px" src="{{url('products/medium/',$prod->image)}}" alt="">
											<ul class="attribute-list">
												<li><span class="label-red">-30%</span></li>
											</ul>
										</a>
										<ul class="controls">
											<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
											<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
											<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
										</ul>
										<a href="#" class="add_to_cart_button">Add to cart</a>
									</div>
									<a href="{{url('/product-detail',$prod->id)}}" class="content">
										<h2 class="title">{!! str_limit($prod->p_name, $limit=20)  !!}</h2>
										<span class="category">{{$prod->p_color}}</span>
										<span class="price">
											<span class="amount">${{$prod->price}}</span>
										</span>
										<div class="star-rating">
											<span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
										</div>
									</a>
								</div>
							</div><!-- product -->
					</div><!--- .slick-wrap -->
					</div><!--- .slick-wrap -->
                    
                    @endif
                        @endforeach
				</div><!--- .tab-content -->
			</div><!--- .tab-contents -->
		</div><!--- .tab-product-wrap -->
	</div><!--- .section-featured-product -->
	
	<div class="section-adv section-common">
		<div class="container">
			<div class="row margin-top--30">
				<div class="col-md-4">
					<a href="{{ url('women-fashion')}}" class="item-adv">
					@foreach(App\Products_model::where('categories_id',12)->inRandomOrder()->limit(1)->get() as $prodn)
						<img class="thumb" style="width:100px; height:162px" src="{{url('products/medium/',$prodn->image)}}" alt="">
					@endforeach	
						<div class="content">
							<h2 style="font-size:" class="rose-color">Women’s Store</h2>
							<p>Lorem ipsum dolor sit amet elite</p>
							<span class="btn-common btn-border-rose">SHOP NOW</span>
						</div>
					</a><!--- .item-adv -->
				</div><!--- .col -->
				<div class="col-md-4">
					<a href="{{ url('men-fashion')}}" class="item-adv">
					@foreach(App\Products_model::where('categories_id',10)->inRandomOrder()->limit(1)->get() as $prod)
						<img class="thumb" style="width:115px; height:162px" src="{{url('products/medium/',$prod->image)}}" alt="">
					@endforeach	
						<div class="content">
							<h2 style="color:magento; font-size:" class="magento-color">Men’s Store</h2>
							<p>Lorem ipsum dolor sit amet elite</p>
							<span class="btn-common btn-border-magento">SHOP NOW</span>
						</div>
					</a><!--- .item-adv -->
				</div><!--- .col -->
				<div class="col-md-4">
					<a href="{{ url('kids-fashion')}}" class="item-adv">
					@foreach(App\Products_model::where('categories_id',11)->inRandomOrder()->limit(1)->get() as $pro)
						<img class="thumb" style="width:100px; height:162px" src="{{url('products/medium/',$pro->image)}}" alt="">
					@endforeach	
						<div class="content">
							<h2 style="color:yellow; font-size:" class="yellow-color">Kid’s Store</h2>
							<p>Lorem ipsum dolor sit amet elite</p>
							<span class="btn-common btn-border-yellow">SHOP NOW</span>
						</div>
					</a><!--- .item-adv -->
				</div><!--- .col -->
			</div><!--- .row -->
		</div><!--- .container -->
	</div><!--- .section-adv -->
	
	<div class="section-isotope-product section-common tab-product-wrap">
		<div class="container js__filter_isotope">
			<h2 class="section-title">New Arrivals</h2>
			<ul class="tab-controls">
				<li><a href="#" class="js__filter_control js__active" data-filter="*">All</a></li>
				<li><a href="#" class="js__filter_control" data-filter=".women">Women</a></li>
				<li><a href="#" class="js__filter_control" data-filter=".men">Men</a></li>
				<li><a href="#" class="js__filter_control" data-filter=".kid">Kid</a></li>
			</ul>
			<div class="clear"></div>
			<div class="products products-grid row row-inline-block js__isotope_items">
            @foreach($newarrival as $prodn)
                @if($product->category->status==1)
				<div class="col-md-3 col-sm-6 col-ip-6 col-xs-12 js__isotope_item *">
					<div class="product-grid">
						<div class="thumb">
							<a href="{{url('/product-detail',$prodn->id)}}"><img style="width:270px; max-height:350px" src="{{url('products/medium/',$prodn->image)}}" alt="">
								<ul class="attribute-list">
									<li><span class="label-coral">New</span></li>
									<li><span class="label-red">Sale</span></li>
								</ul>
							</a>
							<ul class="controls">
								<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
								<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
								<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
							</ul>
							<a href="#" class="add_to_cart_button">Add to cart</a>
						</div>
						<a href="{{url('/product-detail',$prodn->id)}}" class="content">
							<h2 class="title">{!! str_limit($prodn->p_name, $limit=20) !!}</h2>
								<span class="category">{{$prodn->p_color}}</span>
								<span class="price">
									<del><span class="amount">${{$prodn->price}}</span></del>
									<ins><span class="amount">${{$prodn->price}}</span></ins>
								</span>
						</a>
					</div>
				</div><!-- product -->
                @endif
                    @endforeach
                    
                @foreach($women as $wp)
                @if($product->category->status==1)
				<div class="col-md-3 col-sm-6 col-ip-6 col-xs-12 js__isotope_item women">
					<div class="product-grid">
						<div class="thumb">
							<a href="{{url('/product-detail',$wp->id)}}"><img style="width:270px; max-height:350px" src="{{url('products/medium/',$wp->image)}}" alt=""></a>
							<ul class="controls">
								<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
								<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
								<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
							</ul>
							<a href="#" class="add_to_cart_button">Add to cart</a>
						</div>
						<a href="{{url('/product-detail',$wp->id)}}" class="content">
							<h2 class="title">{!! str_limit($wp->p_name, $limit=20) !!}</h2>
							<span class="category">{{$wp->p_color}}</span>
							<span class="price">
								<span class="amount">${{$wp->price}}</span>
							</span>
						</a>
					</div>
				</div><!-- product -->
                @endif
                    @endforeach

                @foreach($men as $wp)
                @if($product->category->status==1)
				<div class="col-md-3 col-sm-6 col-ip-6 col-xs-12 js__isotope_item men">
					<div class="product-grid">
						<div class="thumb">
							<a href="{{url('/product-detail',$wp->id)}}"><img style="width:270px; max-height:350px" src="{{url('products/medium/',$wp->image)}}" alt=""></a>
							<ul class="controls">
								<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
								<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
								<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
							</ul>
							<a href="#" class="add_to_cart_button">Add to cart</a>
						</div>
						<a href="{{url('/product-detail',$wp->id)}}" class="content">
							<h2 class="title">{!! str_limit($wp->p_name, $limit=20) !!}</h2>
							<span class="category">{{$wp->p_color}}</span>
							<span class="price">
								<span class="amount">${{$wp->price}}</span>
							</span>
						</a>
					</div>
				</div><!-- product -->
                @endif
                    @endforeach

                @foreach($kids as $wp)
                @if($product->category->status==1)
				<div class="col-md-3 col-sm-6 col-ip-6 col-xs-12 js__isotope_item kid">
					<div class="product-grid">
						<div class="thumb">
							<a href="{{url('/product-detail',$wp->id)}}"><img style="width:270px; max-height:350px" src="{{url('products/medium/',$wp->image)}}" alt=""></a>
							<ul class="controls">
								<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
								<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
								<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
							</ul>
							<a href="#" class="add_to_cart_button">Add to cart</a>
						</div>
						<a href="{{url('/product-detail',$wp->id)}}" class="content">
							<h2 class="title">{!! str_limit($wp->p_name, $limit=20) !!}</h2>
							<span class="category">{{$wp->p_color}}</span>
							<span class="price">
								<span class="amount">${{$wp->price}}</span>
							</span>
						</a>
					</div>
				</div><!-- product -->
                @endif
                    @endforeach
			</div><!-- .products -->
			<a href="#" class="btn-ajax-loading style--2"><i class="fa fa-refresh"></i> <span>View more (2.450 products) ...</span></a>
		</div><!--- .container -->
	</div><!--- .section-isotope-product -->
	
	<div class="section-common">
		<div class="container"><a href="#" class="light-effect"><img style="width:1170px; max-width:1170px; height:252px; max-height:252px" src="../asset/images/s6.jpg" alt=""></a></div>
	</div><!--- .section-common -->
	
	<div class="section-common">
		<div class="container">
			<h2 class="section-title">Accessories</h2>
			<div class="clear"></div>
			<div class="slick-wrap">
				<div class="products products-grid slick-top-arrow js__slickslider" data-arrows="true" data-dots="false" data-show="4" data-responsive="{'992':2,'650':1}">
				@foreach($accessories as $wpp)
                @if($product->category->status==1)
					<div class="slick-slide">
						<div class="product-grid">
							<div class="thumb">
								<a href="{{url('/product-detail',$wpp->id)}}"><img style="width:270px; max-height:350px" src="{{url('products/medium/',$wp->image)}}" alt="olex-stores"></a>
								<ul class="controls">
									<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
									<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
									<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
								</ul>
							</div>
							<a href="{{url('/product-detail',$wpp->id)}}" class="content">
								<h2 class="title">{!! str_limit($wpp->p_name, $str_limit=20 ) !!}</h2>
								<span class="category">{{$wpp->p_color}}</span>
								<span class="price">
									<span class="amount">${{$wpp->price}}</span>
								</span>
							</a>
						</div>
					</div><!-- product -->
					@endif
                    @endforeach
					
				</div><!-- .products -->
			</div><!-- .slick-wrap -->
		</div><!--- .container -->
	</div><!--- .section-deal-product -->
	
	<div class="container">
		<div class="row row-inline-block">
			<div class="col-md-6 col-xs-12">
				<div class="section-logos section-common">
					<h2 class="section-title">Our Brands</h2>
					<div class="clear"></div>
					<div class="slick-wrap">
						<div class="slides js__slickslider slick-middle-arrow" data-show="3" data-arrows="false" data-dots="true" data-responsive="{'992': 4,'660' : 3,'460': 2,'300':1}">
							<div class="slick-slide"><a href="#" class="item-logo"><img src="assets/images/no-logo-thumb.png" alt=""></a></div>
							<div class="slick-slide"><a href="#" class="item-logo"><img src="assets/images/no-logo-thumb.png" alt=""></a></div>
							<div class="slick-slide"><a href="#" class="item-logo"><img src="assets/images/no-logo-thumb.png" alt=""></a></div>
							<div class="slick-slide"><a href="#" class="item-logo"><img src="assets/images/no-logo-thumb.png" alt=""></a></div>
							<div class="slick-slide"><a href="#" class="item-logo"><img src="assets/images/no-logo-thumb.png" alt=""></a></div>
							<div class="slick-slide"><a href="#" class="item-logo"><img src="assets/images/no-logo-thumb.png" alt=""></a></div>
							<div class="slick-slide"><a href="#" class="item-logo"><img src="assets/images/no-logo-thumb.png" alt=""></a></div>
							<div class="slick-slide"><a href="#" class="item-logo"><img src="assets/images/no-logo-thumb.png" alt=""></a></div>
							<div class="slick-slide"><a href="#" class="item-logo"><img src="assets/images/no-logo-thumb.png" alt=""></a></div>
						</div>
					</div>
				</div><!-- .section-logos -->
			</div><!-- col -->
			<div class="col-md-6 col-xs-12">
				<div class="section-common section-quotes">
					<h2 class="section-title">Testimonial</h2>
					<div class="clear"></div>
					<div class="style-dark slick-wrap">
						<div class="slick-middle-arrow js__slickslider" data-show="1" data-arrows="false" data-dots="true">
						@foreach ($testimony as $t)
							<div class="slick-slide">
								<div class="item-quote item-dark">
									<img src="{{asset('images/'.$t->image)}}" width="85px" alt="" class="thumb">
									<p>{!! str_limit($t->testimony, $limit = 100, $end = '...') !!}</p>
									<div class="author">
										<span class="name">- {{$t->name}} -</span>
									</div>
									<div class="star-rating">
										<span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
									</div>
								</div><!--- .item-quote -->
							</div><!--- slide -->
							@endforeach
						</div><!--- slides -->
					</div><!--- .quotes-wrap -->
				</div><!--- .section-quotes -->
			</div><!-- col -->
					
			<div class="col-sm-6 col-xs-12">
				<div class="section-common">
					<a href="#" class="light-effect text-center">
						<img style="width:570px; max-width:570px; height:210px; max-height:210px" src="../asset/images/s2.jpg" alt="olexstores">
					</a>
				</div><!--- .section-common -->
			</div><!-- col -->
			<div class="col-sm-6 col-xs-12">
				<div class="section-common">
					<a href="#" class="light-effect text-center">
						<img style="width:570px; max-width:570px; height:210px; max-height:210px" src="../asset/images/s5.jpg" alt="olexstores">
					</a>
				</div><!--- .section-common -->
			</div><!-- col -->
		</div><!-- .row -->
	</div><!-- .container -->
	
	<div class="section-blog section-common section-last">
		<div class="container">
			<h2 class="section-title">Our Blog</h2>
			<div class="clear"></div>
			<div class="slick-wrap">
				<div class="slick-top-arrow js__slickslider" data-show="3" data-arrows="true" data-dots="false" data-responsive="{'992': 2 ,'650': 1}">
				@foreach($blog as $blogs)
					<div class="slick-slide">
						<a href="{{ url('read',$blogs->id) }}" class="item-blog-grid full-info text-left">
							<span class="thumb"><img style="width:370px; max-width:370px; height:202px; max-height:202px" src="{{asset('images/'.$blogs->image)}}" alt="" >
							</span>
							<h2 style="position:inherit; margin:0" class="title">{{$blogs->title}}</h2>
							<div class="post-meta">
								By {{ $blogs->postby }} / {{ $blogs->date }} / {{$blogs->created_at->diffForHumans()}}
							<!-- 28 comments    -->
							</div>
							<p class="desc">{!! str_limit($blogs->body, $limit = 80, $end = '...') !!}</p>
							<span class="readmore">READ MORE <i class="fa fa-long-arrow-right"></i></span>
						</a><!-- .item-blog-grid -->
					</div><!-- .slide -->
					@endforeach
				</div><!-- .slides -->
			</div><!-- .flexslider -->
		</div><!-- .container -->
	</div><!-- .section-blog -->
	

@endsection