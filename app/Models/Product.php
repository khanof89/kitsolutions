<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function colors()
    {
      return $this->hasMany(ProductColor::class);
    }

    public function images()
    {
      return $this->hasMany(ProductImage::class);
    }

    public function reviews()
    {
      return $this->hasMany(ProductReview::class);
    }

    public function sizes()
    {
      return $this->hasMany(ProductSize::class);
    }

    public function tags()
    {
      return $this->hasMany(ProductTag::class);
    }

    public function related()
    {
      return $this->hasMany(RelatedProduct::class);
    }

    public function categories()
    {
      return $this->hasMany(CategoryProduct::class);
    }

    public function quantity()
    {
      return $this->hasOne(ProductQuantity::class);
    }
}
