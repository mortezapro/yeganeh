<?php
namespace App\Services\Post;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\MessageModel;
use App\Services\Base\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PostService extends BaseService implements PostServiceInterface {
    public function __construct()
    {
        $this->model = App::make(PostModel::class);
    }

    public function getForBlog(int $perPage,CategoryModel $category = null)
    {
        if($category){
            return $this->model->whereHas("categories",function ($q) use ($category){
                return $q->where("id",$category->id);
            })->latest()->paginate($perPage);
        }
       return $this->get([],[],12);
    }
}
