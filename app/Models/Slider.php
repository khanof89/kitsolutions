<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function slidertext()
    {
        return $this->hasMany(SliderText::class);
    }
}
