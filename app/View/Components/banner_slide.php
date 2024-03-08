<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class banner_slide extends Component
{
    // make variable for title, description, image, and link
    public $title;
    public $description;
    public $image;
    public $link;

    public function __construct( $title, $description, $image, $link )
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->link = $link;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner_slide');
    }
}
