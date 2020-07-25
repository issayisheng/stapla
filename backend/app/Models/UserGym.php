<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserGym extends BaseUuid
{
    protected $table = 'user_gyms';

    protected $fillable = [
        'user_id', 'gym_id', 'status'
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
