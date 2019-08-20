<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str as Str;

class BlogPost extends Model
{
    public static function boot()
    {
        parent::boot();

        static::saving(function($model) {
            $model->slug = Str::slug($model->title . ' ' . $model->id);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
