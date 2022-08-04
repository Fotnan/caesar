<?php

namespace App\Http\Controllers;

use App\Models\Alarm;
use App\Http\Requests\StoreAlarmRequest;
use App\Http\Requests\UpdateAlarmRequest;

class AlarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alarms = Alarm::all();
        return view('admin.alarm.index', compact('alarms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alarm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlarmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlarmRequest $request)
    {
        $alarm = $request->input('title');
        Alarm::create($request->all());
        return redirect()->route('alarm.index')->with('success', 'Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function show(Alarm $alarm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alarm = Alarm::find($id);
        return view('admin.alarm.edit', compact('alarm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlarmRequest  $request
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlarmRequest $request, $id)
    {
        $alarm = Alarm::find($id);
        $alarm->update($request->all());
        return redirect()->route('alarm.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function destroy($alarm)
    {
        Alarm::destroy($alarm);
        return redirect()->route('alarm.index')->with('success', 'Вид тревоги удален');
    }
}
