<?php

namespace App\Http\Controllers;

use App\Order_Category;
use Illuminate\Http\Request;

class HomeController extends Controller {
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')->except(["home"]);
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function home()
    {
        return view('welcome');
    }

    public function rates()
    {
        $categories = Order_Category::all();
        return view('rates',compact('categories'));
    }

}
