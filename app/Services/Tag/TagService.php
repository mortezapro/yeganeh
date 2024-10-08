<?php
namespace App\Services\Tag;
use App\Models\TagModel;
use App\Services\Base\BaseService;
use Illuminate\Support\Facades\App;

class TagService extends BaseService implements TagServiceInterface {
    public function __construct()
    {
        $this->model = App::make(TagModel::class);
    }
}
