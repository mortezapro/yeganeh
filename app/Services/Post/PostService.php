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

    public function getForBlog(int $perPage,string $search=null, CategoryModel $category = null)
    {
        if($category){
            return $this->model->whereHas("categories",function ($q) use ($category){
                return $q->where("id",$category->id);
            })->when($search,function ($q) use ($search){
                return $q->where("title","like","%$search%");
            })->latest()->paginate($perPage);
        }
        return $this->model->when($search,function ($q) use ($search){
            return $q->where("title","like","%$search%");
        })->latest()->paginate($perPage);
    }

    public function getAllForBlog(int $perPage,string $search=null, string $type=null)
    {
        $type = config("post-type.".$type);
        return $this->model->when($search,function ($q) use ($search){
            return $q->where("title","like","%$search%");
        })->when($type,function ($q) use ($type){
            return $q->where("type",$type);
        })->latest()->paginate($perPage);
    }
    public function related(PostModel $post)
    {
        if($post->categories->count() > 0){
            return $this->model->whereHas("categories",function ($q) use ($post){
                return $q->whereIn("categories.id",$post->categories->pluck("id"));
            })->where("id","!=",$post->id)->latest()->limit(8)->get();
        }
    }
}
