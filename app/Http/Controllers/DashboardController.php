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
        $isAdmin = $this->getIsAdmin(Auth::user());

        // Save isAdmin in a session so i don't have to pass it to every page
        // Do I have to put it in the constructor?
        Session::put('isAdmin', $isAdmin);

        $registeredUsers = User::all()->count();
        return view('dashboardParts.dashboard');
    }

    /**
     * Tells if I'm an Admin
     * @param $currentUser
     * @return true if I'm an admin, false otherwise
     */
    public function getIsAdmin($currentUser)
    {
        $adminUsers = DB::table('users')->where('users.id', '=', $currentUser->id)->join('roles', 'users.role_id', '=', 'roles.id')->where('roles.role_description', '=', 'Admin')->get();

        if(count($adminUsers) > 0)
        {
            // I am an admin
            return true;
        }
        else
        {
            // I'm not
            return false;
        }
    }
}