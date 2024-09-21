<?php

namespace App\Models;

use App\Traits\Categorizable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory,Categorizable;
    protected $table="categories";
    protected $primaryKey="id";
    protected $fillable = [
        "title","slug","seo_description","seo_title","canonical","content","indexable","seo_image","thumbnail"
    ];
    protected $casts = [
        'indexable' => 'boolean',
    ];

    protected $appends = ['captionIndexable'];

    public function user()
    {
        return $this->belongsTo(User::class,"user_id");
    }

    public function key()
    {
        return $this->morphedByMany(ProductKeyModel::class,"categorizable","categorizables");
    }

    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("categories")->orderBy("id","desc");
        });
    }

    public function posts()
    {
        return $this->morphedByMany(PostModel::class,"categorizable","categorizables");
    }

    public function products()
    {
        return $this->morphedByMany(ProductModel::class,"categorizable","categorizables");
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
