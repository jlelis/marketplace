<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class); //(User::class,'id_user');
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
