<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\homeSlider;
use App\Models\Property;
use App\Models\User;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        $properties = Property::all();
        $categories = Category::all();
        return view('backend.dashboard', compact('properties', 'categories'));
    }

    public function index(Request $request){

       // get all slides where status is 1
        $slides = homeSlider::where('status', 1)->get();
        $properties = Property::where('is_featured', true)->get();
        $agents = User::where('role', 'agent')->withCount('properties')
            ->get();
        $categories = Category::all();
        return view('home', compact('properties', 'agents', 'categories', 'slides'));
    }

    public function about(){
        return view('about');
    }

    public function properties($id = null){
        if($id){
            $properties = Property::where('category_id', $id)->get();
        }else{
            $properties = Property::all();
        }
        return view('properties', compact('properties'));
    }

    public function agents(){
        $agents = User::where('role', 'agent')->withCount('properties')->get();
        return view('agents', compact('agents'));
    }

    public function blog(){
        return view('blog');
    }

    public function blogDetails(){
        return view('blogDetails');
    }

    public function contact(){
        return view('contact');
    }

    public function propertyDetails(Property $property){
        return view('propertyDetails', compact('property'));
    }


    public function galleries($id = null){

        if($id){
            $galleries = Gallery::where('gallery_category_id', $id)->get();
//            dd($galleries);
        }else{
            $galleries = Gallery::all();
        }
        $galleryCategories = GalleryCategory::all();
        return view('gallery', compact('galleries', 'galleryCategories'));
    }

    public function appraisal(){
        return view('freeAppraisal');
    }
}
