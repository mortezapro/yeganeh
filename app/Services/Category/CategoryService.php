<?php
namespace App\Services\Category;
use App\Helpers\Images;
use App\Models\CategoryModel;
use App\Services\Base\BaseService;
use Illuminate\Support\Facades\App;

class CategoryService extends BaseService implements CategoryServiceInterface{
    public function __construct()
    {
        $this->model = App::make(CategoryModel::class);
    }
    public function syncCategory($category,array $categoryIds)
    {
        return $category->categories()->sync($categoryIds);
    }
    public function detachCategory($category)
    {
        if($category->categories->count()){
            $category->categories()->detach(null);
        }
    }
    public function deleteThumbnailFile(CategoryModel $category)
    {
        if($category->thumbnail != "thumbnail.png"){
            $image = new Images();
            $image->deleteFile(config("upload_image_path.category-thumbnail"),$category->thumbnail);
        }
    }

    public function deleteSeoImage(CategoryModel $category)
    {
        if($category->seo_image != "thumbnail.png"){
            $image = new Images();
            $image->deleteFile(config("upload_image_path.seo-image"),$category->seo_image);
        }
    }

    public function getTopCategories()
    {
        return $this->model->withCount("posts")->orderBy("posts_count","desc")->limit(10)->get();
    }
}
