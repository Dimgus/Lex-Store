<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     // $proudcts = Product::paginate(20);
    //     return view('home', compact('products')
    // );

    // }
    public function index(){
        // $proudcts = Product::paginate(20);
        return view('home', [
            'title' => 'Home',
            'active' => 'home',
            'products' => Product::paginate(3)
        ]);
    }
}
