<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;


class GroupController extends BaseController
{
    public function index(){

        return view("group");
    }

}
