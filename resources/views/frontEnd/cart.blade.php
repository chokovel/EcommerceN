@extends('layouts.site')

@section('content')
<div class="page-large-title">
    <div class="container">
        <h1 class="title">Shopping Cart</h1>
        <nav class="woocommerce-breadcrumb">
            <a class="home" href="{{ url('/')}}">Home</a> / <span>Shopping Cart</span>
        </nav>
    </div><!-- .container -->
</div><!-- .page-large-title -->

    <section id="cart_items">
        <div class="container">
            @if(Session::has('message'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
        <div class="section-common">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="section-title">Shopping Cart</h2>
					<div class="clear"></div>
					<table class="shop_table shop-cart-table">
						<thead>
							<tr>
								<th class="product-name" colspan="2">Product</th>
								<th class="product-price">Price</th>
								<th class="product-quantity">Quantity</th>
								<th class="product-subtotal">Total</th>
								<th class="product-shipping">Delivery info</th>
								<th class="product-remove">Delete</th>
							</tr>
						</thead>
						<tbody>
                        @foreach($cart_datas as $cart_data)
                        <?php
                                $image_products=DB::table('products')->select('image')->where('id',$cart_data->products_id)->get();
                            ?>
							<tr class="cart_item">
                                @foreach($image_products as $image_product)
								<td class="product-thumbnail">
									<a href="#"><img src="{{url('products/small',$image_product->image)}}" alt="" style="width: 90px; max-height:112px" class="thumb"/></a>
								</td>
                                @endforeach 
								<td class="product-name cart_description">
									<div class="product-name-wrap">
										<a href="#" class="title">{{$cart_data->product_name}}</a>
										<p>{!! str_limit($cart_data->description, $limit=50) !!}</p>
										<dl class="variation">
											<dt class="variation-Size">Size:</dt>
											<dd class="variation-Size"><p>{{$cart_data->size}}</p></dd>
										</dl>
									</div>
								</td>
								<td class="product-price" data-title="Price">
									<span class="amount">${{$cart_data->price}}</span>
								</td>
								<td class="product-quantity" data-title="Quantity">
									<div class="quantity js__number cart_quantity_button">
                                    <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart_data->id.'/1')}}"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="{{$cart_data->quantity}}" autocomplete="off" size="2" disabled/>
                                        @if($cart_data->quantity>1)
                                            <a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$cart_data->id.'/-1')}}"> - </a>
                                        @endif
                                    </div>
								</td>
								<td class="product-subtotal" data-title="Subtotal">
									<span class="amount">${{$cart_data->price*$cart_data->quantity}}</span>
								</td>
								<td class="product-shipping" data-title="Shipping">
									Free Shipping
								</td>
								<td class="product-remove">
									<a href="{{url('/cart/deleteItem',$cart_data->id)}}" class="remove" title="Remove this item"></a> 
								</td>
							</tr><!-- .cart_item-->
                        @endforeach  
						</tbody>
					</table><!-- .shop-cart-table -->
					<div class="clearfix middle-cart">
                    @if(Session::has('message_coupon'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{Session::get('message_coupon')}}
                        </div>
                    @endif
						<div class="pull-left">
							<div class="coupon">
                            <form action="{{url('/apply-coupon')}}" method="post" role="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="Total_amountPrice" value="{{$total_price}}">
                            <div class="form-group">
                                <div class="controls {{$errors->has('coupon_code')?'has-error':''}}">
                                    <input type="text" class="input-text input-text-common" name="coupon_code" id="coupon_code" placeholder="Promotion By Coupon">
                                    <span class="text-danger">{{$errors->first('coupon_code')}}</span>
                                </div>
                                <input type="submit" class="btn-coupon button-black" name="apply_coupon" value="Apply">
                            </div>
                        </form>
							</div>
						</div>
						<div class="pull-right right-side">
							<a href="{{url('/')}}" class="button-white-border-dark btn-update-cart">Continue Shopping</a>
                            
							<a href="{{url('/check-out')}}" class="btn-process-to-checkout button-green">Checkout</a>
						</div>
					</div><!-- .middle-cart -->
				</div><!-- .col -->
				<div class="col-md-6 col-xs-12 section-common">
					<h2 class="section-title small-spacing">Calculate Shipping</h2>
					<div class="clear"></div>
					<form action="#">
						<div class="row">
							<div class="col-xs-12">
								<div class="form-control-row">
									<div class="select-common">
										<select class="js__select2" data-min-results="Infinity" data-placeholder="Country">
											<option value="" label="Country"></option>
											<option value="en">England</option>
											<option value="us">USA</option>
											<option value="vn">VietNam</option>
										</select>
									</div>
								</div>
							</div><!-- col -->
							<div class="col-xs-12">
								<div class="form-control-row">
									<div class="select-common">
										<select class="js__select2" data-min-results="Infinity" data-placeholder="Town / City">
											<option value="" label="Town / City"></option>
											<option value="en">New York</option>
											<option value="us">Lodon</option>
											<option value="vn">Ho Chi Minh</option>
										</select>
									</div>
								</div>
							</div><!-- col -->
							<div class="col-sm-6 col-ip-6 col-xs-12">
								<div class="form-control-row">
									<input type="text" class="input-text-common" placeholder="State">
								</div>
							</div><!-- col -->
							<div class="col-sm-6 col-ip-6 col-xs-12">
								<div class="form-control-row">
									<input type="text" class="input-text-common" placeholder="Zip / Postal Code">
								</div>
							</div><!-- col -->
							<div class="col-xs-12">
								<div class="form-control-row last">
									<input type="submit" class="button-normal button-black" value="Get a Quote">
								</div>
							</div><!-- col -->
						</div><!-- row -->
					</form>
				</div><!-- .col -->
				<div class="col-md-6 col-xs-12 section-common">
					@if(Session::has('message_apply_success'))
                        <div class="alert alert-success text-center" role="alert">
                            {{Session::get('message_apply_success')}}
                        </div>
                    @endif
					<h2 class="section-title small-spacing">Cart Total</h2>
					<div class="clear"></div>
					<div class="shop-cart-total">
						<table class="shop_table shop-cart-total-table">
						@if(Session::has('discount_amount_price'))
							<tr class="cart-subtotal">
								<th>Sub Total </th>
								<td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$total_price}}</span></td>
							</tr>
							<tr class="cart-shipping">
								<th>Coupon Discount (Code : {{Session::get('coupon_code')}}) <span>$ {{Session::get('discount_amount_price')}}</span></th>
								<td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$total_price-Session::get('discount_amount_price')}}</span></td>
							</tr>
							@else
							<tr class="cart-grand-total">
								<th>Grand Total</th>
								<td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$total_price}}</span></td>
							</tr>
							@endif
						</table><!-- .shop-cart-total-table -->
					</div><!-- .shop-cart-total -->
					<a href="{{url('/check-out')}}" class="button-green button-normal">Checkout</a>
				</div><!-- .col -->
				<div class="col-xs-12 section-common">
					<h2 class="section-title small-spacing">You may also like...</h2>
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
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .section-common -->
	</div><!-- .section-common -->
    </section> <!--/#cart_items-->

    
@endsection