<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // bila nama table di db tidak menggunakan postfix `s` , maka di-set dengan ini :
    // protected $table = 'nama_db';
    protected $table = 'blogs';    

    // dhiar
    public $timestamps = false; // setting bila cdate & udate tidak ada

    // laravel memberikan aturan/role, kolom mana yang boleh diinput mana yang tidak
    protected $fillable = ['title','description'];
    // protected $guarded = ['role']; // tidak boleh di-input
}
