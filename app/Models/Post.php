<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str as Str;

class Post extends Model
{

    protected $fillable = [
        'title',
        'body',
        'reads',
        'slug',
        'cover_img_url',
        'published_at'
    ];

    protected $visible = [
        'title',
        'body',
        'reads',
        'slug',
        'cover_img_url',
        'published_at'
    ];

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

    public function markAsRead()
    {
        $this->reads = $this->reads + 1;
        $this->save();

        return $this;
    }

    public function isPublished()
    {
        return (bool) $this->published_at;
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }
}
