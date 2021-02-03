<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use ImageKit\ImageKit;

class GalleryController extends Controller
{
    public function galleriesList()
    {
        return Gallery::all();
    }


    public function getGallerytById(Gallery $gallery)
    {
        return Gallery::where('galleries.id', $gallery->id)->first();
    }

    public function store(Request $request)
    {
        $gallery = Gallery::create($request->all());
        return response()->json($gallery, 201);
    }

    public function update(Request $request, Gallery $gallery)
    {
        $gallery->update($request->all());
        return response()->json($gallery, 200);
    }

    public function delete(Request $request, Gallery $gallery)
    {
        $gallery->delete();
        return response()->json(null, 204);
    }

    public function getUploadImageToken()
    {
        $public_key = env('PUBLIC_UPLOAD_IMAGE_KEY');
        $your_private_key = env('PRIVATE_UPLOAD_IMAGE_KEY');
        $url_end_point =env('PRIVATE_UPLOAD_IMAGE_URL');

        $imageKit = new ImageKit(
            $public_key,
            $your_private_key,
            $url_end_point
        );
        
        $authenticationParameters = $imageKit->getAuthenticationParameters();

        return response()->json($authenticationParameters, 200);
    }
}
