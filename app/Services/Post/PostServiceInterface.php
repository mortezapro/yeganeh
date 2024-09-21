<?php
namespace App\Services\Post;
use App\Models\CategoryModel;
use App\Services\Base\BaseServiceInterface;

interface PostServiceInterface extends BaseServiceInterface{
    public function getForBlog(int $perPage,CategoryModel $category = null);
}
