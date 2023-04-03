<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;


class IndexController extends BaseController
{
    public function __invoke()
    {
        return view('admin.post.index');
    }
}
