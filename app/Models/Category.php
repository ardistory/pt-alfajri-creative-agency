<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $keyType = 'string';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    public $timestamps = true;
    protected $guarded = [];
}
