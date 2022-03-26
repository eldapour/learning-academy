<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $guarded = ['id'];

    public static function create(array $array)
    {
    }

    public function courses()
    {

        return $this->hasMany('App\Course');
    }
}
