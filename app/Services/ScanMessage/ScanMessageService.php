<?php
namespace App\Services\ScanMessage;
use App\Models\CategoryModel;
use App\Models\ScanMessageModel;
use App\Services\Base\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ScanMessageService extends BaseService implements ScanMessageServiceInterface {
    public function __construct()
    {
        $this->model = App::make(ScanMessageModel::class);
    }
}
