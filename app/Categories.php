<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Categories extends Model
{
    protected $fillable = ['category_name'];

    public function products()
    {
        return $this -> hasMany(Product::class);
    }
}
