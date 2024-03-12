<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Category;
use App\Models\Media;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(PropertyRequest $request){
        $property = Property::create($request->all());
        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/');
                Media::create([
                    'model_id' => $property->id,
                    'model_type' => 'App\Models\Property',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('property/');
    }

    public function edit(Property $property){
        $users = User::all();
        $categories = Category::all();
        return view('backend.property.edit', compact('property', 'users', 'categories'));
    }

    public function update(Property $property, PropertyRequest $request){
//        dd($request->all());
        $property->update($request->all());

        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/');
                Media::create([
                    'model_id' => $property->id,
                    'model_type' => 'App\Models\Property',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('property/');
    }

    public function destroy(Property $property){
        $medias = Media::where('model_type', 'App\Models\Property')->where('model_id', $property->id)->get();
        foreach ($medias as $media){
            if ($media->path){
                unlink('storage/'. $media->path);
            }
            $media->delete();
        }
        $property->delete();
        return redirect('property/');
    }
}
