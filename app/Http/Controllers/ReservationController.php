<?php //

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Reservation;
use App\Movie;
use App\Seat;
use App\Show;
use App\Room;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();

        return view('/dashboardParts/reservation', ['reservations' => $reservations]);
    }


}
