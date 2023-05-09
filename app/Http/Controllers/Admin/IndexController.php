<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Parents\ParentsController;

use App\Http\Controllers\Admin\Photo_gallery\GalleryController;

use App\Models\Educator;
use App\Models\Educators_group;
use App\Models\News;
use App\Models\For_parents;
use App\Models\Photo_gallery;
use App\Models\Title_photo_gallery;

use Illuminate\Routing\Controller;


class   IndexController extends Controller
{

    public function index()
    {
        $news=News::orderByDesc('id')->limit(1)->get();
        $parents=For_parents::orderByDesc('id')->limit(1)->get();
        $group = Educators_group::orderByDesc('id')->get();
        $educators= Educator::orderByDesc('id')->limit(1)->get();
        $title = Title_photo_gallery::orderByDesc('id')->get();
        $photo = Photo_gallery::orderByDesc('id')->limit(1)->get();
        return view('includes.admin.content',compact('news','parents','group','educators','title','photo'));
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

    public function educators_groups() {


        $educators_groups= Educators_group::get();

        return view('admin.educators_groups.index', compact('educators_groups'));
    }
    public function educators_groupsCreate() {

        return view('admin.educators_groups.create');
    }
    public function educators_groupsUpdate(Educators_group $groups) {


        return view('admin.educators_groups.edit',compact('groups'));
    }
    public function educators($id) {


        $educators = Educator::where('educator_group_id',$id)->get();

        return view('admin.educators.index', compact('educators','id'));
    }
    public function educatorsCreate($id) {

        return view('admin.educators.create',compact('id'));
    }


    public function educatorsUpdate(Educator $educators) {

        return view('admin.educators.edit', compact('educators' ));
    }
    public function title_photo_gallery() {


        $title_photo_galleries= Title_photo_gallery::get();

        return view('admin.photo_gallery.index', compact('title_photo_galleries'));
    }
    public function title_photo_galleryCreate() {

        return view('admin.photo_gallery.create');
    }
    public function title_photo_galleryUpdate(Title_photo_gallery $gallery) {

        return view('admin.photo_gallery.edit',compact('gallery'));
    }

    public function photo_gallery($id) {

        $titel_photo_gallery = Title_photo_gallery::where('id',$id)->get();
        $photo_gallery= Photo_gallery::where('title_photo_gallery_id',$id)->get();

        return view('admin.gallery.index', compact('photo_gallery','titel_photo_gallery','id'));
    }
    public function photo_galleryCreate($id) {
        $titel_photo_gallery = Title_photo_gallery::get();
        return view('admin.gallery.create',compact('titel_photo_gallery','id'));
    }

    public function photo_galleryUpdate(Photo_gallery $photo) {

        return view('admin.gallery.edit', compact('photo' ));
    }


}
