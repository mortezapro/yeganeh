<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view("front.home.index");
    }
    public function index2()
    {
        return view("front.home2.index");
    }
}
