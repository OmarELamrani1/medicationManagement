<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(CategorieRequest $request)
    {
        Categorie::create($request->validated());
        return redirect()->back();
    }

    public function show(Categorie $categorie)
    {
        //
    }

    public function edit(Categorie $categorie)
    {
        //
    }

    public function update(CategorieRequest $request, Categorie $categorie)
    {
        Categorie::findOrFail($categorie->id)->update($request->validated());
        return redirect()->back();
    }

    public function destroy(Categorie $categorie)
    {
        Categorie::destroy($categorie->id);
        return redirect()->back();
    }
}
