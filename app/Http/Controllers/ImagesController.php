<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller {

    public function serveImg($image)
    {
        $storagePath = storage_path('/resources/images/{{image}}');

        return Image::make($storagePath)->response();
    }
}