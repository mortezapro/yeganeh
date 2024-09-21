<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Post\PostServiceInterface;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    protected mixed $blogService;
    public function __construct()
    {
        $this->blogService = App::make(PostServiceInterface::class);
    }

    public function index()
    {

    }
}
