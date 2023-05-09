<?php

namespace App\Http\Controllers\Admin\Photo_gallery;


use App\Models\Title_photo_gallery;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class Photo_galleryController extends BaseController
{
    public function create(Request $request,Title_photo_gallery $title_photo_gallery): \Illuminate\Http\RedirectResponse
    {
        $title = $request->get('title');
        Title_photo_gallery::create(compact('title'));


        return redirect()->route('admin.title_photo_gallery.index');
    }
    public function edit(Request $request, Title_photo_gallery $gallery) {
        $params = [
            'title' => $request->title,

        ];

        $gallery->update($params);

        return redirect()->route('admin.title_photo_gallery.index');
    }

    public function delete(Title_photo_gallery  $title_photo_galleries) {
        $title_photo_galleries->delete();

      return redirect()->route('admin.title_photo_gallery.index');
    }
}
