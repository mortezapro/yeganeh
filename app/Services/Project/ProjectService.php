<?php
namespace App\Services\Project;

use App\Models\ProjectModel;
use App\Services\Base\BaseService;
use App\Services\Base\BaseServiceInterface;
use Illuminate\Support\Facades\App;

class ProjectService extends BaseService {
    public function __construct()
    {
        $this->model = App::make(ProjectModel::class);
    }
}
