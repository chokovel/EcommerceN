<?php

namespace App\Http\Controllers\Admin;
use App\Blog;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
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
        $blog = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.blog', compact('menu_active', 'blog'));
    }

    public function blogList()
    {
        return Datatables::of(Blog::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_active=0;
        return view('admin.createblog', compact('menu_active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Blog $blog)
    {

        $title   = Input::get('title');
        $body    = Input::get('body');
        $date    = Input::get('date');
        $category    = Input::get('category');
        $postby    = Input::get('postby');
        $image   = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath,$input['imagename']);
    
    $imgname = $input['imagename'];

            $blog->title = $title;
            $blog->body = $body;
            $blog->date = $date;
            $blog->category = $category;
            $blog->postby = $postby;
            $blog->image = $imgname;
            $blog->save();

            Session::flash('success', 'You have successfully created a post.');

            return redirect()->route('blogs.index');    
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
    public function edit(Blog $blog)
    {
        $menu_active=0;
        $b = $blog;
        return view('admin.editblog', compact('menu_active', 'b'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $title   = Input::get('title');
        $body    = Input::get('body');
        $date    = Input::get('date');
        $category    = Input::get('category');
        $postby    = Input::get('postby');
        $image   = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath,$input['imagename']);
    
        $imgname = $input['imagename'];
    
            $blog->title = $title;
            $blog->body = $body;
            $blog->date = $date;
            $blog->category = $category;
            $blog->postby = $postby;
            $blog->image = $imgname;
            $blog->save();
    Session::flash('success', 'You have successfully updated a post.');


    return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Blog::destroy($id);
        Session::flash('success', 'Successfully deleted!');
        return redirect()->route('blogs.index');
    }
}
