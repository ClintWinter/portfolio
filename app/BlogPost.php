<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str as Str;

class BlogPost extends Model
{

    protected $fillable = ['title', 'body', 'reads', 'slug', 'cover_img_url', 'published', 'published_at'];

    protected $visible = ['title', 'body', 'reads', 'slug', 'cover_img_url', 'published', 'published_at'];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function($model) {
            $model->slug = Str::slug($model->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function read()
    {
        $this->reads = $this->reads + 1;
        $this->save();
    }
}
