<?php
namespace App\Services\User;
use App\Models\User;
use App\Services\Base\BaseService;
use Illuminate\Support\Facades\App;

class UserService extends BaseService{
    public function __construct()
    {
        $this->model = App::make(User::class);
    }
}
