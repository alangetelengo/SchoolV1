<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    //
    public function index(){

        toast()->success("Bienvenue sur la page d'accueil")
        return view("accueil");
    }
}
