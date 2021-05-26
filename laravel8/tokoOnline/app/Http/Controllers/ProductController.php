<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $subJudul = 'Katalog Lengkap';
        $contoh = 'contoh aja';
        return view('products.index', compact(['subJudul', 'contoh']));
    }
}
