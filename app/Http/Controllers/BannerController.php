<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Models\Media;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::all();
        return view('backend.banner.index', compact('banners'));
    }

    public function create(){
        return view('backend.banner.create');
    }

    public function store(BannerRequest $request){
        $banner = Banner::create($request->all());
        if ($request->file('media')){
            $path = $request->file('media')->store('public/banner/images');
            Media::create([
                'model_id' => $banner->id,
                'model_type' => 'App\Models\Banner',
                'path' => str_replace('public/', '', $path),
            ]);

        }
        return redirect('banner/');
    }

//    public function edit(Banner $banner){
//        return view('backend.banner.edit', compact('banner'));
//    }

//    public function update(Banner $banner, BannerRequest $request){
//        $banner->update($request->all());
//        if ($request->file('media')){
//            $path = $request->file('media')->store('public/banner/images');
//            Media::create([
//                'model_id' => $banner->id,
//                'model_type' => 'App\Models\Banner',
//                'path' => str_replace('public/', '', $path),
//            ]);
//        }
//        return redirect('banner/');
//    }

    public function destroy(Banner $banner){
        $medias = Media::where('model_type', 'App\Models\Banner')->where('model_id', $banner->id)->get();
        foreach ($medias as $media){
            if ($media->path){
                unlink('storage/'. $media->path);
            }
            $media->delete();
        }
        $banner->delete();
        return redirect('banner/');
    }
}
