<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    public function user()
    {
      return $this->hasOne(User::class);
    }
}
