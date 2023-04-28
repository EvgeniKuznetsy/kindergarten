<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Parents\ParentsController;
use App\Models\News;
use App\Models\For_parents;
use Illuminate\Routing\Controller;


class   IndexController extends Controller
{

    public function index()
    {

        return view('layouts.admin');
    }
    public function news() {
        $news = News::get();
        return view('admin.news.index', compact('news'));
    }

    public function newsCreate() {
        return view('admin.news.create');
    }

    public function newsUpdate(news $news) {
        return view('admin.news.edit', compact('news' ));
    }
    public function parents() {
        $parents = For_parents::get();
        return view('admin.parents.index', compact('parents'));
    }
    public function parentsCreate() {
    return view('admin.parents.create');
}


    public function parentsUpdate(For_parents $parents) {
        return view('admin.parents.edit', compact('parents' ));
    }



}
