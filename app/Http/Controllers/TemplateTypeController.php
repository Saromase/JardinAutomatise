<?php

namespace App\Http\Controllers;

use App\TemplateType;
use Illuminate\Http\Request;
use App\Traits\BaseModel;

class TemplateTypeController extends Controller
{
    use BaseModel;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(TemplateType::find($templateType)->first());
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
        $templateType = TemplateType::create($request->all());
        return $templateType;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TemplateType  $templateType
     * @return \Illuminate\Http\Response
     */
    public function show(TemplateType $templateType)
    {
        return json_encode(TemplateType::find($templateType)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TemplateType  $templateType
     * @return \Illuminate\Http\Response
     */
    public function edit(TemplateType $templateType)
    {
        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TemplateType  $templateType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TemplateType $templateType)
    {
        $templateType = TemplateType::hydrateRequest($templateType, $request->all());
        $templateType->save();
        return $templateType;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TemplateType  $templateType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TemplateType $templateType)
    {
        //
    }
}
