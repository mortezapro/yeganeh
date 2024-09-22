<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Services\Category\CategoryServiceInterface;
use App\Services\Post\PostServiceInterface;
use Illuminate\Http\Request;
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

    public function blog(Request $request, string $type = null)
    {
        $topCategories = $this->categoryService->getTopCategories();
        $search = $request->input("search");
        $posts = $this->postService->getAllForBlog(12,$search,$type);
        return view("front.post.blog",compact("posts","topCategories","type"));
    }

    public function category(Request $request, CategoryModel $category = null)
    {
        $topCategories = $this->categoryService->getTopCategories();
        $search = $request->input("search");
        $posts = $this->postService->getForBlog(12,$search,$category);
        return view("front.post.category",compact("posts","topCategories","category"));
    }

    public function single(PostModel $post)
    {
        $topCategories = $this->categoryService->getTopCategories();
        $relatedPosts = $this->postService->related($post);
        return view("front.post.single",compact("topCategories","post","relatedPosts"));
    }
}
