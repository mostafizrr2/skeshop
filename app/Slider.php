<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['slider_title', 'slider_subtitle', 'slider_image',
    'button_one','button_one_color','button_one_link','button_one_text','button_two',
    'button_two_color', 'button_two_link', 'button_two_text' ];
   
}
