<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    $result = DB::table('categories')->get();

    return view('welcome',['categories'=> $result] );
});


Route::get('/product', function () {



    $result = DB::table('products')->get();

    return view('product', ['products'=> $result] );
});



Route::get('/product/{id}', function ($id) {

    $result = DB::table('products')->where('category_id',$id)->get();

    return view('product',['products'=> $result] );
});



Route::get('/category', function () {
    return view('category');
});




Route::get('/about', function () {
    return view('about');
});



Route::get('/contact', function () {
    return view('contact');
});
