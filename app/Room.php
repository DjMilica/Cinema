<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['description'];
    protected $hidden = ['id', 'created_at', 'updated_at', 'remamber_token'];
    public function shows()
    {
        return $this->hasMany('App\Show');
    }

    public function seats()
    {
        return $this->hasMany('App\Seat');
    }
}
