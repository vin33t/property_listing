<?php

namespace App\Http\Controllers;

use App\Models\Category;

class ApplicantController extends Controller
{

    public function index(){
        $categories = Category::all();
        return view('backend.applicants.index', compact('categories'));
    }

    public function create(){
        return view('backend.applicants.create');
    }
}
