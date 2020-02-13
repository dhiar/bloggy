<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalyticReport extends Model
{
    /**
     * created By : dhiar
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'campaign_id',
        'lead',
        'view',        
        'share',
        'created_at'
    ];
}
