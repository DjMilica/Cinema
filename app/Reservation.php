<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['user_id', 'show_id', 'seat_id'];
    protected $hidden = ['id', 'created_at', 'updated_at', 'remamber_token'];

    //jedna rezervacija ima vise mesta, jedno mesto ima samo jednu rezervaciju (to je u seats)
    public function seats() {
        return $this->hasMany('App\Seat');
    }

    public function show() {
        return $this->belongsTo('App\Show');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}