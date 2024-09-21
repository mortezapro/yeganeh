<?php

namespace App\Services\Permission;

use App\Models\PermissionModel;
use App\Models\RoleModel;
use App\Models\User;
use Illuminate\Support\Facades\App;

class PermissionService{

    public function __construct()
    {
        $this->model = App::make(PermissionModel::class);
    }
}
