<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicamentRequest;
use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(MedicamentRequest $request)
    {
        Medicament::create($request->validated());
        return redirect()->back();
    }

    public function show(Medicament $medicament)
    {
        //
    }

    public function edit(Medicament $medicament)
    {
        //
    }

    public function update(MedicamentRequest $request, Medicament $medicament)
    {
        Medicament::findOrFail($medicament->id)->update($request->validated());
        return redirect()->back();
    }

    public function destroy(Medicament $medicament)
    {
        Medicament::destroy($medicament->id);
        return redirect()->back();
    }
}
