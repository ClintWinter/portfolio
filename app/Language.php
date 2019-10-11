<?php

namespace App;

use App\Resource;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name'];

    public function resources()
    {
        return $this->belongsToMany('App\Resource');
    }
}
