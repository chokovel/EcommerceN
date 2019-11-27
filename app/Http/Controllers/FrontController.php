<?php

namespace App\Http\Controllers;
use App\Carousel;
use App\Product;
use App\Blog;
use Mail;

use App\Category_model;
use App\ImageGallery_model;
use App\ProductAtrr_model;
use App\Products_model;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products=Products_model::all();

        return view('welcome',compact('products'));
    }

    public function productdetails($id)
    {
        $arr['randii'] = Product::inRandomOrder()->limit(10)->get();
        $arr['details'] = Product::find($id);
        $arr['modal'] = Product::find($id);
        return view('singleproduct')->with($arr);
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function categories()
    {
        return view('categories');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function orderhistory()
    {
        return view('orderhistory');
    }

    public function cart()
    {
        $arr['interested'] = Product::inRandomOrder()->limit(10)->get();
        return view('cart')->with($arr);
    }

    public function singleproduct()
    {
        return view('singleproduct');
    }
    
    public function blogs()
    {
        $arr['blogg'] = Blog::orderBy('created_at', 'desc')->paginate(10);
        $arr['blog'] = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('blog')->with($arr);
    }

    public function read($id){
       
        $arr['blogg'] = Blog::orderBy('created_at', 'desc')->paginate(10);
        $arr['randi'] = Blog::inRandomOrder()->limit(1)->get();
        $arr['randii'] = Blog::inRandomOrder()->limit(1)->get();
        $arr['ppp'] = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        $arr['blogs'] = Blog::find($id);
        return view('read')->with($arr);
        
    }

    public function fashion()
    {
        $arr['blogg'] = Blog::where('category', 'Fashion')->orderBy('created_at', 'desc')->get();
        return view('blog')->with($arr);
        
    }
    public function lifestyle()
    {
        $arr['blogg'] = Blog::where('category', 'Lifestyle')->orderBy('created_at', 'desc')->get();
        return view('blog')->with($arr);
    }
    public function celebrities()
    {
        $arr['blogg'] = Blog::where('category', 'Celebrities')->orderBy('created_at', 'desc')->get();
        return view('blog')->with($arr);
    }
    public function insight()
    {
        $arr['blogg'] = Blog::where('category', 'Insight')->orderBy('created_at', 'desc')->get();
        return view('blog')->with($arr);
    }
    public function beauty()
    {
        $arr['blogg'] = Blog::where('category', 'Beauty and Health')->orderBy('created_at', 'desc')->get();
        return view('blog')->with($arr);
    }
    public function others()
    {
        $arr['blogg'] = Blog::where('category', 'Others')->orderBy('created_at', 'desc')->get();
        return view('blog')->with($arr);
    }

    //contact form
    public function contact()
    { 
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => ['required'],
            'subject' => ['required'],
            'email' => ['required','email'],
            'message' => ['required']

        ]);

        Mail::to('support@olexstores.com')->send(new ContactFormMail($data));
        Session::flash('success', 'Sent Successfully!');
        return redirect('contact');

    }
}
