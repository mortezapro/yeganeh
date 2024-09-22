<?php

namespace App\Models;

use App\Traits\Categorizable;
use App\Traits\Commentable;
use App\Traits\Galleriable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class PostModel extends Model
{
    use HasFactory,Categorizable,Commentable,Galleriable;

    protected $table = "posts";
    protected $primaryKey='id';
    protected $fillable = [
        "title","slug","description","seo_title","seo_description","seo_image","content","status","user_id","indexable","canonical","thumbnail"
    ];

    protected $casts = [
        'indexable' => 'boolean',
    ];
    protected $appends = ['captionIndexable','captionStatus'];
    public function user()
    {
        return $this->belongsTo(User::class,"user_id");
    }

    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("user")->with("categories")->orderBy("id","desc");
        });
    }

    public function setContentAttribute($value)
    {
        $this->attributes["content"] = htmlspecialchars($value);
    }

    public function getContentAttribute($value)
    {
        return html_entity_decode($value);
    }

    public function setIsActiveAttribute($value)
    {
        $this->attributes['indexable'] = $value ? 1 : 0;
    }

    public function getPersianDateAttribute():string
    {
        return Jalalian::forge($this->attributes["created_at"])->ago();
    }

    public function getCaptionIndexableAttribute():string
    {
        if($this->attributes["indexable"]){
            return "بله";
        } else {
            return "خیر";
        }
    }

    public function getCaptionStatusAttribute() :string
    {
        if($this->attributes["status"] == config("post-status.published")){
            return "انتشار";
        } elseif($this->attributes["status"] == config("post-status.draft")){
            return "پیش‌نویس";
        } else {
            return "-";
        }
    }

    public function scopePublished($query)
    {
        return $query->where('status', config("post-status.published"));
    }

    public function scopeDraft($query)
    {
        return $query->where('status', config("post-status.draft"));
    }

    public function scopeArticle($query)
    {
        return $query->where('type', config("post-type.article"));
    }

    public function scopeNews($query)
    {
        return $query->where('type', config("post-type.news"));
    }

    public function scopeEvent($query)
    {
        return $query->where('type', config("post-type.event"));
    }

    public function scopeVideo($query)
    {
        return $query->where('type', config("post-type.video"));
    }

    public function scopeSolution($query)
    {
        return $query->where('type', config("post-type.solution"));
    }

    public function scopeDownload($query)
    {
        return $query->where('type', config("post-type.download"));
    }
}
