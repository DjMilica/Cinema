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
}