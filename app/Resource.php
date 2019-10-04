<?php

namespace App;

use App\Language;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }
}
