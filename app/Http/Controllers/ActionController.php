<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Http\Requests\StoreActionRequest;
use App\Http\Requests\UpdateActionRequest;
use Illuminate\Support\Facades\Auth;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions = Action::all();
        return view('admin.action.index', compact('actions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.action.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActionRequest $request)
    {
        $action = $request->input('title');
        Action::create($request->all());
        return redirect()->route('action.index')->with('success', 'Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function show(Action $action)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function edit(Action $action)
    {
        $act = Action::find($action);
        return view('admin.action.edit', compact('act'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActionRequest  $request
     * @param  \App\Models\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActionRequest $request, Action $action)
    {
        $act = Action::find($id);
        $act->update($request->all());
        return redirect()->route('action.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Action  $action
     * @return \Illuminate\Http\Response
     */
    public function destroy(Action $action)
    {
        Action::softDeleted($action);
        return redirect()->route('action.index')->with('success', 'Запись удалена');
    }
}
