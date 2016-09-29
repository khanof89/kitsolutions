<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $table = 'category_product';

    public function category()
    {
      return $this->hasOne(ProductCategory::class, 'id','category_id');
    }
}
