@extends('layouts.site')

@section('content')

<!-- BREADCRUMBS -->
<div class="bcrumbs">
<div class="container">
    <ul>
        <li><a href="#">Home</a></li>
        <li>My Account</li>
    </ul>
</div>
</div>


<!-- MY ACCOUNT -->
<div class="account-wrap">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- HTML -->
            <div id="account-id">
                <h4 class="account-title"><span class="fa fa-chevron-right"></span>Your Order History</h4>                                                                    
                <div class="order-history">
                    <table class="cart-table">
                        <tr>                                                
                            <th>Image</th>                                                                                             
                            <th>Qty</th>  
                            <th>Product Name</th>  
                            <th>total</th>
                            <th>Order ID</th>
                            <th>Delivered on</th>
                            <th></th>
                        </tr>
                        <tr>                                              
                            <td><img src="images/products/fashion/5.jpg" class="img-responsive" alt=""/></td>                                                                                               
                            <td>x3</td>
                            <td>
                                <h4><a href="./single-product.html">Product fashion</a></h4>
                                <p>Size: M</p>
                                <p>Color: White</p>
                            </td>
                            <td>
                                <div class="item-price">$ 99.00</div>
                            </td> 
                            <td> OD31207</td>
                            <td> 12th Dec'13 </td>
                            <td>
                                <a href="return.html" class="btn-black">Return Order</a>
                                <a href="#" class="btn-black">Re Order</a>
                            </td>
                        </tr> 
                        <tr>                                              
                            <td><img src="images/products/fashion/5.jpg" class="img-responsive" alt=""/></td>                                                                                               
                            <td>x3</td>
                            <td>
                                <h4><a href="./single-product.html">Product fashion</a></h4>
                                <p>Size: M</p>
                                <p>Color: White</p>
                            </td>
                            <td>
                                <div class="item-price">$ 99.00</div>
                            </td> 
                            <td> OD31207</td>
                            <td> 12th Dec'13 </td>
                            <td>
                                <a href="return.html" class="btn-black">Return Order</a>
                                <a href="#" class="btn-black">Re Order</a>
                            </td>
                        </tr> 
                        <tr>                                              
                            <td><img src="images/products/fashion/5.jpg" class="img-responsive" alt=""/></td>                                                                                               
                            <td>x3</td>
                            <td>
                                <h4><a href="./single-product.html">Product fashion</a></h4>
                                <p>Size: M</p>
                                <p>Color: White</p>
                            </td>
                            <td>
                                <div class="item-price">$ 99.00</div>
                            </td> 
                            <td> OD31207</td>
                            <td> 12th Dec'13 </td>
                            <td>
                                <span class="return-request"> You requested <br> this order for return </span>
                                <a href="#" class="btn-black">Re Order</a>
                            </td>
                        </tr> 
                    </table>

                    <div class="table-btn">
                        <a href="my-account.html" class="btn-black">Back To Account</a>
                    </div>
                </div>                          
            </div>
        </div>                        
    </div>
</div>
</div>
<div class="clearfix space20"></div>

@endsection