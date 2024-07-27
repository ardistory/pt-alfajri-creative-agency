<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategory extends Model
{
    protected $table = 'subcategory';
    protected $keyType = 'string';
    protected $primaryKey = 'slug';
    public $incrementing = false;
    public $timestamps = true;
    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_slug', 'slug');
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'category_slug', 'slug');
    }
}
