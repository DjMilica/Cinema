<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use App\Movie;
use App\Seat;
use App\Show;
use App\Reservation;
use App\Room;

class RepertoarController extends Controller {

    function mojSort($a, $b) {

        return ($a['datum'] < $b['datum'])? -1: 1;
    }

    public function index() {

        // $dt = new DateTime();
        //nema potrebe ovo raditi, zato sluzi laravel, da vam olaska :)
//        $shows = DB::table('shows')
//            ->join('movies', 'movies.id', '=','shows.movie_id')
//            ->join('rooms','rooms.id','=','shows.room_id')
//            ->select('shows.*','movies.name','rooms.description','movies.uri_poster','movies.yt_video_id')
//            ->where('shows.date', '>=' ,'2014-12-04')
//            ->orderBy('shows.date')
//            ->get();
        //nije potrebno ovo gore jer ima funkcija u modelu koja radi join select
        $shows = Show::all();
        $niz = array();
        foreach ($shows as $show){
            $naziv = $show->movie->name;
            $id = $show->id;
            $mesto = $show->room->description;
            $datum = $show->date;
            $cena = $show->price;
            $yt = $show->movie->yt_video_id;
            $slika = $show->movie->uri_poster;

            $niz[] = array('naziv'=>$naziv,'id'=>$id,'mesto'=>$mesto,'datum'=>$datum,'cena'=>$cena,'yt'=>$yt,'slika'=>$slika,);
        }
        usort($niz, array($this, 'mojSort'));
        return view('dashboardParts.repertoar', ['shows' => $niz]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $show = Show::findOrFail($id);
        //iz modela funkcija isto napravljena
        //izabere tacno sobu u kojoj je ta projekcija jer u tabeli show imamo room_id
        $room = $show->room;
        $seats = $room->seats;
        $numOfColumns = 10;
        //sve rezervacije koje su vec napravljene da ne bi moglo isto mesto da se rezervise
        $reservationForShow = Reservation::where('show_id', '=', $id)->get();

        return view('dashboardParts/edit', ['show' => $show, 'room' => $room, 'seats' => $seats, 'numOfColumns' => $numOfColumns, 'reservationForShow' => $reservationForShow]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //$id koji prosledjujemo je id od projekcije - show_id
    public function update(Request $request, $id) {
        //uzima samo one koji su cekirani jer je u name seat_id[]
        //i on hvata value od checkbox-ova, a to je bas id
        $seats = $request->get('seat_id');
//        $alreadyReserved = Reservation::all();

        //mozda nismo nista cekirali, tj. nije izabrao nikakva sedista
        if ($seats != null) {
            foreach ($seats as $seat) {
                $user_id = Auth::user()->id;
                //svi redovi u ovoj tabeli budu prazni
                $reservation = Reservation::create();
                $reservation->user_id = $user_id;
                $reservation->show_id = $id;
                $reservation->seat_id = $seat;
                $reservation->save();
                //var_dump($seat);
                $message = "Uspesno ste rezervisali svoje karte!";
            }
        }else {
            $message = "Niste izabrali sedista!";
        }


        Session::flash('message', $message);

        return redirect('dashboard/repertoar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}