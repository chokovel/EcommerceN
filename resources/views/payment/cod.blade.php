@extends('layouts.site')

@section('content')

<div class="page-large-title">
    <div class="container">
        <h1 class="title">Payment page</h1>
        <nav class="woocommerce-breadcrumb">
            <a class="home" href="{{ url('/')}}">Home</a> / <span>Payment page</span>
        </nav>
    </div><!-- .container -->
</div><!-- .page-large-title -->

    <div class="container">
        <h3 class="text-center">YOUR ORDER HAS BEEN PLACED</h3>
        <p class="text-center">Thanks for your Order that use Options on Cash On Delivery</p>
        <p class="text-center">We will contact you by Your Email (<b>{{$user_order->users_email}}</b>) or Your Phone Number (<b>{{$user_order->mobile}}</b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection