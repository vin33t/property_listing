<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function slideRemove(Slide $slide){
        $media = Media::where('model_type', 'App\Models\Slide')->where('model_id', $slide->id)->first();
        if ($media){
            unlink('storage/'. $media->path);
            $media->delete();
        }
        $slide->delete();
        return redirect()->back();
    }
}
