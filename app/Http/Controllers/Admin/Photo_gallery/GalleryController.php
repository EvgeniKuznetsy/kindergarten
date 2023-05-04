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
        $titleId=Title_photo_gallery::find($id);


        $path = $request->file('image')->store('public');
        $path = str_replace('public', '/storage', $path);
        $photo_gallery = Photo_gallery::create([
            'title' => $request->title,
            'image' => $path,
            'title_photo_gallery_id'=>$request->title_photo_gallery_id,


        ]);

        return redirect()->route('admin.photo_gallery.index',compact('id'));


    }
    public function edit(Request $request, Photo_gallery  $photo_gallery) {
        $params = [
            'title' => $request->name,

        ];

        $photo_gallery->update($params);

        return redirect()->route('admin.photo_gallery.index');
    }

    public function delete(Photo_gallery  $photo) {
        $id=$photo->title_photo_gallery_id;
        $photo->delete();

      return redirect()->route('admin.photo_gallery.index',compact('id'));
    }
}
