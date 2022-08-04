<?php

namespace App\Http\Controllers;

use App\Models\Objekt;
use App\Http\Requests\StoreObjektRequest;
use App\Http\Requests\UpdateObjektRequest;

class ObjektController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreObjektRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreObjektRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Objekt  $objekt
     * @return \Illuminate\Http\Response
     */
    public function show(Objekt $objekt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Objekt  $objekt
     * @return \Illuminate\Http\Response
     */
    public function edit(Objekt $objekt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateObjektRequest  $request
     * @param  \App\Models\Objekt  $objekt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateObjektRequest $request, Objekt $objekt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Objekt  $objekt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objekt $objekt)
    {
        //
    }
}
