<?php

namespace App;//

use Illuminate\Database\Eloquent\Model;

class Analytic extends Model
{
    // field tidak boleh diisi user
    // protected $guarded = ['id','created_at','updated_at']; // khusus id, bukannya tidak harus di-define.

    protected $fillable = ['campaign_id','view','lead','share'];
}
