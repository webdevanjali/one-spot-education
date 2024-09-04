<?php

namespace App\Http\Controllers;

use App\Models\LiveClass;
use Illuminate\Http\Request;

class LiveClassController extends Controller
{
    public function index()
    {
        $liveClasses = LiveClass::all();
        return view('modules.live_classes.index', compact('liveClasses'));
    }

    public function create()
    {
        return view('modules.live_classes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'schedule' => 'required|date',
        ]);

        LiveClass::create($validatedData);
        return redirect()->route('live-classes.index');
    }

    public function edit($id)
    {
        $liveClass = LiveClass::findOrFail($id);
        return view('modules.live_classes.edit', compact('liveClass'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'schedule' => 'required|date',
        ]);

        $liveClass = LiveClass::findOrFail($id);
        $liveClass->update($validatedData);
        return redirect()->route('live-classes.index');
    }

    public function show($id)
    {
        $liveClass = LiveClass::findOrFail($id);
        return view('modules.live_classes.show', compact('liveClass'));
    }
}