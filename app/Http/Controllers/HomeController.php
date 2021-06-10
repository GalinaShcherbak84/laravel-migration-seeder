<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacchetto;

class HomeController extends Controller
{
    public function index(){
        $pacchetti = Pacchetto::all();
        dump($pacchetti);
    
        return view ('home',compact('pacchetti'));
    }
}
