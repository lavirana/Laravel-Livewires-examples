<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class variant extends Model
{
    protected $fillable = ['product_id', 'name', 'price', 'sku'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
