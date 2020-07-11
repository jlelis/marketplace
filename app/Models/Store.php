<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class); //(User::class,'id_user');
    }
    public function products()
    {
        //1:N
        return $this->hasMany(Product::class);
    }
}
