<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::get('/agents', [HomeController::class, 'agents'])->name('agents');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blogDetails', [HomeController::class, 'blogDetails'])->name('blogDetails');
Route::get('/propertyDetails/{property}', [HomeController::class, 'propertyDetails'])->name('propertyDetails');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



Route::get('termsCondition', function (){return view('terms_and_condition');})->name('termsCondition');
Route::get('privacyPolicy', function (){return view('privacy_policy');})->name('privacyPolicy');


Route::get('register', [\App\Http\Controllers\AuthController::class, 'registerForm'])->name('register');
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('login', [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function(){

    Route::get('dashboard', function (){
        return view('backend.dashboard');
    })->name('dashboard');
    Route::prefix('category')->name('category.')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
        Route::post('update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::get('destroy/{category}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('property')->name('property.')->group(function (){
        Route::get('/', [PropertyController::class, 'index'])->name('index');
        Route::get('create', [PropertyController::class, 'create'])->name('create');
        Route::post('store', [PropertyController::class, 'store'])->name('store');
        Route::post('update/{property}', [PropertyController::class, 'update'])->name('update');
        Route::get('edit/{property}', [PropertyController::class, 'edit'])->name('edit');
        Route::get('destroy/{property}', [PropertyController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('blog')->name('blog.')->group(function (){
        Route::get('index/', [BlogController::class, 'index'])->name('index');
        Route::get('create', [BlogController::class, 'create'])->name('create');
        Route::post('store', [BlogController::class, 'store'])->name('store');
        Route::post('update/{blog}', [BlogController::class, 'update'])->name('update');
        Route::get('edit/{blog}', [BlogController::class, 'edit'])->name('edit');
        Route::get('destroy/{blog}', [BlogController::class, 'destroy'])->name('destroy');
    });



    Route::prefix('homeSlider')->name('homeSlider.')->group(function(){
        Route::get('/', [SliderController::class, 'index'])->name('index');
        Route::get('create', [SliderController::class, 'create'])->name('create');
        Route::post('store', [SliderController::class, 'store'])->name('store');
        Route::get('edit/{homeSlider}', [SliderController::class, 'edit'])->name('edit');
        Route::post('update/{homeSlider}', [SliderController::class, 'update'])->name('update');
        Route::get('destroy/{homeSlider}', [SliderController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('galleryCategory')->name('galleryCategory.')->group(function(){
        Route::get('/', [GalleryCategoryController::class, 'index'])->name('index');
        Route::get('create', [GalleryCategoryController::class, 'create'])->name('create');
        Route::post('store', [GalleryCategoryController::class, 'store'])->name('store');
        Route::post('update/{galleryCategory}', [GalleryCategoryController::class, 'update'])->name('update');
        Route::get('edit/{galleryCategory}', [GalleryCategoryController::class, 'edit'])->name('edit');
        Route::get('destroy/{galleryCategory}', [GalleryCategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('gallery')->name('gallery.')->group(function(){
        Route::get('/', [GalleryController::class, 'index'])->name('index');
        Route::get('create', [GalleryController::class, 'create'])->name('create');
        Route::post('store', [GalleryController::class, 'store'])->name('store');
        Route::post('update/{gallery}', [GalleryController::class, 'update'])->name('update');
        Route::get('edit/{gallery}', [GalleryController::class, 'edit'])->name('edit');
        Route::get('destroy/{gallery}', [GalleryController::class, 'destroy'])->name('destroy');
    });

    Route::get('slide/remove/{slide}', [\App\Http\Controllers\SlideController::class, 'slideRemove'])->name('slide.remove');

    Route::get('mediaDelete/{media}', [MediaController::class, 'mediaDelete'])->name('mediaDelete');

    Route::get('termAndCondition/index', [\App\Http\Controllers\TermAndConditionController::class, 'index'])->name('termAndCondition.index');
    Route::post('termAndCondition/update/{termAndCondition?}', [\App\Http\Controllers\TermAndConditionController::class, 'update'])->name('termAndCondition.update');

    Route::get('privacyPolicy/index', [\App\Http\Controllers\PrivacyPolicyController::class, 'index'])->name('privacyPolicy.index');
    Route::post('privacyPolicy/update/{termAndCondition?}', [\App\Http\Controllers\PrivacyPolicyController::class, 'update'])->name('privacyPolicy.update');


    Route::post('search-properties', [\App\Http\Controllers\searchController::class, 'index'])->name('searchProperties');




});

