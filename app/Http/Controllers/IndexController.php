<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\ImageGallery_model;
use App\ProductAtrr_model;
use App\Products_model;
use App\Blog;
use App\Testimony;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products=Products_model::orderBy('created_at', 'desc')->limit(20)->get();
        $bestseller=Products_model::where('categories_id',29)->orderBy('created_at', 'desc')->limit(20)->get();
        $toprated=Products_model::where('categories_id',30)->orderBy('created_at', 'desc')->limit(20)->get();
        $newarrival=Products_model::orderBy('created_at', 'desc')->limit(30)->get();
        $women=Products_model::where('categories_id',12)->orderBy('created_at', 'desc')->limit(30)->get();
        $men=Products_model::where('categories_id',10)->orderBy('created_at', 'desc')->limit(30)->get();
        $kids=Products_model::where('categories_id',11)->orderBy('created_at', 'desc')->limit(30)->get();
        $accessories=Products_model::where('categories_id',13)->orderBy('created_at', 'desc')->limit(20)->get();
        $rand=Products_model::inRandomOrder()->limit(2)->get();
        $blog = Blog::orderBy('created_at', 'desc')->limit(4)->get();
        $testimony = Testimony::orderBy('created_at', 'desc')->limit(4)->get();
        return view('welcome',compact('testimony','blog','products','bestseller','toprated','newarrival','women','men','kids','accessories','rand'));
    }
    
    public function shop(){
        $products=Products_model::orderBy('created_at', 'desc')->paginate(50);
        $byCate="";
        return view('frontEnd.products',compact('products','byCate'));
    }

    public function kidsfashion(){
        $products=Products_model::where('categories_id',11)->orderBy('created_at', 'desc')->paginate(50);
        $byCate="";
        return view('kidsfashion',compact('products','byCate'));
    }

    public function menfashion(){
        $products=Products_model::where('categories_id',10)->orderBy('created_at', 'desc')->paginate(50);
        $byCate="";
        return view('menfashion',compact('products','byCate'));
    }

    public function womenfashion(){
        $products=Products_model::where('categories_id',12)->orderBy('created_at', 'desc')->paginate(50);
        $byCate="";
        return view('womenfashion',compact('products','byCate'));
    }

    public function accessories(){
        $products=Products_model::where('categories_id',13)->orderBy('created_at', 'desc')->paginate(50);
        $byCate="";
        return view('accessories',compact('products','byCate'));
    }

    public function listByCat($id){
        $list_product=Products_model::where('categories_id',$id)->paginate(50);
        $byCate=Category_model::select('name')->where('id',$id)->first();
        return view('frontEnd.products',compact('list_product','byCate'));
    }
    public function detialpro($id){
        $detail_product=Products_model::findOrFail($id);
        $imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        $imagesGallerys=ImageGallery_model::where('products_id',$id)->get();
        $totalStock=ProductAtrr_model::where('products_id',$id)->sum('stock');
        $relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return view('frontEnd.product_details',compact('detail_product','imagesGalleries','totalStock','relateProducts','imagesGallerys'));
    }
    public function getAttrs(Request $request){
        $all_attrs=$request->all();
        //print_r($all_attrs);die();
        $attr=explode('-',$all_attrs['size']);
        //echo $attr[0].' <=> '. $attr[1];
        $result_select=ProductAtrr_model::where(['products_id'=>$attr[0],'size'=>$attr[1]])->first();
        echo $result_select->price."#".$result_select->stock;
    }
}
