<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsomationRequest;
use App\Models\Consomation;
use App\Models\Medicament;
use Illuminate\Http\Request;

class ConsomationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function store(ConsomationRequest $request)
    {
        $consomation = Consomation::create($request->validated());
        $medicament = Medicament::where('id', $consomation->medicament_id)->first();
        $medicament->quantite = $medicament->quantite - $consomation->quantite;
        $medicament->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consomation  $consomation
     * @return \Illuminate\Http\Response
     */
    public function show(Consomation $consomation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consomation  $consomation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consomation $consomation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consomation  $consomation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consomation $consomation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consomation  $consomation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consomation $consomation)
    {
        //
    }
}
