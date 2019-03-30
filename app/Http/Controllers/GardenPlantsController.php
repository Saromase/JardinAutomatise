<?php

namespace App\Http\Controllers;

use App\GardenPlants;
use Illuminate\Http\Request;
use App\Traits\BaseModel;

class GardenPlantsController extends Controller
{
    use BaseModel;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(GardenPlants::find($gardenPlants)->first());
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
        $gardenPlants = GardenPlants::create($request->all());
        return $gardenPlants;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GardenPlants  $gardenPlants
     * @return \Illuminate\Http\Response
     */
    public function show(GardenPlants $gardenPlants)
    {
        return json_encode(GardenPlants::find($gardenPlants)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GardenPlants  $gardenPlants
     * @return \Illuminate\Http\Response
     */
    public function edit(GardenPlants $gardenPlants)
    {
        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GardenPlants  $gardenPlants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GardenPlants $gardenPlants)
    {
        $gardenPlants = GardenPlants::hydrateRequest($gardenPlants, $request->all());
        $gardenPlants->save();
        return $gardenPlants;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GardenPlants  $gardenPlants
     * @return \Illuminate\Http\Response
     */
    public function destroy(GardenPlants $gardenPlants)
    {
        //
    }
}
