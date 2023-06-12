<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'text', 'img', 'category_id', 'price','password',];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
