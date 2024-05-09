<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSlider extends Component
{
    public function render(): View
    {
        $slides = \App\Models\HomeSlider::where('status', 1)->get();
        return view('components.hero-slider')->with('slides', $slides);
    }
}
