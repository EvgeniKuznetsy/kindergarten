<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller as BaseController;


class ContactsController extends BaseController
{
    public function index(){

        return view("contacts");
    }

}
