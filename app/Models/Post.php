<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

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
