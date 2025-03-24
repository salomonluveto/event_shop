<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client.accueil');
    }
    public function event(){
        return view('client.evenement');
    }
    public function contact(){
        return view('client.contact');
    }
}
