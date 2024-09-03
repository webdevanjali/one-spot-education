<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('modules.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('modules.courses.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Course::create($validatedData);
        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('modules.courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $course = Course::findOrFail($id);
        $course->update($validatedData);
        return redirect()->route('courses.index');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('modules.courses.show', compact('course'));
    }
}
