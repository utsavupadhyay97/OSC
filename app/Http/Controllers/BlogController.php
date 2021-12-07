<?php

namespace App\Http\Controllers;

use App\Blog;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $blogs = Blog::orderBy('id','desc')->paginate(7);

        // return $Blogs;

        return view('admin.Blogs.index',compact('blogs'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // return $request;
        $input = $request->all();

        
        if($file = $request->file('file')){

            $name = time().$file->getClientOriginalName();
            $file->move('images/Blogs',$name);
            // $image = photo::create(['filename'=>$name]);

            $input['photo'] = $name;
        }

        // $input['user_id'] = Auth::user()->id;

        $input['user_id'] = Auth::user()->id;

        Blog::create($input);
        Session::flash('flash_admin','The Blog has been created');
        return redirect('admin/blogs');

    }


    
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $blog = Blog::find($id);
        // // $categories=category::all();
         return view('admin.blogs.edit',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $blog = Blog::findOrFail($id);
         $input = $request->all();

         if($file = $request->file('file')){

             $name = time().$file->getClientOriginalName();
             $file->move('images/Blogs',$name);
        //     // $image = Photo::create(['filename'=>$name]);
             $input['photo'] = $name;

        //     // $input['photo_id'] = $image->id;
         }

         $blog->update($input);
         Session::flash('flash_admin','The blog has been edited');
         return redirect('admin/blogs');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
        public function destroy($id)
     {
        blog::findOrFail($id)->delete();
          Session::flash('flash_admin','The blog has been deleted');
          return redirect('admin/blogs');
    
    }
}
