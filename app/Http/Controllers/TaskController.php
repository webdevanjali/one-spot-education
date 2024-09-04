<?php

namespace App\Http\Controllers;

use App\Models\TaskAssignment;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = TaskAssignment::all();
        return view('admin.task-assignments.index', compact('tasks'));
    }

    public function create()
    {
        return view('admin.task-assignments.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
        ]);

        TaskAssignment::create($validatedData);
        return redirect()->route('task-assignments.index');
    }

    public function edit($id)
    {
        $task = TaskAssignment::findOrFail($id);
        return view('admin.task-assignments.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'due_date' => 'required|date',
        ]);

        $task = TaskAssignment::findOrFail($id);
        $task->update($validatedData);
        return redirect()->route('task-assignments.index');
    }

    public function show($id)
    {
        $task = TaskAssignment::findOrFail($id);
        return view('admin.task-assignments.show', compact('task'));
    }
}
