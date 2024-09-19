<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontBlogController extends Controller
{
    protected mixed $blogService;
    public function __construct()
    {
        $this->blogService = App::make(BlogServiceInterface::class);
    }

    public function index()
    {

    }
}
