<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['body','user_id','commentable_id','commentable_type'];

    public function commentable()
    {
        $this->morphTo();
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
