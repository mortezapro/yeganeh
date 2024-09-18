<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Contact\ContactServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
