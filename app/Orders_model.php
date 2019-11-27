<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_model extends Model
{
    protected $table='orders';
    protected $primaryKey='id';
    protected $fillable=['users_id',
        'users_email','name','address','city','state','pincode','country','mobile','shipping_charges','coupon_code','coupon_amount','order_status','product_id','product_name','product_code','product_color','size','price','quantity','payment_method','grand_total'];
}
