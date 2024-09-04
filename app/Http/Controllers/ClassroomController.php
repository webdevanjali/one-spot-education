<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();
        return view('admin.classrooms.index', compact('classrooms'));
    }

    public function create()
    {
        return view('admin.classrooms.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        Classroom::create($validatedData);
        return redirect()->route('classrooms.index');
    }

    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('admin.classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'capacity' => 'required|integer',
        ]);

        $classroom = Classroom::findOrFail($id);
        $classroom->update($validatedData);
        return redirect()->route('classrooms.index');
    }

    public function show($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('admin.classrooms.show', compact('classroom'));
    }
}