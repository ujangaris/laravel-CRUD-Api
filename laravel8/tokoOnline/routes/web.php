<?php

use Illuminate\Support\Facades\Route;


Route::get('/products', function () {
    $subJudul = 'Katalog Lengkap';
    $contoh = 'contoh aja';
    return view('products.index',compact(['subJudul','contoh']));
});
