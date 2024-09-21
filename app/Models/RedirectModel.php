<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedirectModel extends Model
{
    protected $table        = "redirects";
    protected $guarded      = "id";
    protected $primaryKey   = "id";
    use HasFactory;
}
