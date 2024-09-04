<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        Event::create($validatedData);
        return redirect()->route('events.index');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $event = Event::findOrFail($id);
        $event->update($validatedData);
        return redirect()->route('events.index');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.show', compact('event'));
    }
}