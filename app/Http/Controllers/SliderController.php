<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Media;
use App\Models\Slide;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('backend.slider.index', compact('sliders'));
    }

    public function create(){
        return view('backend.slider.create');
    }

    public function edit(Slider $slider){
        return view('backend.slider.edit', compact('slider'));
    }

    public function store(SliderRequest $request){
//dd($request->all());
        $slider = Slider::create($request->all());

        $titleArr = $request->title;
        $slideDescriptionArr = $request->title;
        $mediaArr = $request->file('media');

        if($slider){
            foreach ($titleArr as $key=>$value){
                $slide = new Slide();
                $slide->slider_id = $slider->id;
                $slide->title = $titleArr[$key];
                $slide->slide_description = $slideDescriptionArr[$key];
                $slide->save();

                if ($slide){
                    if($mediaArr != null){
                        $image = $mediaArr[$key]->store('public/slider/images');
                        Media::create([
                            'model_type' => 'App\Models\Slide',
                            'model_id' => $slide->id,
                            'path' => str_replace('public/', '', $image),
                        ]);
                    }

                }

            }
        }
        return redirect('slider/');
    }

    public function status(Slider $slider){
        if($slider->status == 'active'){
            $slider->status = 'inactive';
        }else{
            $slider->status = 'active';
        }
        $slider->save();
        return redirect()->back();
    }

    public function destroy(Slider $slider){
        foreach ($slider->slides as $slide){
            $media = Media::where('model_type', 'App\Models\Slide')->where('model_id', $slide->id)->first();
            if($media){
                unlink('storage/'. $media->path);
            }
            $media->delete();
        }
        $slider->slides()->delete();
        $slider->delete();
        return redirect()->back();
    }

    public function update(SliderRequest $request, Slider $slider){
        foreach ($slider->slides as $slide){
            $media = Media::where('model_type', 'App\Models\Slide')->where('model_id', $slide->id)->first();
            if($media){
                unlink('storage/'. $media->path);
            }
            $media->delete();
        }
        $slider->slides()->delete();
        $titleArr = $request->title;
        $slideDescriptionArr = $request->title;
        $mediaArr = $request->file('media');

        if($slider){
            foreach ($titleArr as $key=>$value){
                $slide = new Slide();
                $slide->slider_id = $slider->id;
                $slide->title = $titleArr[$key];
                $slide->slide_description = $slideDescriptionArr[$key];
                $slide->save();

                if ($slide){
                    if($mediaArr != null){
                        $image = $mediaArr[$key]->store('public/slider/images');
                        Media::create([
                            'model_type' => 'App\Models\Slide',
                            'model_id' => $slide->id,
                            'path' => str_replace('public/', '', $image),
                        ]);
                    }

                }

            }
        }
        return redirect('slider/');
    }
}
