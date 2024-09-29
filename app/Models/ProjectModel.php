<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $primaryKey='id';
    protected $fillable = [
        "title","slug","seo_title","seo_description","seo_image","content","status","type","indexable","canonical","thumbnail"
    ];
    protected $casts = [
        'indexable' => 'boolean',
    ];
    protected $appends = ['captionIndexable','captionStatus',"captionType"];
    public function setContentAttribute($value)
    {
        $this->attributes["content"] = htmlspecialchars($value);
    }

    public function getContentAttribute($value)
    {
        return html_entity_decode($value);
    }

    public function getCaptionIndexableAttribute():string
    {
        if($this->attributes["indexable"]){
            return "بله";
        } else {
            return "خیر";
        }
    }
    public function getCaptionTypeAttribute():string
    {
        if($this->attributes["type"] == config("project-type.scan")){
            return "اسکن";
        } elseif($this->attributes["type"] == config("project-type.software")){
        return "نرم‌افزار";
        } else {
            return "-";
        }
    }

    public function getCaptionStatusAttribute() :string
    {
        if($this->attributes["status"] == config("project-status.in-progress")){
            return "در حال انجام";
        } elseif($this->attributes["status"] == config("project-status.done")){
            return "پایان‌یافته";
        } else {
            return "-";
        }
    }
}
