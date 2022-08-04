<?php

namespace App\Http\Controllers;

use App\Models\Contakt;
use App\Http\Requests\StoreContaktRequest;
use App\Http\Requests\UpdateContaktRequest;

class ContaktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contakt::all();
        return view('admin.alarm.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContaktRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContaktRequest $request)
    {
        Contakt::create($request->all());
        return redirect()->route('contakt.index')->with('success', 'Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contakt  $contakt
     * @return \Illuminate\Http\Response
     */
    public function show(Contakt $contakt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contakt  $contakt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contakt = Contakt::find($id);
        return view('admin.contact.edit', compact('contakt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContaktRequest  $request
     * @param  \App\Models\Contakt  $contakt
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContaktRequest $request, $id)
    {
        $contakt = Contakt::find($id);
        $contakt->update($request->all());
        return redirect()->route('contakt.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contakt  $contakt
     * @return \Illuminate\Http\Response
     */
    public function destroy($contakt)
    {
        Contakt::destroy($contakt);
        return redirect()->route('contakt.index')->with('success', 'Вид тревоги удален');
    }
}
