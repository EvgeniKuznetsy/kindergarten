<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;


class IndexController extends BaseController
{
    public function __invoke()
    {

    } public function index()
    {
        return view('layouts.admin');
    }


}
