<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/productos', function(){
    return view('products.show');
})->name('show.products');
