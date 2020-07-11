<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    public function category()
    {
        //N:N
        return $this->belongsToMany(Product::class); //belongsToMany(Product::class,'nome_tabela');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
