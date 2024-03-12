<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backend.category.index', compact('categories'));
    }

    public function create(){
        return view('backend.category.create');
    }

    public function store(CategoryRequest $request){
        $category = Category::create($request->all());
        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/');
                Media::create([
                    'model_id' => $category->id,
                    'model_type' => 'App\Models\Category',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('category/');
    }

    public function edit(Category $category){
        return view('backend.category.edit', compact('category'));
    }

    public function update(Category $category, CategoryRequest $request){
        $category->update($request->all());
        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/');
                Media::create([
                    'model_id' => $category->id,
                    'model_type' => 'App\Models\Category',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('category/');
    }

    public function destroy(Category $category){
        $medias = Media::where('model_type', 'App\Models\Category')->where('model_id', $category->id)->get();
        foreach ($medias as $media){
            if ($media->path){
                unlink('storage/'. $media->path);
            }
            $media->delete();
        }
        $category->delete();
        return redirect('category/');
    }
}
