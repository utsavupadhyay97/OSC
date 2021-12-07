<?php

namespace App\Http\Controllers;

use App\photo;
use App\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CreateServiceRequest;

class ServiceController extends Controller
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
        $services=service::all();
        return view('admin.services.index',compact('services'));
    
        //return view('admin.services.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateServiceRequest $request)
    {
        // service::create($request->all());
        // return redirect('/admin/services'); 



        $input = $request->all();

        // return $input;

        
        if($file = $request->file('file')){

            $name = time().$file->getClientOriginalName();
            $file->move('images/services',$name);
            // $image = photo::create(['filename'=>$name]);

            $input['photo'] = $name;
        }

        // $input['user_id'] = Auth::user()->id;

        // $input['user_id'] = Auth::user()->id;

        service::create($input);
        Session::flash('flash_admin','The service has been created');
        return redirect('admin/services');
   
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Service=service::findOrFail($id);
        // return $product;
         return view('Single.serviceindex',compact('Service'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service= service::find($id);
        return view('/admin.services.edit',compact('service'));
   
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
        $service= service::FindOrFail($id);
        $input= $request->all();
   
        $service->update($input);
        return redirect('/admin/services');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        service::findOrFail($id)->delete();
        Session::flash('flash_admin','The service has been deleted');
        return redirect('admin/services');
    
    }
    // public function service()
    // {
    //     $service= service::FindOrFail($id);

        
    //     return view('single.serviceindex');
    // }
}
