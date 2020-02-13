<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // dhiar
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
