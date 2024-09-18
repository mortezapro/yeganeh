<?php
namespace App\Services\Contact;
use App\Models\MessageModel;
use App\Services\Base\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ContactService extends BaseService implements ContactServiceInterface {
    public function __construct()
    {
        $this->model = App::make(MessageModel::class);
    }

    public function morteza()
    {

    }
}
