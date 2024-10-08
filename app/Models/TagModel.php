<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    use HasFactory;
    protected $table="tags";
    protected $primaryKey="id";
    protected $fillable = [
        "title","slug","seo_description","seo_title","canonical","content","indexable","seo_image"
    ];
    protected $casts = [
        'indexable' => 'boolean',
    ];

    protected $appends = ['captionIndexable'];


    public function posts()
    {
//        return $this->morphedByMany(PostModel::class,"categorizable","categorizables");
    }

    public function setIndexableAttribute($value): bool
    {
        return $this->attributes['indexable'] = !!$value;
    }

    public function getCaptionIndexableAttribute():string
    {
        if($this->attributes["indexable"]){
            return "بله";
        } else {
            return "خیر";
        }
    }

    public function getIndexableAttribute($value):string
    {
        if($value){
            return "بله";
        } else {
            return "خیر";
        }
    }
}
