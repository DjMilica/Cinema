<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 3.1.17.
 * Time: 14.52
 */

namespace App\Http\Controllers;

use App\User;
use App\Movie;
use App\Rating;

use Illuminate\Support\Facades\DB;
use App\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    
    public function getAboutUs()
    {
        return view('dashboardParts.aboutUs');

    }


    public function getReservation()
    {
        return view('dashboardParts.reservation');

    }


    public function getContact()
    {
        return view('dashboardParts.contact');

    }



    public function getRating()
    {

        $movies = Movie::all();

        return view('dashboardParts.rating', ['movies' => $movies]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postStoreRating(Request $request)

    {

        //drugi argument su pravila!
        $this->validate($request,[
            'movies' => '',
            'rating' => 'required|numeric|between:0,10'
        ]);
        // ko je trenutno ulogovan, taj ocenjuje
        $rating = new Rating();
        $rating->user_id = $request->user()->id;
        $rating->movie_id = Movie::findOrFail($request->input('movies'))->id;

        $rating->rating = $request->input('rating');


        // sacuvamo u bazu
        $rating->save();


        \Session::flash('success_flash_message', 'Uspesno ste ocenili film.');
        return redirect()->route('viewRating');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewRating()
    {

        $shows = DB::table('ratings')
            ->join('movies', 'movies.id', '=','ratings.movie_id')
            ->groupBy('ratings.movie_id')
            ->select('movies.name','movies.uri_poster', DB::raw('avg(rating) as total'))
            ->get();

        return view('dashboardParts.viewRating', ['shows' => $shows]);

    }



    public function getRepertoar()
    {
        return view('dashboardParts.repertoar');

    }
    /**
     * 
     
     */

}