<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function product(){
        return view('product');
    }

    public function contact(){
        return view('contact');
    }

    public function productinfo(){
        return view('productinfo');
    }
    

//  method selanjutnya untuk bagian front
}
