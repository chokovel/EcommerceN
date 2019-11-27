<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Olex Stores</title>
	<link href="{{asset('frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('asset/styles/style.min.css')}}">
    <link href="{{asset('frontEnd/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/responsive.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('easyzoom/css/easyzoom.css')}}" />
	<style>
		#cart_items .cart_info {
			border: 1px solid #E6E4DF;
			margin-bottom: 50px !important;
			margin-top: 50px !important;
		}
		.page-large-title{
			margin-bottom: 50px !important;
		}
		
		.cart_menu{
			background-color:#37bc9b !important;
		}
		#cart_items .cart_info .table.table-condensed.total-result span{
			color:#37bc9b !important;
		}
		.header .middle .right-side>li>a .num {
			background-color:#37bc9b !important;
		}
		a#scrollUp {
			background-color:#37bc9b !important;
		}
		
	</style>
</head>

<body>
<div class="menumobile-navbar-wrapper">
	<nav class="menu-navbar menumobile-navbar js__menu_mobile">
		<div class="menumobile-close-btn js__menu_close">
			<span class="fa fa-times"></span> CLOSE
		</div>
		<div id="menu-mobile">
			<ul class="menu">
				<li class="current-menu-item menu-item-has-children"><a href="index.html">Home</a>
					<ul class="sub-menu">
						<li><a href="index.html">Home version 1</a></li>
						<li><a href="index-2.html">Home version 2</a></li>
						<li><a href="index-3.html">Home version 3</a></li>
						<li><a href="index-4.html">Home version 4</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a href="men-fashion.html">Men Fashion</a><span class="drop-down-icon js__menu_drop"></span>
					<ul class="sub-menu">
						<li class="menu-item-has-children">
							<a href="#">Clothing</a>
							<span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="#">Tops</a></li>
								<li><a href="#">T-shirts</a></li>
								<li><a href="#">Shorts</a></li>
								<li><a href="#">Coats & jackets</a></li>
								<li><a href="#">Jeans</a></li>
								<li><a href="#">Multi Packs Save</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Accessories</a>
							<span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="#">Watches</a></li>
								<li><a href="#">Hats</a></li>
								<li><a href="#">Shoes</a></li>
								<li><a href="#">Glasses</a></li>
								<li><a href="#">Shawls</a></li>
								<li><a href="#">Hand Bag</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Brand</a>
							<span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="#">Adidas</a></li>
								<li><a href="#">Antony Morato</a></li>
								<li><a href="#">Armani Jeans</a></li>
								<li><a href="#">Boss</a></li>
								<li><a href="#">Boom Bap</a></li>
								<li><a href="#">Gucci</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="women-fashion.html">Women Fashion</a>
					<span class="drop-down-icon js__menu_drop"></span>
					<ul class="sub-menu">
						<li class="menu-item-has-children">
							<a href="#">Clothing</a>
							<span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="#">Tops</a></li>
								<li><a href="#">T-shirts</a></li>
								<li><a href="#">Shorts</a></li>
								<li><a href="#">Coats & jackets</a></li>
								<li><a href="#">Jeans</a></li>
								<li><a href="#">Multi Packs Save</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Accessories</a>
							<span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="#">Watches</a></li>
								<li><a href="#">Hats</a></li>
								<li><a href="#">Shoes</a></li>
								<li><a href="#">Glasses</a></li>
								<li><a href="#">Shawls</a></li>
								<li><a href="#">Hand Bag</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Brand</a>
							<span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="#">Adidas</a></li>
								<li><a href="#">Antony Morato</a></li>
								<li><a href="#">Armani Jeans</a></li>
								<li><a href="#">Boss</a></li>
								<li><a href="#">Boom Bap</a></li>
								<li><a href="#">Gucci</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="kid-fashion.html">Kid Fashion</a>
					<span class="drop-down-icon js__menu_drop"></span>
					<ul class="sub-menu">
						<li class="menu-item-has-children">
							<a href="#">Clothing</a>
							<span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="#">T-shirts</a></li>
								<li><a href="#">Shorts</a></li>
								<li><a href="#">Dresses</a></li>
								<li><a href="#">Trousers</a></li>
								<li><a href="#">Heeled Sandals</a></li>
								<li><a href="#">Flat Sandals</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#">Accessories</a>
							<span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="#">Sunglasses</a></li>
								<li><a href="#">Scarves</a></li>
								<li><a href="#">Belts</a></li>
								<li><a href="#">Scarfs</a></li>
								<li><a href="#">Bags</a></li>
								<li><a href="#">Purses</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="#">Pages</a>
					<span class="drop-down-icon js__menu_drop"></span>
					<ul class="sub-menu">
						<li><a href="about-us.html">About Us</a></li>
						<li class="menu-item-has-children"><a href="shop-grid.html">Shop</a>
							<span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="shop-grid.html">Shop Grid</a></li>
								<li><a href="shop-list-with-left-sidebar.html">Shop list with left sidebar</a></li>
								<li><a href="shop-three-column.html">Shop three column</a></li>
								<li><a href="product-detail.html">Product Detail</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="blog-grid.html">Blog</a><span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="blog-grid.html">Blog Grid</a></li>
								<li><a href="blog-list-with-right-sidebar.html">Blog list with right sidebar</a></li>
								<li><a href="blog-three-column.html">BLog three column</a></li>
								<li><a href="blog-detail.html">Blog Detail</a></li>
							</ul>
						</li>
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="shopping-cart.html">Shopping Cart</a></li>
						<li><a href="wishlist.html">Wishlist</a></li>
						<li class="menu-item-has-children"><a href="contact-us-v1.html">Contact</a><span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="contact-us-v1.html">Contact Us Version 1</a></li>
								<li><a href="contact-us-v2.html">Contact Us Version 2</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="404.html">404</a><span class="drop-down-icon js__menu_drop"></span>
							<ul class="sub-menu">
								<li><a href="404.html">404 Version 1</a></li>
								<li><a href="404-02.html">404 Version 2</a></li>
								<li><a href="404-03.html">404 Version 3</a></li>
							</ul>
						</li>
					</ul>
				</li><!--/. simple-menu -->
				<li><a href="#">Contact us</a></li>
			</ul><!--/.menu -->
		</div><!--/#menu- -navbar -->
	</nav>
