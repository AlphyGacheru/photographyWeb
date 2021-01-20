<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::group(['middleware'=>'HtmlMinifier'], function(){ 
  
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    
    Route::get('/services', function () {
        return view('services');
    })->name('services');
    
    Route::get('/testimonials', function () {
        return view('testimonials');
    })->name('testimonials');
    
    Route::get('/blog', function () {
        return view('blog');
    })->name('blog');
    
    Route::get('/eachBlog', function () {
        return view('eachBlog');
    })->name('eachBlog');
    
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    
    Route::get('/images/family-images-photography', function () {
        return view('familyImages');
    })->name('familyImages');
    
    Route::get('/images/wedding-images-photography', function () {
        return view('weddingImages');
    })->name('weddingImages');
    
    Route::get('/images/travel-images-photography', function () {
        return view('travelImages');
    })->name('travelImages');
    
    Route::get('/images/nature-images-photography', function () {
        return view('natureImages');
    })->name('natureImages');
    
    Route::get('/images/fashion-images-photography', function () {
        return view('fashionImages');
    })->name('fashionImages');
    
    Route::get('/images/portrait-images-photography', function () {
        return view('portraitImages');
    })->name('portraitImages');
  
  });