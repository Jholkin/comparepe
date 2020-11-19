<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function principle($category)
    {
        $productsWithPrice = Product::where('category', $category);
        return view('principle');
    }
}