</div><!--/.menu- -navbar-wrapper -->
<div class="mobile-sticky js__menu_sticky">
	<div class="container">
		<div class="left-side">
			<a href="index.html" class="logo"><img src="../asset/images/logo.png" alt=""></a>
		</div>
		<div class="right-side">
			<button type="button" class="menumobile-toggle js__menu_toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
	</div>
</div>
<div id="wrapper">
	<header class="header with-border">
		<div class="top dark-style">
			<div class="container">
				<div class="left-side">
					<div class="drop-down-wrap drop-down-language js__mobile_drop_down">
						<div class="drop-down-current">
							<a href="#"><img src="../asset/images/icon-flag-1.jpg" alt=""><i class=" fa fa-phone "></i><span>+234 907 866 3355</span></a>
							
						</div><!--/.drop-down-current -->
					</div><!--/.drop-down-wrap -->
					
					<div class="drop-down-wrap js__mobile_drop_down">
						<div class="drop-down-current">
							<a href="mailto:support@olexstores.com"><i class=" fa fa-envelope "></i><span>support@olexstores.com</span></a>
							
						</div><!--/.drop-down-current -->
					</div><!--/.drop-down-wrap -->
					
				</div><!--/.left-side -->
				<div class="right-side">
				
					<ul class="menu">
						<li><a href="wishlist.html">My Wishlist</a></li>
						<li><a href="checkout.html">Checkout</a></li>
						@if(Auth::check())
						<li><a href="{{url('/myaccount')}}">My Account</a></li>
						<li><a href="{{ url('/logout') }}">Logout</a></li>
						@else
						<li><a href="{{url('/login_page')}}">Login</a></li>
						@endif
					</ul>
					
				</div><!--/.right-side -->
			</div><!--/.container -->
		</div><!--/.top -->
		<div class="container">
			<div class="middle middle-ver-2">
				<a href="index.html" class="logo"><img src="../asset/images/logo.png" alt=""></a>
				<div class="main-menu-wrap-2">
					<div class="main-menu-wrap js__auto_correct_sub_menu">
						<ul class="menu">
							<li class="current-menu-item"><a href="{{ url('/')}}">Home</a></li>
							<li class="menu-item-has-children mega-menu-wrap"><a href="men-fashion.html">Olex Stores</a>
								<div class="mega-menu">
								<?php
									$categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
								?>
									<div class="row">
										<div class="col-md-8">
											<div class="row">
											@foreach($categories as $category)
											<?php
												$sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
											?>
												<div class="col-md-4">
													<h3 class="title"><a href="{{route('cats',$category->id)}}">{{$category->name}}</a></h3>

												</div><!--/col -->
												@endforeach	
												
											</div><!--/.row -->
										</div><!--col -->
										<div class="col-md-4">
											<div class="adv">
												<ul class="row">
													<li class="col-xs-12">
														<a href="#" class="button-adv">Collection 2020</a>
													</li>
													<li class="col-xs-6">
														<a href="#"><img src="../asset/images/studio11.jpg" alt=""></a>
													</li>
													<li class="col-xs-6">
														<a href="#"><img src="../asset/images/s2.jpg" alt=""></a>
													</li>
												</ul>
											</div>
										</div><!--col -->
									</div><!--/.row -->
								</div><!--/.menu-mega -->
							</li>
							<li><a href="{{ url('about')}}">About Us</a></li>
							<li><a href="{{ route('blog')}}">Blog</a></li>
							<li><a href="{{ url('contact')}}">Contact us</a></li>
						</ul><!--/.menu -->
					</div><!--/.main-menu-wrap -->
				</div><!--/.main-menu-wrap-2 -->
				<ul class="right-side">
					<li class="js__drop_down search-toggle">
						<a href="#" class="fa fa-search js__drop_down_button"></a>
						<div class="search-container">
							<form action="#">
								<input type="search" class="inp-search" placeholder="Enter keyword...">
								<button type="submit" class="btn-submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</li>
					<li class="user-wrap"><a href="#" class="fa fa-user"></a></li>
					
					<li class="js__drop_down cart-list-wrap">
					<?php
							$session_id=Session::get('session_id');
							$cart_datas=App\Cart_model::where('session_id',$session_id)->get();
							$total_price=0;
							foreach ($cart_datas as $cart_data){
								$total_price+=$cart_data->price*$cart_data->quantity;
							}
						?>
						<a href="#" class="fa fa-shopping-cart js__drop_down_button"><span class="num">{{ count($cart_datas)}}</span></a>

						<div class="cart-list-container">
							<div class="cart-list-content">
								<ul class="cart-list">
								@foreach($cart_datas as $cart_data)
								<?php
									$image_products=DB::table('products')->select('image')->where('id',$cart_data->products_id)->get();
								?>
									<li>
									@foreach($image_products as $image_product)
										<a class="thumb" href="#"><img src="{{url('products/small',$image_product->image)}}" width="70px" alt="" class="attachment-shop_thumbnail"></a>
									@endforeach
										<a href="#" class="title">{{$cart_data->product_name}}</a>
										<span class="quantity">
											<span class="amount">${{$cart_data->price}}</span> x {{$cart_data->quantity}}
										</span>
										<div class="star-rating">
											<span class="js__width" data-width="100%"><strong class="rating">4.00</strong> out of 5</span>
										</div>
										<a title="Remove this item" class="mini-cart-remove" href="#"><span class="fa fa-times"></span></a>
									</li>
									@endforeach	
								</ul><!--/.cart-list -->
								<div class="cart-list-subtotal">
									<strong class="txt fl">SubTotal:</strong>
									<strong class="currency fr">$ {{$total_price}}</strong>
								</div><!--/.cart-list-subtotal -->
							</div><!--/.cart-list-content -->
							<a class="cart-list-bottom" href="{{ url('viewcart')}}">
								<span class="fl">Checkout</span>
								<span class="fr"><i class="fa fa-long-arrow-right"></i></span>
							</a><!--/.cart-list-bottom -->
						</div><!--/.cart-list-container -->
					</li>
					<li class="menumobile-toggle-wrap">
						<button type="button" class="menumobile-toggle js__menu_toggle">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</li>
				</ul><!--/.right-side -->
			</div><!--/.middle -->
		</div><!--/.container -->
	</header><!--/.header -->
		
	@yield('content')
	
	<div class="section-common section-subscribe fixed-wrapper">
		<div style=" background-repeat:no-repeat; background-size:cover;"  class="background js__background_image js__parallax" data-background-image="url(../asset/images/s4.jpg)"></div>
		<div class="container">
			<form class="subscribe-form" action="{{ route('newsletter.store') }}" class="join-form" method="POST" enctype="multipart/form-data">
				@csrf
					@foreach($errors->all() as $err)
						<li>{{ $err }}</li>
					@endforeach
					@if(Session::has('success'))
						<p class="alert alert-success">{{ Session::get('success') }}</p>
					@endif
					@if(Session::has('error'))
						<p class="alert alert-danger">{{ Session::get('error') }}</p>
					@endif
				<h2 class="section-title">Subscribe</h2>
				<div class="clear"></div>
				<p>Get the last news & promotion program from us</p>
				<div class="inp-controls">
					<input type="email" name="email" class="inp-email" placeholder="ENTER YOUR EMAIL">
					<button type="submit" class="btn-submit"><span>SUBSCRIBE</span><i class="fa fa-long-arrow-right"></i></button>
				</div>
			</form><!-- .subscribe-form -->
		</div><!-- .container -->
	</div><!-- .section-subscribe -->
	<footer class="footer">
		<div class="container">
			<div class="top">
				<div class="row">
					<div class="col-md-2 col-sm-4">
						<div class="widget widget_nav_menu">
							<h3 class="title">Help</h3>
							<ul class="menu">
								<li><a href="#">Track order</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Refunds</a></li>
								<li><a href="mailto:support@olexstores.com">Support Online</a></li>
							</ul>
						</div>
					</div><!-- col -->
					<div class="col-md-2 col-sm-4">
						<div class="widget widget_nav_menu">
							<h3 class="title">Account</h3>
							<ul class="menu">
								<li><a href="#">My account</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Order history</a></li>
								<li><a href="#">My Favorites</a></li>
								<!-- <li><a href="#">Gift Vouchers</a></li>
								<li><a href="#">Specials</a></li> -->
							</ul>
						</div>
					</div><!-- col -->
					<div class="col-md-2 col-sm-4">
						<div class="widget widget_nav_menu">
							<h3 class="title">Quick Links</h3>
							<ul class="menu">
								<li><a href="#bestseller">Best Sellers</a></li>
								<li><a href="#featured">Featured Products</a></li>
								<li><a href="{{ url('list-products')}}">Hot Products</a></li>
								<li><a href="#toprated">Top Rated</a></li>
								<li><a href="{{url('blog')}}">Blog</a></li>
								<li><a href="{{ url('contact')}}">Contact Us</a></li>
							</ul>
						</div>
					</div><!-- col -->
					<div class="col-md-3 col-sm-6">
						<div class="widget widget_text">
							<h3 class="title">Contact Us</h3>
							<p>Please feel free to contact us if you have any question.</p>
							<ul class="contact-list">
								<li><a href="mailto:sale@amaza.com"><i class="fa fa-envelope-o"></i>support@olexstores.com</a></li>
								<li><a href="tel:064888999123"><i class="fa fa-phone"></i>+64 888 999 123</a></li>
								<li><i class="fa fa-map-marker"></i>22 Baywater Dr, Wentworth Point<br>Australia, WP 2127</li>
							</ul>
						</div>
					</div><!-- col -->
					<div class="col-md-3 col-sm-6">
						<div class="widget widget_subscribe">
							<h3 class="title">Newsletter Signup</h3>
							<p>Signup to get updates for your best choice for quality and affordable fashion wears</p>
							<form action="{{ route('newsletter.store') }}" class="join-form" method="POST" enctype="multipart/form-data">
							@csrf
                                    @foreach($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                    @endforeach
                            
                                    @if(Session::has('success'))
                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                    @endif
                                    @if(Session::has('error'))
                                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                    @endif
								<div class="form-controls">
									<input type="email" placeholder="Enter your email" name="email" class="inp-email">
									<input type="submit" value="Join" class="inp-submit">
									<i>We respect your privacy</i>
								</div>
							</form>
							<ul class="social-list">
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-linkedin"></a></li>
								<li><a href="#" class="fa fa-vimeo"></a></li>
								<li><a href="#" class="fa fa-pinterest-p"></a></li>
							</ul>
						</div>
					</div><!-- col -->
				</div><!-- .row -->
			</div><!-- .top -->
		</div><!-- .container -->
		<div class="bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="copyright">Made with love <i class="fa fa-heart"></i> 2019 <a href="#">OlexStores.</a> Designed by <a href="#">Chokovel</a></div>
					</div><!-- col -->
					<div class="col-sm-6">
						<ul class="payment-list">
							<li><a href="#"><img src="asset/images/payment1.jpg" alt=""></a></li>
							<li><a href="#"><img src="asset/images/payment2.jpg" alt=""></a></li>
							<li><a href="#"><img src="asset/images/payment3.jpg" alt=""></a></li>
							<li><a href="#"><img src="asset/images/payment4.jpg" alt=""></a></li>
							<li><a href="#"><img src="asset/images/payment5.jpg" alt=""></a></li>
							<li><a href="#"><img src="asset/images/payment6.jpg" alt=""></a></li>
						</ul>
					</div><!-- col -->
				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .bottom -->
	</footer><!--/.footer -->
</div><!--/#wrapper -->

<div id="quickViewPopup" class="popup js__popup">
	<div class="popup-overlay js__popup_close"></div>
	<div class="popup-body">
		<button type="button" class="popup-close-btn js__popup_close"><i class="fa fa-times"></i></button>
		<div class="container">
			<div class="popup-inside">
				<div class="row">
					<div class="col-md-12 clearfix">
						<h2 class="single-title-border-bottom">Quick view</h2>
					</div><!-- col -->
					<div class="col-md-5">
						<div class="product-detail">
							<div class="product">
								<div class="images js__gallery">
									<a href="#" class="woocommerce-main-image zoom js__zoom_popup" data-target="#zoomPopup" data-zoom="http://placehold.it/385x530">
										<img src="http://placehold.it/327x452" alt="" />
									</a><!-- .woocommerce-main-image -->
									<div class="thumbnails">
										<a href="#" class="zoom js__thumb" data-images="http://placehold.it/327x452" data-zoom="http://placehold.it/495x610" ><img src="http://placehold.it/76x97" alt="" /></a>
										<a href="#" class="zoom js__thumb" data-images="http://placehold.it/327x452" data-zoom="http://placehold.it/470x640" ><img src="http://placehold.it/76x97" alt="" /></a>
										<a href="#" class="zoom js__thumb js__active" data-images="http://placehold.it/327x452" data-zoom="http://placehold.it/385x530" ><img src="http://placehold.it/76x97" alt="" /></a>
										<a href="#" class="zoom js__thumb" data-images="http://placehold.it/327x452" data-zoom="http://placehold.it/448x427" ><img src="http://placehold.it/76x97" alt="" /></a>
									</div><!-- .thumbnails -->
									<div class="hidden">
										<img src="http://placehold.it/327x452" alt="" />
										<img src="http://placehold.it/327x452" alt="" />
										<img src="http://placehold.it/327x452" alt="" />
										<img src="http://placehold.it/327x452" alt="" />
									</div><!-- load images zone -->
								</div><!-- .images -->
							</div><!-- .product -->
						</div><!-- .product-detail -->
					</div><!-- col -->
					<div class="col-md-7">
						<div class="summary">
							<h2 class="product_title">Adios Fashion Girl</h2>
							<div class="summary-top">
								<div class="star-rating">
									<span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
								</div>
								<a href="#">Have 25 reviews</a> <span>/</span> <a href="#">Add your review</a>
							</div>
							<p class="price"><span class="amount">$49</span></p>
							<ul class="product_meta">
								<li><span>Brand:</span> Louis Vuitton</li>
								<li><span>Available:</span> In stock</li>
								<li><span>Product code:</span> ABC 123 456</li>
							</ul>
							<div class="description">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismo tincidunt ut laoreet dolore magna aliquam erat volutpat, feugiat nulla facilisis vero eros accumsan et iusto.</p>
							</div>
							<ul class="variants">
								<li class="variant-size">
									<span class="text">Size</span>
									<label class="lbl-variant"><input type="radio" name="radio-size" class="lbl-radio"><span class="lbl-text">S</span></label>
									<label class="lbl-variant"><input checked type="radio" name="radio-size" class="lbl-radio"><span class="lbl-text">M</span></label>
									<label class="lbl-variant"><input type="radio" name="radio-size" class="lbl-radio"><span class="lbl-text">L</span></label>
								</li>
								<li class="variant-color">
									<span class="text">Colors</span>
									<label class="lbl-variant"><input type="radio" name="radio-color" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#fea500"></span></label>
									<label class="lbl-variant"><input type="radio" name="radio-color" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#9fbedb"></span></label>
									<label class="lbl-variant"><input type="radio" name="radio-color" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#f3db06"></span></label>
									<label class="lbl-variant"><input type="radio" name="radio-color" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#00b261"></span></label>
								</li>
							</ul>
							<form class="cart">
								<div class="quantity js__number"><input type="number" class="js__target" value="1" /><button type="button" class="js__plus fa-plus fa"></button><button type="button" class="js__minus fa-minus fa"></button></div>
								<button type="submit" class="single_add_to_cart_button">Add to cart</button>
							</form>
						</div><!-- .summary -->
					</div><!-- col -->
				</div><!-- .row -->
			</div><!-- .popup-inside -->
		</div><!-- .container -->
	</div><!-- .popup-body -->
</div><!-- #quickViewPopup -->

<div id="zoomPopup" class="popup popup-images js__popup">
	<div class="popup-overlay js__popup_close"></div>
	<div class="popup-body">
		<button type="button" class="popup-close-btn js__popup_close"><i class="fa fa-times"></i></button>
		<div class="popup-inside js__popup_images">
				
		</div><!-- .popup-inside -->
	</div><!-- .popup-body -->
</div><!-- #zoomPopup -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="asset/script/html5shiv.min.js"></script>
	<script src="asset/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('asset/scripts/jquery.min.js')}}"></script>

	<script src="{{asset('frontEnd/js/jquery.js')}}"></script>
	<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
	<!-- BEGIN Revolution Slider Scripts -->
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/jquery.themepunch.revolution.min.js')}}"></script>

	<script src="{{asset('frontEnd/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontEnd/js/price-range.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontEnd/js/main.js')}}"></script>
<script src="{{asset('easyzoom/dist/easyzoom.js')}}"></script>
<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function() {
        var $this = $(this);

        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });
