<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'category';
    protected $keyType = 'string';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    public $timestamps = true;
    protected $guarded = [];

    public function subCategory(): HasMany
    {
        return $this->hasMany(SubCategory::class, 'category_slug', 'slug');
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'category_slug', 'slug');
    }
}
