<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Post\PostServiceInterface;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use function view;

class HomePageController extends Controller
{
    protected PostServiceInterface $postService;
    public function __construct()
    {
        $this->postService = App::make(PostServiceInterface::class);
    }
    public function index()
    {
        $topPosts = $this->postService->get(["type" => config("post-type.article")],[],3);
        return view("front.home.creative",compact("topPosts"));
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
