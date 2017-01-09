<?php
/**
 * Created by PhpStorm.
 * User: milica
 * Date: 3.1.17.
 * Time: 14.52
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        return view('adminPanel.dash');
    }
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
        return view('dashboardParts.rating');

    }

    public function getRepertoar()
    {
        return view('dashboardParts.repertoar');

    }
    /**
     * Tells if I'm an Admin
     * @param $currentUser
     * @return true if I'm an admin, false otherwise
     */

}