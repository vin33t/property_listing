<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Media;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){

        $galleryCategories = Gallery::all();
        return view('backend.gallery.index', compact('galleryCategories'));
    }

    public function create(){
        $galleryCategories = GalleryCategory::all();
        return view('backend.gallery.create', compact('galleryCategories'));
    }

    public function store(GalleryRequest $request){
        $gallery = Gallery::create($request->all());
        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/');
                Media::create([
                    'model_id' => $gallery->id,
                    'model_type' => 'App\Models\Gallery',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('gallery/');
    }

    public function edit(Gallery $gallery){
        $galleryCategories = GalleryCategory::all();
        return view('backend.gallery.edit', compact('gallery', 'galleryCategories'));
    }

    public function update(Gallery $gallery, GalleryRequest $request){
        $gallery->update($request->all());
        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/');
                Media::create([
                    'model_id' => $gallery->id,
                    'model_type' => 'App\Models\Gallery',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('gallery/');
    }

    public function destroy(Gallery $gallery){
        $medias = Media::where('model_type', 'App\Models\Gallery')->where('model_id', $gallery->id)->get();
        foreach ($medias as $media){
            if ($media->path){
                unlink('storage/'. $media->path);
            }
            $media->delete();
        }
        $gallery->delete();
        return redirect('gallery/');
    }
}
