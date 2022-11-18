<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Consomation;
use App\Models\Medicament;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $categories = Categorie::with('user')->get();
        $medicaments = Medicament::all();
        $consomations = Consomation::all();
        return view('index', compact(['medicaments','categories','consomations']));
    }
}
