<?php

namespace App\Http\Controllers;

use App\Models\Category;

class AppointmentController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backend.appointment.index', compact('categories'));
    }


    public function create(){
        return view('backend.appointment.create');
    }


}
