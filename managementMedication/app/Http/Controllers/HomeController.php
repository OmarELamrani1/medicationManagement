<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Medicament;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $categories = Categorie::all();
        $medicaments = Medicament::all();
        return view('index', compact(['medicaments','categories']));
    }
}
