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
        $request->validate([
            'course_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'teacher_id' => 'nullable|integer',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'course_schedule' => 'nullable|string',
            'cover_image' => 'nullable|string',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function show($course_id)
    {
        // Find the course by the primary key
        $course = Course::where('course_id', $course_id)->firstOrFail();
        return view('modules.courses.show', compact('course'));
    }

    public function edit($course_id)
    {
        // Find the course by the primary key
        $course = Course::where('course_id', $course_id)->firstOrFail();
        return view('modules.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'teacher_id' => 'nullable|integer',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'course_schedule' => 'nullable|string',
            'cover_image' => 'nullable|string',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
