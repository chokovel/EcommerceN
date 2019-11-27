<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* FrontEnd Location */
Route::get('/','IndexController@index');
Route::get('/men-fashion','IndexController@menfashion');
Route::get('/women-fashion','IndexController@womenfashion');
Route::get('/kids-fashion','IndexController@kidsfashion');
Route::get('/accessories','IndexController@accessories');
Route::get('/list-products','IndexController@shop');
Route::get('/cat/{id}','IndexController@listByCat')->name('cats');
Route::get('/product-detail/{id}','IndexController@detialpro');
////// get Attribute ////////////
Route::get('/get-product-attr','IndexController@getAttrs');
///// Cart Area /////////
Route::post('/addToCart','CartController@addToCart')->name('addToCart');
Route::get('/viewcart','CartController@index');
Route::get('/cart/deleteItem/{id}','CartController@deleteItem');
Route::get('/cart/update-quantity/{id}/{quantity}','CartController@updateQuantity');
/////////////////////////
/// Apply Coupon Code
Route::post('/apply-coupon','CouponController@applycoupon');
/// Simple User Login /////
Route::get('/login_page','UsersController@index');
Route::post('/register_user','UsersController@register');
Route::post('/user_login','UsersController@login');
Route::get('/logout','UsersController@logout');

////// User Authentications ///////////
Route::group(['middleware'=>'FrontLogin_middleware'],function (){
    Route::get('/myaccount','UsersController@account');
    Route::put('/update-profile/{id}','UsersController@updateprofile');
    Route::put('/update-password/{id}','UsersController@updatepassword');
    Route::get('/check-out','CheckOutController@index');
    Route::post('/submit-checkout','CheckOutController@submitcheckout');
    Route::get('/order-review','OrdersController@index');
    Route::get('/order-history','OrdersController@history');
    Route::post('/submit-order','OrdersController@order');
    Route::get('/cod','OrdersController@cod');
    Route::get('/paypal','OrdersController@paypal');
});
///
 //front blog view
 Route::get('read/{id}', 'FrontController@read')->name('read');
 Route::get('/blog', 'FrontController@blogs')->name('blog');
 Route::get('/blog/fashion', 'FrontController@fashion')->name('fashion');
 Route::get('/blog/lifestyle', 'FrontController@lifestyle')->name('lifestyle');
 Route::get('/blog/insight', 'FrontController@insight')->name('insight');
 Route::get('/blog/celebrities', 'FrontController@celebrities')->name('celebrities');
 Route::get('/blog/beauty', 'FrontController@beauty')->name('beauty');
 Route::get('/blog/others', 'FrontController@others')->name('others');


///




/* Admin Location */
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){
    Route::get('/', 'AdminController@index')->name('admin_home');
    /// Setting Area
    Route::get('/settings', 'AdminController@settings');
    Route::get('/check-pwd','AdminController@chkPassword');
    Route::post('/update-pwd','AdminController@updatAdminPwd');
    /// Category Area
    Route::resource('/category','CategoryController');
    Route::get('delete-category/{id}','CategoryController@destroy');
    Route::get('/check_category_name','CategoryController@checkCateName');
    /// Products Area
    Route::resource('/product','ProductsController');
    Route::get('delete-product/{id}','ProductsController@destroy');
    Route::get('delete-image/{id}','ProductsController@deleteImage');
    /// Product Attribute
    Route::resource('/product_attr','ProductAtrrController');
    Route::get('delete-attribute/{id}','ProductAtrrController@deleteAttr');
    /// Product Images Gallery
    Route::resource('/image-gallery','ImagesController');
    Route::get('delete-imageGallery/{id}','ImagesController@destroy');
    /// ///////// Coupons Area //////////
    Route::resource('/coupon','CouponController');
    Route::get('delete-coupon/{id}','CouponController@destroy');
    /// Newsletter
    Route::resource('/newsletter', 'NewsletterController');
    /// Testimonial
    Route::resource('/testimonies', 'TestimoniesController');
    Route::get('/testiform', function () {return view('testiform');});
    Route::get('/admin/testimony', 'TestimoniesController@index')->name('testimony');
    //blog back route
    Route::resource('admin/blogs', 'Admin\BlogController');
    Route::get('blog-list', 'BlogController@blogList');
    Route::get('admin/carousel', 'CarouselsController@index')->name('carousel');
    Route::Resource('/admin/carousels', 'Admin\CarouselsController');

    //blog search
    Route::any('/search',function(){
    
    $blog = Blog::orderBy('created_at', 'desc')->paginate(6);
    $q = Input::get ( 'q' );
    $blog = Blog::where('title','LIKE','%'.$q.'%')->orWhere('body','LIKE','%'.$q.'%')->paginate(10);
    if(count($blog) > 0)
        return view('blog',['blog' => $blog])->withDetails($blog)->withQuery ( $q );
    else return view ('blog')->withMessage('No Details found. Try to search again !');
    });

///
});
