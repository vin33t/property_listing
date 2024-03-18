<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class searchController extends Controller
{
   public function index (Request $request){
        $category = $request->property_type;
        $location = $request->location;
        $price = $request->price;
        $area = $request->area;
       $properties = Property::Where('category_id', $category)
           ->Where('location', 'like', '%'.$location.'%')
           ->Where('area', 'like', '%'.$area.'%')
           ->Where('price', '<=', $price)
           ->get();
       return view('properties', compact('properties'));




   }
}
