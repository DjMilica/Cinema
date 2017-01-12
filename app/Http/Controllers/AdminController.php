<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 3.1.17.
 * Time: 14.52
 */

namespace App\Http\Controllers;

use App\Room;
use App\Show;
use Illuminate\Http\Request;
use App\User;
use App\Movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

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

        \Session::flash('success_flash_message', 'Your movie has been added to database.');

        return redirect()->route('dash');
    }

    public function postEraseMovie(Request $request){
        $image_url = Movie::findOrFail($request->input('movies'))->uri_poster;
        Movie::findOrFail($request->input('movies'))->delete();
        File::delete('posters/' . $image_url);

        \Session::flash('success_flash_message', 'The movie has been deleted from database.');
        
        return redirect()->route('dash');
    }

    public function  getAddProjection(){
        $movies = Movie::all();
        $disable = '';

        if ($movies->isEmpty())
        {
            // dugme delete cemo da onemogucimo
            $disable = 'disabled';
        }
        $rooms = Room::all();

        return view('adminPanel.addProjection')->with(['movies' => $movies, 'disable' => $disable, 'rooms'=>$rooms]);
    }

    public function postAddProjection(Request $request)
    {
        $show = new Show();
        $show->movie_id = Movie::findOrFail($request->input('movies'))->id;
        $show->room_id = Room::findOrFail($request->input('rooms'))->id;
        $show->date = $request->input('datetime');
        $show->price = $request->input('price');


        // sacuvamo u bazu
        $show->save();

        \Session::flash('success_flash_message', 'Your projection has been added to database.');

        return redirect()->route('dash');
    }
    
    public function  getDeleteProjection(){
        $movies = Movie::all();
        $disable = '';

        if ($movies->isEmpty())
        {
            // dugme delete cemo da onemogucimo
            $disable = 'disabled';
        }
        $shows = Show::all();
        /*$shows = DB::table('shows')
            ->join('movies', 'movies.id', '=','shows.movie_id')
            ->join('rooms','rooms.id','=','shows.room_id')
            ->select('shows.*','movies.name','rooms.description')
            ->orderBy('shows.date')
            ->get(); */
        return view('adminPanel.deleteProjection')->with(['movies' => $movies, 'disable' => $disable,'shows' => $shows]);
    }

    public function postDeleteProjection(Request $request)
    {
       Show::findOrFail($request->input('shows'))->delete();

        \Session::flash('success_flash_message', 'The projection has been deleted from database.');

        return redirect()->route('dash');
    }

    public function getCustomers(){
        $users = User::all();
        return view('adminPanel.customers')->with(['users'=>$users]);
    }
    public function getProjections(){
        $shows = DB::table('shows')
            ->join('movies', 'movies.id', '=','shows.movie_id')
            ->join('rooms','rooms.id','=','shows.room_id')
            ->select('shows.*','movies.name','rooms.description')
            ->orderBy('shows.date')
            ->get();
        return view('adminPanel.projections')->with(['shows'=>$shows]);
    }
    public function getMovies(){
        $movies = Movie::all();
        return view('adminPanel.movies')->with(['movies'=>$movies]);
    }
}