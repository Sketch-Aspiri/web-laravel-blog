<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Heart extends Model
{
    protected $fillable = [
        'user_id',
        'heartable_type',
        'heartable_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function heartable()
    {
        return $this->morphTo();
    }
}
