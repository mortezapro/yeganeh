<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Services\Category\CategoryServiceInterface;
use App\Services\Post\PostServiceInterface;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    protected mixed $postService;
    protected mixed $categoryService;
    public function __construct()
    {
        $this->postService = App::make(PostServiceInterface::class);
        $this->categoryService = App::make(CategoryServiceInterface::class);
    }

    public function index(CategoryModel $category = null)
    {
        $topCategories = $this->categoryService->getTopCategories();
        $posts = $this->postService->getForBlog(12,$category);
        return view("front.post.index",compact("posts","topCategories","category"));
    }
}
