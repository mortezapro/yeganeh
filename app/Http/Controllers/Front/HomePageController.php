<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function view;

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

    public function about()
    {
        return view("front.about.index");
    }

    public function faq()
    {
        return view("front.faq.index");
    }


}
