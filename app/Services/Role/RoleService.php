<?php
namespace App\Services\Role;
use App\Models\MessageModel;
use App\Services\Base\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class RoleService extends BaseService implements RoleServiceInterface {
    public function __construct()
    {
        $this->model = App::make(MessageModel::class);
    }
}
