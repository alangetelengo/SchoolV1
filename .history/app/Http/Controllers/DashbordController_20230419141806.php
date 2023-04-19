<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    //
    public function index(){

        toastr()->success("Bienvenue sur la page administrate");
        return view("accueil");
    }
}
