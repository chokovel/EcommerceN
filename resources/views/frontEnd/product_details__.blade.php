@extends('layouts.site')

@section('content')

<div class="page-large-title">
		<div class="container">
			<h1 class="title">Adios Fashion Girl</h1>
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="#">Home</a> / <a href="#">Women Fashion</a> / <span>Adios Fashion Girl</span>
			</nav>
		</div><!-- .container -->
	</div><!-- .page-large-title -->
	@if(Session::has('message'))
		<div class="alert alert-success text-center" role="alert">
			{{Session::get('message')}}
		</div>
	@endif	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 section-common">
				<div class="row">
					<div class="col-md-6">
					<form class="cart" action="{{route('addToCart')}}" method="post" role="form">	
						<div class="product-detail product-single">
							<div class="product">
								<div class="images js__gallery">
									<a href="#" class="woocommerce-main-image zoom js__zoom_popup" data-target="#zoomPopup" data-zoom="{{url('products/large',$detail_product->image)}}">
										<img style="width:435px; max-height:530px;" src="{{url('products/small',$detail_product->image)}}" alt="" />
									</a><!-- .woocommerce-main-image -->
									<div class="thumbnails">
									@foreach($imagesGalleries as $imagesGallery)
										<a href="#" class="zoom js__thumb" data-images="{{url('products/large',$imagesGallery->image)}}" data-zoom="{{url('products/large',$imagesGallery->image)}}" ><img style="width:100px; max-height:132px;" src="{{url('products/small',$imagesGallery->image)}}" alt="" /></a>
									@endforeach	
									</div><!-- .thumbnails -->
									<div class="hidden">
									@foreach($imagesGallerys as $imagesGallery)
										<img style="width:435px; max-height:530px;" src="{{url('products/small',$imagesGallery->image)}}" alt="olexstores" />
									@endforeach		
									</div><!-- load images zone -->
								</div><!-- .images -->
							</div><!-- .product -->
						</div><!-- .product-detail -->
					</div><!-- col -->
					<div class="col-md-6">
						<div class="summary summary-single">
							<h2 class="product_title">{{$detail_product->p_name}}</h2>
							<div class="summary-top">
								<div class="star-rating">
									<span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
								</div>
								<a href="#">Have 25 reviews</a> <span>/</span> <a href="#">Add your review</a>
							</div>
							<p class="price"><span class="amount">${{$detail_product->price}}</span></p>
							<ul class="product_meta">
								<li><span>Brand:</span> {{$detail_product->brand}}</li>
								<li>
								@if($totalStock>0)
								<span>Available:</span> In stock</li>
								@else
								<span>Available:</span> Out of stock</li>
								@endif
								<li><span>Product code:</span> {{$detail_product->p_code}}</li>
							</ul>
							<div class="description">
								<p>{!! $detail_product->description !!}</p>
							</div>
							<span class="text">
								<select name="size" id="idSize" class="form-control">
									<option value="">Select Size</option>
									@foreach($detail_product->attributes as $attrs)
										<option value="{{$detail_product->id}}-{{$attrs->size}}">{{$attrs->size}}</option>
									@endforeach
								</select>
							</span> 
							
							<ul class="variants">	
								<li class="variant-color">
									<span class="text">{{$detail_product->p_color}}</span>
									<label class="lbl-variant"><input type="radio" name="radio-color" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="{{$detail_product->p_color}}"></span></label>
									
								</li>
							</ul>
							<!-- <form class="cart" action="{{route('addToCart')}}" method="post" role="form"> -->
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="products_id" value="{{$detail_product->id}}">
								<input type="hidden" name="product_name" value="{{$detail_product->p_name}}">
								<input type="hidden" name="product_code" value="{{$detail_product->p_code}}">
								<input type="hidden" name="product_color" value="{{$detail_product->p_color}}">
								<input type="hidden" name="price" value="{{$detail_product->price}}" id="dynamicPriceInput">
								<div class="quantity js__number"><input type="number" class="js__target" name="quantity" value="{{$totalStock}}" id="inputStock" />
								@if($totalStock>0)
								<button type="button" class="js__plus fa-plus fa"></button><button type="button" class="js__minus fa-minus fa"></button>
								@endif
								</div>
								@if($totalStock>0)
								<button type="submit" class="single_add_to_cart_button cart">Add to cart</button>
								@endif
							</form>
							<div class="summary-bottom">
								<div class="text-list"><strong>Share:</strong> <a href="#">Facebook</a><span class="split">/</span><a href="#">Twitter</a><span class="split">/</span><a href="#">Google</a><span class="split">/</span><a href="#">Linkedin</a></div>
								<div class="text-list"><strong>Tags:</strong> <a href="#">Wonmen</a>, <a href="#">T-Shirt</a>, <a href="#">Blue</a>, <a href="#">Girl</a></div>
							</div>
						</div><!-- .summary -->
					</div><!-- col -->
					<div class="col-xs-12 section-common">
						<div class="woocommerce-tabs js__tab">
							<ul class="tabs">
								<li><a href="#" class="js__tab_control js__active">Description</a>					</li>
								<li><a href="#" class="js__tab_control">Free Shipping</a></li>
								<li><a href="#" class="js__tab_control">Reviews (0)</a></li>
							</ul>
							<div class="panel entry-content js__tab_content js__active">
								<div class="text-content">
									<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at qui vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi et. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla.</p>
									<ul>
										<li>Typi non habent qui claritatem insitam.</li>
										<li>Est usus legentis in iis qui facit eorum claritatem.</li>
										<li>Investigationes demonstraverunt lectores.</li>
										<li>Legere ut me lius quod qua legunt zzril delenit.</li>
										<li>Augue duis dolore saepius delenit augue duis dolore.</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation, ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat vulputate velit esse molestie consequat mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima quinta decima.</p>
									<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposue rit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
								</div>
							</div>
							
							<div class="panel entry-content js__tab_content">
								<div class="text-content">
									<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
								</div>
							</div>
							
							<div class="panel entry-content js__tab_content">
								<div id="comments" class="comments">
									<h2 class="section-title">28 Comments</h2>
									<div class="clear"></div>
									<ol class="comment-list">
										<li class="comment">
											<div class="comment-body">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<img alt="" src="http://placehold.it/80"  class="avatar">
														<b class="fn"><a href="#" rel="external nofollow" class="url">John Doe</a></b>
													</div>
													<!-- .comment-author -->
													<div class="comment-metadata">
														<a href="#"><span class="date">30 Apr, 2016</span> <span class="split">/</span> About 1 hour ago</a>
													</div>
													<!-- .comment-metadata -->
												</div>
												<!-- .comment-meta -->
												<div class="comment-content">
													<div class="text-content">
														<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
													</div>
												</div>
												<!-- .comment-content -->
												<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
											</div>
										</li><!--- .comment-->
										<li class="comment">
											<div class="comment-body">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<img alt="" src="http://placehold.it/80"  class="avatar">
														<b class="fn"><a href="#" rel="external nofollow" class="url">Barbara</a></b>
													</div>
													<!-- .comment-author -->
													<div class="comment-metadata">
														<a href="#"><span class="date">30 Apr, 2016</span> <span class="split">/</span> About 15 minutes</a>
													</div>
													<!-- .comment-metadata -->
												</div>
												<!-- .comment-meta -->
												<div class="comment-content">
													<div class="text-content">
														<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
													</div>
												</div>
												<!-- .comment-content -->
												<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
											</div>
											<ol class="children">
												<li class="comment">
													<div class="comment-body">
														<div class="comment-meta">
															<div class="comment-author vcard">
																<img alt="" src="http://placehold.it/80"  class="avatar">
																<b class="fn"><a href="#" rel="external nofollow" class="url">Thomas Alex</a></b>
															</div>
															<!-- .comment-author -->
															<div class="comment-metadata">
																<a href="#"><span class="date">28 Apr, 2016</span> <span class="split">/</span> 2 days ago</a>
															</div>
															<!-- .comment-metadata -->
														</div>
														<!-- .comment-meta -->
														<div class="comment-content">
															<div class="text-content">
																<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
															</div>
														</div>
														<!-- .comment-content -->
														<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
													</div>
													<ol class="children">
														<li class="comment">
															<div class="comment-body">
																<div class="comment-meta">
																	<div class="comment-author vcard">
																		<img alt="" src="http://placehold.it/80"  class="avatar">
																		<b class="fn"><a href="#" rel="external nofollow" class="url">Barbara</a></b>
																	</div>
																	<!-- .comment-author -->
																	<div class="comment-metadata">
																		<a href="#"><span class="date">28 Apr, 2016</span> <span class="split">/</span> 2 days ago</a>
																	</div>
																	<!-- .comment-metadata -->
																</div>
																<!-- .comment-meta -->
																<div class="comment-content">
																	<div class="text-content">
																		<p>Vestibulum a nisl ipsum. Curabitur aliquet nec felis quis convallis. Quisque et auctor dui, id adipiscing nunc. Etiam et dui lobortis, volutpat justo ac, tempor lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus purus nisi, porttitor ac adipiscing ac, cursus eu massa. </p>
																	</div>
																</div>
																<!-- .comment-content -->
																<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
															</div>
														</li>
													</ol>
												</li>
											</ol>
										</li><!--- .comment-->
										<li class="comment">
											<div class="comment-body">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<img alt="" src="http://placehold.it/80"  class="avatar">
														<b class="fn"><a href="#" rel="external nofollow" class="url">Eva Elizabeth</a></b>
													</div>
													<!-- .comment-author -->
													<div class="comment-metadata">
														<a href="#"><span class="date">12 Jan, 2016</span> <span class="split">/</span> 4 months ago</a>
													</div>
													<!-- .comment-metadata -->
												</div>
												<!-- .comment-meta -->
												<div class="comment-content">
													<div class="text-content">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													</div>
												</div>
												<!-- .comment-content -->
												<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
											</div>
										</li><!--- .comment-->
									</ol><!--- .comment-list-->
									<a href="#" class="btn-ajax-loading"><i class="fa fa-refresh"></i> <span>View more all comments ...</span></a>
									<div id="respond" class="comment-respond frm-comment">
										<h2 id="reply-title" class="comment-reply-title section-title small-spacing">Leave a Reply</h2>
										<div class="clear"></div>
										<form action="#" method="post" id="commentform" class="comment-form frm-contact">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<label class="controls">
														<span class="lbl">Full Name <span class="required">*</span></span>
														<input type="text" name="name-inp" id="name-inp" class="inp-text" placeholder="Your Name">
													</label>
												</div>
												<div class="col-sm-6 col-xs-12">
													<label class="controls">
														<span class="lbl">Email Address <span class="required">*</span></span>
														<input type="email" name="email-inp" id="email-inp" class="inp-text" placeholder="Email Address">
													</label>
												</div>
												<div class="col-xs-12">
													<label class="controls">
														<span class="lbl">Write Message</span>
														<textarea name="comment-inp" id="comment-inp" class="inp-text inp-textarea auto-resize-textarea" placeholder="Please let us know your thoughts on this article..."></textarea>
													</label>
													<div class="controls">
														<input type="submit" class="inp-submit" value="SEND MESSAGE">
													</div>
												</div>
											</div>
										</form>
									</div><!--- .comment-respond-->
								</div><!--- .comments-->
							</div>
						</div><!-- .woocommerce-tabs -->
					</div><!-- col -->
					<div class="col-xs-12 section-featured-product section-common upsells">
						<h2 class="section-title">Related Products</h2>
						<div class="clear"></div>
						<div class="slick-wrap">
							<div class="products products-grid slick-middle-arrow js__slickslider" data-arrows="true" data-dots="false" data-show="4" data-responsive="{'992':2,'650':1}">
								<div class="slick-slide">
									<div class="product-grid">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
										</div>
										<a href="#" class="content">
											<h2 class="title">French Connection T-Shirt</h2>
											<span class="category">Men</span>
												<span class="price">
												<span class="amount">$0.9</span>
											</span>
										</a>
									</div>
								</div><!-- product -->
								<div class="slick-slide">
									<div class="product-grid">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
											<a href="#" class="add_to_cart_button">Add to cart</a>
										</div>
										<a href="#" class="content">
											<h2 class="title">Sunshine In My Soul</h2>
											<span class="category">Women</span>
											<span class="price">
												<span class="amount">$49.00</span>
											</span>
										</a>
									</div>
								</div><!-- product -->
								<div class="slick-slide">
									<div class="product-grid with-timer">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
											<div id="countbox_1" class="js__count_down_box timer-view" data-date-now="07/07/16 11:53:25 PM" data-date-then="07/12/16 09:59:00 PM"></div>
											<a href="#" class="add_to_cart_button">Add to cart</a>
										</div>
										<a href="#" class="content">
											<h2 class="title">Grey Sweater</h2>
											<span class="category">Women</span>
											<span class="price">
												<del><span class="amount">$60.00</span></del>
												<ins><span class="amount">$49.00</span></ins>
											</span>
										</a>
									</div>
								</div><!-- product -->
								<div class="slick-slide">
									<div class="product-grid">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
											<a href="#" class="add_to_cart_button">Add to cart</a>
										</div>
										<a href="#" class="content">
											<h2 class="title">Amaza Kid</h2>
											<span class="category">Men</span>
											<span class="price">
												<span class="amount">$49.00</span>
											</span>
										</a>
									</div>
								</div><!-- product -->
								<div class="slick-slide">
									<div class="product-grid">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
											<a href="#" class="add_to_cart_button">Add to cart</a>
										</div>
										<a href="#" class="content">
											<h2 class="title">Men Summer</h2>
											<span class="category">Men</span>
											<span class="price">
												<span class="amount">$49.00</span>
											</span>
										</a>
									</div>
								</div><!-- product -->
							</div><!-- .products -->		
						</div><!-- .slick-wrap -->		
					</div><!-- col -->
				</div><!-- .row -->
			</div><!-- col -->
		</div><!-- .row -->
	</div><!-- .container -->
	
	<div class="section-common section-subscribe fixed-wrapper">
		<div class="background js__background_image js__parallax" data-background-image="url(http://placehold.it/1920x1280"></div>
		<div class="container">
			<form action="#" class="subscribe-form">
				<h2 class="section-title">Subscribe</h2>
				<div class="clear"></div>
				<p>Get the last news & promotion program from us</p>
				<div class="inp-controls">
					<input type="email" class="inp-email" placeholder="ENTER YOUR EMAIL">
					<button type="button" class="btn-submit"><span>SUBSCRIBE</span><i class="fa fa-long-arrow-right"></i></button>
				</div>
			</form><!-- .subscribe-form -->
		</div><!-- .container -->
	</div><!-- .section-subscribe -->

@endsection