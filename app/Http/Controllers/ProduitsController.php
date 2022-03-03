<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    //
    function admin()
    {
        return view('produits.admin');
    }
    function cadre()
    {
        return view('produits.cadre');
    }
    function technicien()
    {
        return view('produits.technicien');
    }
}
