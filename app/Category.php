<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function get3categorys(){
        return (Category::all()->take(3));
    }
}
