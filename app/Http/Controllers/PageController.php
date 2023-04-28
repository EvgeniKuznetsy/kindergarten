<?php

namespace App\Http\Controllers;



use App\Models\For_parents;
use App\Models\News;

class PageController extends Controller
{
    public function news(){
        $news = News::orderByDesc('id')->limit(5)->get();

        return view('news', compact('news'));
    }
    public function parents(){
        $parents= For_parents::orderByDesc('id')->limit(5)->get();

        return view('parents', compact('parents'));
    }
    public function reloc(){
        return view('main');
    }

}
