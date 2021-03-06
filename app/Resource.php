<?php

namespace App;

use App\Language;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = ['name', 'url', 'resource_type', 'language_id'];

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }
}
