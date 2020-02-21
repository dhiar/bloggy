<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = ['id'];
    protected $table = 'country';    
    public $timestamps = true;
    protected $fillable = ['name'];

    public function article(){
        return $this->hasManyThrough(Article::class, User::class, 'country_id');
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
