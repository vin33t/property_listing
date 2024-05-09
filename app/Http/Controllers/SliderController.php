<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\HomeSlider;
use App\Models\Slide;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index(){
        $sliders = HomeSlider::all();
        return view('backend.homeSlider.index' , compact('sliders'));
    }

    public function create(){
        $formData= [
            'method' => 'POST',
            'url' => route('homeSlider.store')
        ];
        $isEdit = false;

        return view('backend.homeSlider.create')->with(['formData' => $formData, 'isEdit' => $isEdit]);
    }

    public function store(Request $request){
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $homeSlider = new HomeSlider();
        $homeSlider->heading = $request->heading;
        $homeSlider->description = $request->description;
        if ($request->hasFile('image')) {
            $sliderImg = $request->file('image')->store('public');
            $homeSlider->image = str_replace('public/', '', $sliderImg);
            $homeSlider->save();
        }
        return redirect('homeSlider/');
    }

    public function edit(HomeSlider $homeSlider){
        $formData= [
            'method' => 'POST',
            'url' => route('homeSlider.update', $homeSlider->id)

        ];
        $isEdit = true;

        return view('backend.homeSlider.create')->with(['formData' => $formData, 'isEdit' => $isEdit, 'homeSlider' => $homeSlider]);
    }

    public function changeStatus(HomeSlider $homeSlider){
        $homeSlider->status = !$homeSlider->status;
        $homeSlider->save();
        return redirect()->back();
    }

    public function update(Request $request, HomeSlider $homeSlider){
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);

        $homeSlider->heading = $request->heading;
        $homeSlider->description = $request->description;
        if ($request->hasFile('image')) {
            $sliderImg = $request->file('image')->store('public');
            $homeSlider->image = str_replace('public/', '', $sliderImg);
        }
        $homeSlider->save();

        return redirect('homeSlider/');
    }

    public function destroy(HomeSlider $homeSlider){
        $homeSlider->delete();
        return redirect()->back();
    }

}
