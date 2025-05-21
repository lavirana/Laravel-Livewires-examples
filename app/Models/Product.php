<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'detail', 'status'];

    public function variants(){
        return $this->hasMany(variant::class);
    }
}
