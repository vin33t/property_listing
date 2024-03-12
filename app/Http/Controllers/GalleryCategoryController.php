<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\GalleryCategory;
use App\Models\Media;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    public function index(){
        $galleryCategories = GalleryCategory::all();
        return view('backend.galleryCategory.create', compact('galleryCategories'));
    }

    public function create(){
        return view('backend.galleryCategory.create');
    }

    public function store(GalleryCategoryRequest $request){
        $galleryCategory = GalleryCategory::create($request->all());
        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/');
                Media::create([
                    'model_id' => $galleryCategory->id,
                    'model_type' => 'App\Models\GalleryCategory',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('galleryCategory/');
    }

    public function edit(GalleryCategory $galleryCategory){
        return view('backend.galleryCategory.edit', compact('galleryCategory'));
    }

    public function update(GalleryCategory $galleryCategory, GalleryCategoryRequest $request){
        $galleryCategory->update($request->all());
        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/');
                Media::create([
                    'model_id' => $galleryCategory->id,
                    'model_type' => 'App\Models\GalleryCategory',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('galleryCategory/');
    }

    public function destroy(GalleryCategory $galleryCategory){
        $medias = Media::where('model_type', 'App\Models\GalleryCategory')->where('model_id', $galleryCategory->id)->get();
        foreach ($medias as $media){
            if ($media->path){
                unlink('storage/'. $media->path);
            }
            $media->delete();
        }
        $galleryCategory->delete();
        return redirect('galleryCategory/');
    }
}
