<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function mediaDelete(Media $media){
        if ($media->path){
            unlink('storage/'. $media->path);
        }
        $media->delete();
        return redirect()->back();
    }
}
