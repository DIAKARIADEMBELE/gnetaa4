<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {
        return view('administrateurs.home');
    }

    /**public function sous_administrateur()
    {
        return view('administrateur.sous_administrateur');
    }

    public function super_administrateur()
    {
        return view('administrateur.super_administrateur');
    } **/
}
