<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'body', 'price', 'slug'];

    public function store()
    {
        //N:1
        return $this->belongsTo(Store::class);
    }
    public function categories()
    {
        //N:N
        return $this->belongsToMany(Category::class);
    }
}
