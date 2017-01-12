<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;


class Repertoar extends Controller
{
    public function index()
    {

       // $dt = new DateTime();

        $shows = DB::table('shows')
            ->join('movies', 'movies.id', '=','shows.movie_id')
            ->join('rooms','rooms.id','=','shows.room_id')
            ->select('shows.*','movies.name','rooms.description','movies.uri_poster','movies.yt_video_id')
            ->where('shows.date', '>=' ,'2014-12-04')
            ->orderBy('shows.date')
            ->get();

        return view('dashboardParts.repertoar', ['shows' => $shows]);
    }
}
