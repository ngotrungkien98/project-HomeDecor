<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;

class Product extends Model
{
    protected $fillable = ['title','price','category_id'];

    public function category()
    {
        return $this -> belongsTo(Categories::class);
    }
}

