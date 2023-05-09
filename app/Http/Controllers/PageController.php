<?php

namespace App\Http\Controllers;



use App\Models\For_parents;
use App\Models\News;
use App\Models\Photo_gallery;
use App\Models\Title_photo_gallery;
use App\Models\Educators_group;
use App\Models\Educator;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){

        $photo=Photo_gallery::orderByDesc('id')->limit(5)->get();
        return view("main",compact('photo'));

    }
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
    public function title_group(){
        $group = Educators_group::orderByDesc('id')->limit(5)->get();
        $educator= Educator::orderByDesc('id')->get();

        return view('title_group', compact('group','educator'));
    }
    public function educator(Request $request){
        $id=$request->id;
        $group = Educators_group::where('id',$id)->get();
        $educators= Educator::where('educator_group_id',$id)->get();

        return view('educators', compact('group','id','educators'));
    }
    public function parents(){
        $parents= For_parents::orderByDesc('id')->limit(5)->get();

        return view('parents', compact('parents'));
    }
    public function reloc(){
        return view('main');
    }

}
