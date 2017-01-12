<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 3.1.17.
 * Time: 14.52
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        
        $registeredUsers = User::all()->count();
        return view('adminPanel.dash')->with('registeredUsers', $registeredUsers);
    }

    public function  addMovie(){
        return view('adminPanel.addMovie');
    }

    public function  deleteMovie(){
        $movies = Movie::all();
        $disable = '';

        if ($movies->isEmpty())
        {
            // dugme delete cemo da onemogucimo
            $disable = 'disabled';
        }
        return view('adminPanel.deleteMovie')->with(['movies' => $movies, 'disable' => $disable]);
    }

    public function postStoreMovie(Request $request)
    {
        $movie = new Movie();
        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->yt_video_id = $request->input('yt_video_id');

        if ($request->file('uri_poster')->isValid()) {
            // proverava da li je slika
            $this->validate($request, [
                'uri_poster' => 'image',
            ]);

            // dobijamo ekstenziju
            $fileExtension = $request->file('uri_poster')->getClientOriginalExtension();

            // preimenujemo fajl
            $fileName = $request->input('name') . '_' . $request->input('year') . '.' . $fileExtension;

            // pomeramo sliku u public/posters
            $folder = '/posters/';
            // move (destination, new_filename);
            $request->file('uri_poster')->move(base_path() . '/public/' . $folder, $fileName);

            // saving in the db where the file is
            $movie->uri_poster = $fileName;
        }

        // sacuvamo u bazu
        $movie->save();

        \Session::flash('success_flash_message', 'Your movie has been created.');

        return redirect()->route('dash');
    }

}