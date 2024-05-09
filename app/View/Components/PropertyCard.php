<?php

namespace App\View\Components;

use App\Models\Property;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PropertyCard extends Component
{
    public function __construct(public Property $property)
    {
        //
    }
    public function render(): View
    {
        return view('components.property-card');
    }
}
