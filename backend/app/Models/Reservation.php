<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends BaseUuid
{
    protected $table = 'reservations';

    protected $fillable = [
        'gym_id', 'user_id', 'reserved_start', 'reserved_end'
    ];

    public function gym()
    {
        return $this->belongsTo('App\Models\Gym', 'gym_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
