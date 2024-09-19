<?php
namespace App\Services\Blog;
use App\Models\BlogModel;
use App\Models\MessageModel;
use App\Services\Base\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class BlogService extends BaseService implements BlogServiceInterface {
    public function __construct()
    {
        $this->model = App::make(BlogModel::class);
    }
}
