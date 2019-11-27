@extends('layouts.site')
@section('content')

<div class="page-large-title">
    <div class="container">
        <h1 class="title">Product Details</h1>
        <nav class="woocommerce-breadcrumb">
            <a class="home" href="{{ url('/')}}">Home</a> / <span>Product Details</span>
        </nav>
    </div><!-- .container -->
</div><!-- .page-large-title -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('frontEnd.layouts.category_menu')
            </div>
            <div class="col-sm-9 padding-right">
                @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
        <div class="product-details"><!--product-details-->

            <div class="col-sm-5">
                <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                    <a href="{{url('products/large',$detail_product->image)}}">
                        <img src="{{url('products/small',$detail_product->image)}}" alt="" id="dynamicImage"/>
                    </a>
                </div>

                <ul class="thumbnails" style="margin-left: -10px;">
                    <li>
                        @foreach($imagesGalleries as $imagesGallery)
                            <a href="{{url('products/large',$imagesGallery->image)}}" data-standard="{{url('products/small',$imagesGallery->image)}}">
                                <img src="{{url('products/small',$imagesGallery->image)}}" alt="" width="75" style="padding: 8px;">
                            </a>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="col-sm-7">
                <form action="{{route('addToCart')}}" method="post" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="products_id" value="{{$detail_product->id}}">
                    <input type="hidden" name="product_name" value="{{$detail_product->p_name}}">
                    <input type="hidden" name="product_code" value="{{$detail_product->p_code}}">
                    <input type="hidden" name="product_color" value="{{$detail_product->p_color}}">
                    <input type="hidden" name="price" value="{{$detail_product->price}}" id="dynamicPriceInput">
                    <div class="product-information"><!--/product-information-->
                        <img src="{{asset('frontEnd/images/product-details/new.jpg')}}" class="newarrival" alt="" />
                        <h2>{{$detail_product->p_name}}</h2>
                        <p>Code ID: {{$detail_product->p_code}}</p>
                        <span>
                            <select name="size" id="idSize" class="form-control">
                                <option value="">Select Size</option>
                                @foreach($detail_product->attributes as $attrs)
                                    <option value="{{$detail_product->id}}-{{$attrs->size}}">{{$attrs->size}}</option>
                                @endforeach
                            </select>
                        </span><br>
                        <span>
                            <span style="color:#37bc9b;" id="dynamic_price">US ${{$detail_product->price}}</span>  
                            <label>Quantity:</label>
                            <input type="text" name="quantity" value="{{$totalStock}}" id="inputStock"/>
                            @if($totalStock>0)
                            <button type="submit" class="button-green button-normal" id="buttonAddToCart">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                            @endif
                        </span>
                        <p><b>Availability:</b>
                            @if($totalStock>0)
                                In Stock
                            @else
                                Out of Stock
                            @endif
                        </p>
                        <p><b>Condition:</b> New</p>
                        <a href=""><img src="{{asset('frontEnd/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
                    </div><!--/product-information-->
                </form>

            </div>
        </div><!--/product-details-->
</div>
</div>
</div>
<div class="container">
<div class="row">
        <div class="col-xs-12 section-common">
            <div class="woocommerce-tabs js__tab">
                <ul class="tabs">
                    <li><a href="#" class="js__tab_control js__active">Description</a>					</li>
                    <li><a href="#" class="js__tab_control">Free Shipping</a></li>
                    <li><a href="#" class="js__tab_control">Reviews (0)</a></li>
                </ul>
            <div class="panel entry-content js__tab_content js__active">
                <div class="text-content">
                    <p>{{$detail_product->description}}</p>
                    
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
    <div class="col-xs-12 section-common">
					<h2 class="section-title small-spacing">RELATED PRODUCTS</h2>
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
						</div><!-- .products -->
					</div><!-- .slick-wrap -->
				</div><!-- .col -->
    </div><!-- row -->
    </div><!-- container -->
@endsection