<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class UserProductController extends Controller
{
    public function index() 
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('products', compact('products', 'total'));
    }


}
