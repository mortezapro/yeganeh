<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScanMessageModel extends Model
{
    use HasFactory;
    protected $table = "scan_messages";
    protected $primaryKey='id';
    protected $fillable = [
        "name","email","content","status","admin_comment","tracking_code"
    ];
    protected $appends = ['captionStatus'];
    public function getCaptionStatusAttribute() :string
    {
        if($this->attributes["status"] == config("message-status.initialRegistration")){
            return "ثبت اولیه";
        } elseif($this->attributes["status"] == config("message-status.inProgress")){
            return "در حال بررسی";
        } elseif($this->attributes["status"] == config("message-status.checked")){
            return "بررسی شده";
        }
    }
}
