<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['room_id', 'row', 'column', 'exist'];
    protected $hidden = ['id', 'created_at', 'updated_at', 'remamber_token'];

    //ima samo jednu rezervaciju
    
    public function reservation() {
        return $this->belongsTo('App\Reservation');
    }

    public function room() {
        return $this->belongsTo('App\Room');
    }

}
