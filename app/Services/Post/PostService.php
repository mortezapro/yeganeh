<?php
namespace App\Services\Post;
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
}
