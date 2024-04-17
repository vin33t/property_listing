<?php

namespace App\Http\Controllers;

use App\Models\Category;

class AccountsController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backend.accounts.index', compact('categories'));
    }
}
