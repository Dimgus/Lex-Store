<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // $proudcts = Product::paginate(20);
        return view('product.index', [
            'title' => 'Product',
            'active' => 'product',
            'products' => Product::paginate(20)
        ]);

    }

}
