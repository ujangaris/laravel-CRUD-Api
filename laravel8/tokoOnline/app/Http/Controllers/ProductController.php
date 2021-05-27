<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        // dd($products);
        return view('products.index', compact('products'));
    }

    function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('/products');
    }
}
