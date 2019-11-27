<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;
use Illuminate\Support\Facades\Session;
class TestimoniesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_active=0;
        $testimony = Testimony::all();
        return view('admin.testimony', compact('testimony', 'menu_active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_active=0;
        return view('testiform', compact('menu_active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request, Testimony $testimony)
    {
        $image   = $request->file('image');
        $title   = $request->title;
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath,$input['imagename']);
    
        $imgname = $input['imagename'];

        $testimony->image = $imgname;
        $testimony->title = $request->title;
        $testimony->name = $request->name;
        $testimony->testimony = $request->testimony;
        $testimony->save();

        Session::flash('success', 'Successful.');

        return redirect()->route('testimonies.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arr['tt'] = Testimony::find($id);
        // dd($arr);
        return view('testisingle')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimony $testimony)
    {
        $menu_active=0;
        $testimony = $testimony;
        return view('admin.edittestimony', compact('menu_active', 'testimony'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimony $testimony)
    {
        $image   = $request->file('image');
        $title   = $request->title;
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath,$input['imagename']);
    
        $imgname = $input['imagename'];

        $testimony->image = $imgname;
        $testimony->title = $request->title;
        $testimony->name = $request->name;
        $testimony->testimony = $request->testimony;
        $testimony->save();

        Session::flash('success', 'Successful.');

        return redirect()->route('testimonies.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimony::destroy($id);
        Session::flash('success', 'Successfully deleted!');
        return redirect()->route('testimonies.index');
    }
}
