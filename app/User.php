<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
class User extends Model implements Authenticatable
{
    /* php artisan make:model User -m ovako se pravi ovaj model i tabela za bazu kod migrations!
        Bitno je nazivanje User, a tabelu nazivamo users (mnozina, malo slovo) i laravel
        tako otkriva da je users tabela vezana za User model.
        Ako ne nazovemo tako onda atreba da dodamo ovde protected $table = 'imeTabele'
        Ovim donjim use i interfejsom omogucavamo da nasa klasa, nas model, bude autentifikovan
        Da smo hteli da imamo klasu Dog i tabelu dogs za koju bismo hteli da bude autent.
        onda bismo u folderu config, u fajlu auth.php zamenili kod providers, pa model
        App\Dog::class */
    use \Illuminate\Auth\Authenticatable;
}
