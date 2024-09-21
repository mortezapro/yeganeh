<?php

namespace App\Models;

use App\Traits\Galleriable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageModel extends Model
{
    use HasFactory,Galleriable;
    protected $table = "pages";
    protected $primaryKey = "id";
    protected $fillable = [
        "title","slug","content","indexable","layout_id","canonical","seo_title","seo_description","seo_image","display_header","display_footer"
    ];
    protected $casts = [
        'indexable' => 'boolean',
        'display_header' => 'boolean',
        'display_footer' => 'boolean',
    ];

    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("galleries")->orderBy("id","asc");
        });
    }

    public function getContentAttribute($value)
    {
        return html_entity_decode($value);
    }

    public function setIndexableAttribute($value): bool
    {
        return $this->attributes['indexable'] = !!$value;
    }

    public function getPersianIndexableAttribute($value):string
    {
        if($value){
            return "بله";
        } else {
            return "خیر";
        }
    }

    public function setDisplayHeaderAttribute($value): bool
    {
        return $this->attributes['display_header'] = !!$value;
    }

    public function setDisplayFooterAttribute($value): bool
    {
        return $this->attributes['display_footer'] = !!$value;
    }

}
