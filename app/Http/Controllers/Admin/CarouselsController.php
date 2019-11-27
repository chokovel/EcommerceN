<?php

namespace App\Http\Controllers\Admin;
use App\Carousel;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarouselsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_active=0;
        $carousel = Carousel::all();
        return view('admin.carousel', compact('carousel', 'menu_active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_active=0;
        return view('admin.addcarousel', compact('menu_active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Carousel $carousel)
    {
        $image   = $request->file('image');
        $title   = $request->title;
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath,$input['imagename']);
    
        $imgname = $input['imagename'];
        $carousel->image = $imgname;
        $carousel->title = $request->title;
        $carousel->title2 = $request->title2;
        $carousel->subtitle = $request->subtitle;

        $carousel->save();
        Session::flash('success', 'You have successfully added to slide!');

        return redirect()->route('carousels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        $menu_active=0;
        $carousel = $carousel;
        return view('admin.editcarousel', compact('menu_active', 'carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel)
    {
        $image   = $request->file('image');
        $title   = $request->title;
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath,$input['imagename']);
    
        $imgname = $input['imagename'];
        $carousel->image = $imgname;
        $carousel->title = $request->title;
        $carousel->title2 = $request->title2;
        $carousel->subtitle = $request->subtitle;

            $carousel->save();
            Session::flash('success', 'You have successfully updated a slide!');
            return redirect()->route('carousels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carousel::destroy($id);
        Session::flash('success', 'Successfully deleted!');
        return redirect()->route('carousels.index');
    }
}
