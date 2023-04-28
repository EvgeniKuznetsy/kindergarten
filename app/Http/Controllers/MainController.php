<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;


class MainController extends BaseController
{
    public function index(){


        return view("main");

    }

}
