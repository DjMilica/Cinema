<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = ['name', 'year', 'director', 'yt_video_id', 'uri_poster'];
    protected $hidden = ['id'];

    //lista koje sve projekcije ima neki film
    public function shows() {
        return $this->hasMany('App\Show');
    }
}
