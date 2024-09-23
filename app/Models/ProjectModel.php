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
}
