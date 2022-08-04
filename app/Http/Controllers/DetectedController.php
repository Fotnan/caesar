<?php

namespace App\Http\Controllers;

use App\Models\Detected;
use App\Http\Requests\StoreDetectedRequest;
use App\Http\Requests\UpdateDetectedRequest;

class DetectedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detected = Detected::all();
        return view('admin.detected.index', compact('detected'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.detected.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetectedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetectedRequest $request)
    {
        Detected::create($request->all());
        return redirect()->route('detected.index')->with('success', 'Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detected  $detected
     * @return \Illuminate\Http\Response
     */
    public function show(Detected $detected)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detected  $detected
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detect = Detected::find($id);
        return view('admin.detected.edit', compact('detect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetectedRequest  $request
     * @param  \App\Models\Detected  $detected
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetectedRequest $request,$id)
    {
        $detect = Detected::find($id);
        $detect->update($request->all());
        return redirect()->route('detected.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detected  $detected
     * @return \Illuminate\Http\Response
     */
    public function destroy($detected)
    {
        Detected::destroy($detected);
        return redirect()->route('detected.index')->with('success', 'Вид тревоги удален');
    }
}
