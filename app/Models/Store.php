<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use app\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'about',
        'slug'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
