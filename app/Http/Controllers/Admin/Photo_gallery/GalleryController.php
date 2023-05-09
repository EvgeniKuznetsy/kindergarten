<?php

namespace App\Http\Controllers\Admin\Photo_gallery;

use App\Models\Photo_gallery;

use App\Models\Title_photo_gallery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class GalleryController extends BaseController
{
    public function create(Request $request): \Illuminate\Http\RedirectResponse
    {
        $id=$request->title_photo_gallery_id;

        $path = $request->file('image')->store('public');
        $path = str_replace('public', '/storage', $path);
        $photo_gallery = Photo_gallery::create([
            'image' => $path,
            'title_photo_gallery_id'=>$request->title_photo_gallery_id,


        ]);

        return redirect()->route('admin.photo_gallery.index',compact('id'));


    }
    public function edit(Request $request, Photo_gallery  $photo) {
        $params = [];
        if ($request->image) {
            $path = $request->file('image')->store('public');
            $params['image'] = str_replace('public', '/storage', $path);
        }
        $photo->update($params);

        $id=$photo->title_photo_gallery_id;
        return redirect()->route('admin.photo_gallery.index',compact('id'));
    }

    public function delete(Photo_gallery  $photo) {
        $id=$photo->title_photo_gallery_id;
        $photo->delete();

      return redirect()->route('admin.photo_gallery.index',compact('id'));
    }
}