</script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/extensions/revolution.extension.video.min.js')}}"></script>
	
	<!-- END Revolution Slider Scripts -->
	<script src="{{ asset('asset/scripts/jquery.inview.min.js')}}"></script>
	<script src="{{ asset('asset/scripts/modernizr.min.js')}}"></script>
	<script src="{{ asset('asset/scripts/jquery.scrollTo.min.js')}}"></script>
	<script src="{{ asset('asset/plugin/select2/js/select2.min.js')}}"></script>
	<script src="{{ asset('asset/scripts/isotope.pkgd.min.js')}}"></script>
	<script src="{{ asset('asset/scripts/cells-by-row.min.js')}}"></script>
	<script src="{{ asset('asset/scripts/packery-mode.pkgd.min.js')}}"></script>
	<script src="{{ asset('asset/plugin/slick/slick.min.js')}}"></script>
	<script src="{{ asset('asset/scripts/jquery.parallax-1.1.3.min.js')}}"></script>
	<script src="{{ asset('asset/scripts/nouislider.min.js')}}"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD84ST3FIRNNVS1CEm_IE9KoR-lAIw8OPo" type="text/javascript"></script>
	<script src="{{ asset('asset/scripts/main.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('asset/plugin/rev/js/jquery.revolution.min.js')}}"></script>
</body>
</html>