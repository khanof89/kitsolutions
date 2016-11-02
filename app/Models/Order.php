<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name','company', 'house_no', 'address', 'city', 'state', 'zip_code', 'phone', 'product_id', 'color', 'size', 'quantity', 'transaction_id'];
}
