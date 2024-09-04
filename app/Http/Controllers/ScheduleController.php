<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('admin.schedules.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        Schedule::create($validatedData);
        return redirect()->route('schedules.index');
    }

    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('admin.schedules.edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        $schedule = Schedule::findOrFail($id);
        $schedule->update($validatedData);
        return redirect()->route('schedules.index');
    }

    public function show($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('admin.schedules.show', compact('schedule'));
    }
}