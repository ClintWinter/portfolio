<?php

namespace App\Models;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name'];

    public function resources()
    {
        return $this->belongsToMany('App\Models\Resource');
    }
}
