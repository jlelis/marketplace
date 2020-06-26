<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function category()
    {
        return $this->belongsToMany(Product::class); //belongsToMany(Product::class,'nome_tabela');
    }
}
