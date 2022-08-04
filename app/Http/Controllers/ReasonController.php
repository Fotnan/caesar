<?php

namespace App\Http\Controllers;

use App\Models\Reason;
use App\Http\Requests\StoreReasonRequest;
use App\Http\Requests\UpdateReasonRequest;

class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reasons = Reason::all();
        return view('admin.reason.index', compact('reasons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reason.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReasonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReasonRequest $request)
    {
        Reason::create($request->all());
        return redirect()->route('reason.index')->with('success', 'Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function show(Reason $reason)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reason = Reason::find($id);
        return view('admin.reason.edit', compact('reason'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReasonRequest  $request
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReasonRequest $request, $id)
    {
        $reason = Reason::find($id);
        $reason->update($request->all());
        return redirect()->route('reason.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reason  $reason
     * @return \Illuminate\Http\Response
     */
    public function destroy($reason)
    {
        Reason::destroy($reason);
        return redirect()->route('reason.index')->with('success', 'Причина тревоги удалена');
    }
}
