<?php
namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{


    /* posto nije get, onda parametre cemo izvlaciti iz tela zahteva koji stize serveru.
    To postizemo koristeci laravel dependency in check (?) - preko ovo Request iz Illuminate\Http
    U telu ce biti ono sto u formi(froma u welcome.blade.php u resources)
    pise name="email", tako mu pristupamo preko request objekta */
    public function postSignUp(Request $request){
        //drugi argument su pravila!
        $this->validate($request,[
            //za koji deo request-a => koja pravila razdvojena |, email pravilo postoji ugradjeno, users je tabela
            //ovo radi jedino ako je u tabeli isto nazvana kolona: email!
            //max oznacava maksimalan broj karaktera
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:80',
            'last_name' => 'required|max:80',
            'password' => 'required|min:4'

        ]);

        $email = $request['email'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        //ne zelimo da ubacimo u bazu password ovakav vec enkriptovan!
        //bcrypt funkcija hesuje password
        $password = bcrypt($request['password']);

        $user = new User();
        //mozemo da mu pristupimo sa $user->email jer je taj model povezan sa tabelom users
        $user->email = $email;
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->password = $password;
        $user->role_id = 2;
        $user->save(); //ovo upisuje u bazu ove informacije

        Auth::login($user);
        //vracamo se nazad na welcome view!
        //return redirect()->back();
        //posle ovoga uradjeno php artisan migrate jer je ubacio informacije o bazi, pa da bi se napravile tabele!
        //sada hocemo da kad se sign up-ujemo, da nas odmah prebaci na dashboard!
        //kod view-a zanemarujemo .blade.php!!!!
        return redirect()->route('dashboard');
        /* ovo je lose jer zelimo da login-ujemo naseg korisnika kad se signup-uje,
            a ovako smo ga samo preusmerili na /dashboard na koji mozemo da udjemo i bez sign in.
            Znaci, treba da zastitimo korisnika! zato dodajemo Auth::login($user) */

    }

    public function getDashboard(){
         return view('dashboardParts.dashboard');
        //return redirect()->route('dash');
    }
    public function  postSignIn(Request $request){
        $this->validate($request,[
            //za koji deo request-a => koja pravila razdvojena |, email pravilo postoji ugradjeno, users je tabela
            //ovo radi jedino ako je u tabeli isto nazvana kolona: email!
            //max oznacava maksimalan broj karaktera
            'email' => 'required',
            'password' => 'required'

        ]);
        /* za ovo nam pomaze Auth koje je implementirano u laravelu. Fja attempt vraca true ako
            je uspelo sign in, i vraca false ako nije */
        if(Auth::attempt(['email'=> $request['email'],'password'=> $request['password']])){
            if($request->user()->isAdmin()){
                return redirect()->route('dash');
            }
            else {
                return redirect()->route('dashboard');
            }
        }
        return redirect()->back();
    }

    public function getLogOut(){
        Auth::logout();
        return redirect()->route("home");
    }

    public function getSignIn(){
        return view('signinform');
    }
}