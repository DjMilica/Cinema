<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = ['movie_id', 'room_id', 'date', 'price'];
    protected $hidden = ['id', 'created_at', 'updated_at', 'remamber_token'];

    //prikazuje film za koji je vezana konkretna projekcija
    public function movie() {
        return $this->belongsTo('App\Movie');
    }

    public function room() {
        return $this->belongsTo('App\Room');
    }

    public function reservations() {
        return $this->hasMany('App\Reservation');
    }

}