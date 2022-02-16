<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'type'];

    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = strtolower($value);
    }

    public function languages(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Language::class)->withTimestamps();
    }

    public function getLanguagesStrAttribute()
    {
        return $this->languages()->pluck('name')->join(',');
    }
}
