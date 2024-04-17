<?php

namespace App\Http\Controllers;

use App\Models\Category;

class LandlordController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backend.landlord.index', compact('categories'));
    }

    public function create(){
        return view('backend.landlord.create');
    }
}
