<?php

namespace App\Livewire;

use Appstract\Options\Option;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutUs extends Component
{

   use WithFileUploads;
    public $about;
    public $heading;
    public $leftSideImage;
    public $bottomImage;
    public $videoUrl;
    public $status = false;
    public function mount()
    {
        $this->about = \option('about', '');
        $this->heading = \option('heading', '');
        $this->leftSideImage = \option('about_leftSideImage', '');
        $this->bottomImage = \option('about_bottomImage', '');
        $this->videoUrl = \option('about_videoUrl', '');
    }

    public function render()
    {
        return view('livewire.about-us');
    }

    public function save(){
        $lftImg = $this->leftSideImage->store('public');
        $btmImg = $this->bottomImage->store('public');
        option(['about'=>$this->about]);
        option(['aboutt_heading'=>$this->heading]);
        option(['about_leftSideImage'=> str_replace('public/', '', $lftImg)]);
        option(['about_bottomImage'=> str_replace('public/', '', $btmImg)]);
        option(['about_videoUrl'=>$this->videoUrl]);
        session()->flash('success', 'About us page updated successfully');

        $this->status = true;
    }
}
