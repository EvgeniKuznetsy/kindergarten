<?php

namespace App\Http\Controllers;



use App\Models\For_parents;
use App\Models\News;
use App\Models\Photo_gallery;
use App\Models\Title_photo_gallery;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function news(){
        $news = News::orderByDesc('id')->limit(5)->get();

        return view('news', compact('news'));
    }
    public function title(){
        $title = Title_photo_gallery::orderByDesc('id')->limit(5)->get();
        $photo = Photo_gallery::orderByDesc('id')->get();

        return view('photo_gallery', compact('title','photo'));
    }
    public function photo(Request $request){
        $id=$request->id;
        $title_name=Title_photo_gallery::where('id',$id)->get();
        $photo = Photo_gallery::where('title_photo_gallery_id',$id)->get();
        return view('photo', compact('photo','id','title_name'));
    }
    public function parents(){
        $parents= For_parents::orderByDesc('id')->limit(5)->get();

        return view('parents', compact('parents'));
    }
    public function reloc(){
        return view('main');
    }

}
