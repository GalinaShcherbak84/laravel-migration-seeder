<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacchetto;

class HomeController extends Controller
{
    public function index(){
        $pacchetti = Pacchetto::paginate(5);
        //dump($pacchetti);
    
        return view ('home',compact('pacchetti'));
    }
}
