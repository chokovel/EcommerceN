@extends('layouts.site')

@section('content')
<div class="page-large-title">
    <div class="container">
        <h1 class="title">Shop</h1>
        <nav class="woocommerce-breadcrumb">
            <a class="home" href="{{ url('/')}}">Home</a> / <span>Shop</span>
        </nav>
    </div><!-- .container -->
</div><!-- .page-large-title -->
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 section-common">
                <div class="features_items"><!--features_items-->
                    <?php
                            if($byCate!=""){
                                $products=$list_product;
                                echo '<h2 class="title text-center">'.$byCate->name.'</h2>';
                            }else{
                                echo '<h2 class="title text-center">List Products</h2>';
                            }
                    ?>
                    @foreach($products as $product)
                        @if($product->category->status==1)
                            <div class="col-md-3 col-sm-6 col-ip-6 col-xs-12">
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
								<span class="category">Men</span>
								<span class="price">
									<span class="amount">${{$product->price}}</span>
								</span>
								<div class="star-rating">
									<span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
								</div>
							</a>
						</div>
					</div>
                        @endif
                    @endforeach  
                </div><!--features_items-->
                {{ $products->render()}}
            </div>
        </div>
    </div>
@endsection