<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Category;
use App\Models\Media;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('backend.blog.index', compact('blogs'));
    }

    public function create(){
        $categories = Category::all();
        return view('backend.blog.create', compact('categories'));
    }

    public function store(BlogRequest $request){
        $blog = Blog::create($request->all() + ['author_id' => auth()->user()->id]);
        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/blog/images');
                Media::create([
                    'model_id' => $blog->id,
                    'model_type' => 'App\Models\Blog',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('blog/');
    }

    public function edit(Blog $blog){
        $users = User::all();
        $categories = Category::all();
        return view('backend.blog.edit', compact('blog', 'users', 'categories'));
    }

    public function update(Blog $blog, BlogRequest $request){
        $blog->update($request->all());
        if ($request->file('media')){
            $images = $request->file('media');
            foreach ($images as $image){
                $path = $image->store('public/blog/images');
                Media::create([
                    'model_id' => $blog->id,
                    'model_type' => 'App\Models\Blog',
                    'path' => str_replace('public/', '', $path),
                ]);
            }
        }
        return redirect('blog/');
    }

    public function destroy(Blog $blog){
        $medias = Media::where('model_type', 'App\Models\Blog')->where('model_id', $blog->id)->get();
        foreach ($medias as $media){
            if ($media->path){
                unlink('storage/'. $media->path);
            }
            $media->delete();
        }
        $blog->delete();
        return redirect('blog/');
    }
}
