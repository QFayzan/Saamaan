<?php

namespace App\Http\Controllers;

use App\Order_Category;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function __construct()
    {
        //$this->middleware('auth')->except(["home"]);
    }

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
