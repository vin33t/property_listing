<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/properties', function () {
    return view('properties');
})->name('properties');
Route::get('/agents', function () {
    return view('agents');
})->name('agents');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog-details', function () {
    return view('blogDetails');
})->name('blogDetails');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

