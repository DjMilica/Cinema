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
        $temp = $rating->movie_id;
        $rating->rating = $request->input('rating');


        // sacuvamo u bazu
        $rating->save();

        $grade = DB::table('ratings')
                    ->where('movie_id',$temp)
                    ->select(DB::raw('avg(rating) as total'))
                    ->get();


        DB::table('movies')
            ->where('id', $temp)
            ->update(['rating' => $grade[0]->total]);

        \Session::flash('success_flash_message', 'Uspesno ste ocenili film.');
        return redirect()->route('rating');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function getRepertoar()
    {
        return view('dashboardParts.repertoar');

    }
    /**
     * 
     
     */

}