<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Category;
use App\Models\Landlord;
use App\Models\Media;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Masmerise\Toaster\Toaster;

class PropertyController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('backend.property.index', compact('properties'));
    }

    public function create(){
        $users = User::all();
        $categories = Category::all();
        return view('backend.property.create', compact('users', 'categories'));
    }

    public function edit(Property $property){
        $users = User::all();
        $categories = Category::all();
        return view('backend.property.edit', compact('property', 'users', 'categories'));
    }

    public function destroy(Property $property){
        $property->clearMediaCollection('images');
        $property->delete();
        return redirect('property/');
    }
}
