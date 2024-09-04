<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::all();
        return view('modules.assignments.index', compact('assignments'));
    }

    public function create()
    {
        return view('modules.assignments.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'course_id' => 'required|exists:courses,id',
        ]);

        Assignment::create($validatedData);
        return redirect()->route('assignments.index');
    }

    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        return view('modules.assignments.edit', compact('assignment'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'course_id' => 'required|exists:courses,id',
        ]);

        $assignment = Assignment::findOrFail($id);
        $assignment->update($validatedData);
        return redirect()->route('assignments.index');
    }

    public function show($id)
    {
        $assignment = Assignment::findOrFail($id);
        return view('modules.assignments.show', compact('assignment'));
    }
}