<?php

namespace App\Http\Controllers;

use App\Models\Make;
use App\Http\Requests\StoreMakeRequest;
use App\Http\Requests\UpdateMakeRequest;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makes = Make::all();
        return view('admin.make.index', compact('makes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.make.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMakeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMakeRequest $request)
    {
        Make::create($request->all());
        return redirect()->route('make.index')->with('success', 'Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function show(Make $make)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $make = Make::find($id);
        return view('admin.make.edit', compact('make'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMakeRequest  $request
     * @param  \App\Models\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMakeRequest $request, $id)
    {
        $make = Make::find($id);
        $make->update($request->all());
        return redirect()->route('make.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function destroy($make)
    {
        Make::destroy($make);
        return redirect()->route('make.index')->with('success', 'Вид действий удален');
    }
}
