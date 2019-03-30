<?php

namespace App\Http\Controllers;

use App\Garden;
use Illuminate\Http\Request;
use App\Traits\BaseModel;

class GardenController extends Controller
{

    use BaseModel;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(Garden::find($garden)->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $garden = Garden::create($request->all());
        return $garden;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function show(Garden $garden)
    {
        return json_encode(Garden::find($garden)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function edit(Garden $garden)
    {
        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garden $garden)
    {
        $garden = Garden::hydrateRequest($garden, $request->all());
        $garden->user_id = 1;
        $garden->save();
        return $garden;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garden $garden)
    {
        //
    }
}
