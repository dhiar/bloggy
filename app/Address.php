<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';    
    public $timestamps = true; // setting bila cdate & udate tidak ada

    // laravel memberikan aturan/role, kolom mana yang boleh diinput mana yang tidak
    protected $guarded = ['id'];
    protected $fillable = ['user_id','country'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
