<?php

namespace App\Http\Controllers;


use App\photo;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
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
     
        $products = product::orderBy('id','desc')->paginate(7);

        return view('admin.products.index',compact('products'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
        return view('admin.products.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {

        // return $request;
        $input = $request->all();

       // return $input;
        if($file = $request->file('file')){

            $name = time().$file->getClientOriginalName();
            $file->move('images/products',$name);
            // $image = photo::create(['filename'=>$name]);

            $input['photo'] = $name;
           // $input['unit_in_stock'] = $unit_in_stock;

        }

        // $input['user_id'] = Auth::user()->id;

        $input['user_id'] = Auth::user()->id;

        product::create($input);
        Session::flash('flash_admin','The post has been created');
        return redirect('admin/products');
   
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
    public function edit($id)
    {
        $product = product::find($id);
        // $categories=category::all();
        return view('admin.products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = product::findOrFail($id);
        $input = $request->all();

        if($file = $request->file('file')){

            $name = time().$file->getClientOriginalName();
            $file->move('images/products',$name);
            // $image = Photo::create(['filename'=>$name]);
            $input['photo'] = $name;

            // $input['photo_id'] = $image->id;
        }

        $product->update($input);
        Session::flash('flash_admin','The post has been edited');
        return redirect('admin/products');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::findOrFail($id)->delete();
        Session::flash('flash_admin','The post has been deleted');
        return redirect('admin/products');
    
    }

    public function cart()
    {
        return view('Cart.cart');
    }
    
}