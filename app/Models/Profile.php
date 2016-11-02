<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['company', 'house_no', 'address', 'city', 'state', 'zip_code', 'phone'];
}
