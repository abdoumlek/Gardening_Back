<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public function loadImage(Request $request){
        $width = $request->get("width");
        $height = $request->get("height");
        $createThumbnail = $request->get("withThumbnails");
        $filename='';
        if($request->hasFile('file')) {

            $image       = $request->file('file');
            $filename    = time().$image->getClientOriginalName();
        
            if($createThumbnail) {
            $thumbnail = Image::make($image->getRealPath());              
            $thumbnail->fit(150, 150, function ($constraint) {
                $constraint->aspectRatio();
             });
            $thumbnail->save(public_path('thumbnails/' .$filename));
        }
            $img = Image::make($image->getRealPath());              
            $img->fit($width, $height, function ($constraint) {
                $constraint->aspectRatio();
             });
            $img->save(public_path('uploads/' .$filename));}
        return $filename;
    }
}
