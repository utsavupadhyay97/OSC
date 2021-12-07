<?php

namespace App\Http\Controllers;

use App\Blog;
use App\product;
use App\service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        

        $services= service::take(4)->get();
        $products= product::take(4)->get();
        $blogs= Blog::take(4)->get();
        return view('home',compact('services','products','blogs'));
    }
    public function Ourteam()
    {
        return view('Ourteam');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function products()
    {
        //$products= product::take(5)->get();
        $products= product::all();
        return view('products',compact('products'));
    }
    public function services()
    {
        //$products= product::take(5)->get();
        $services= service::all();
        return view('services',compact('services'));
    }
    public function blogs()
    {
        $blogs= Blog::all();
        return view('blogs',compact('blogs'));
}
}
