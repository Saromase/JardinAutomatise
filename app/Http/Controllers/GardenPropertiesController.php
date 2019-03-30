<?php

namespace App\Http\Controllers;

use App\GardenProperties;
use Illuminate\Http\Request;
use App\Traits\BaseModel;

class GardenPropertiesController extends Controller
{
    use BaseModel;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(GardenProperties::find($gardenProperties)->first());
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
        $gardenProperties = GardenProperties::create($request->all());
        return $gardenProperties;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GardenProperties  $gardenProperties
     * @return \Illuminate\Http\Response
     */
    public function show(GardenProperties $gardenProperties)
    {
        return json_encode(GardenProperties::find($gardenProperties)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GardenProperties  $gardenProperties
     * @return \Illuminate\Http\Response
     */
    public function edit(GardenProperties $gardenProperties)
    {
        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GardenProperties  $gardenProperties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GardenProperties $gardenProperties)
    {
        $gardenProperties = GardenProperties::hydrateRequest($gardenProperties, $request->all());
        $gardenProperties->save();
        return $gardenProperties;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GardenProperties  $gardenProperties
     * @return \Illuminate\Http\Response
     */
    public function destroy(GardenProperties $gardenProperties)
    {
        //
    }
}
