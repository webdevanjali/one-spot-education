<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        // Normally, you would return a view here
        // $feedbacks = Feedback::all();
        // return view('feedback.index', compact('feedbacks'));
        // Since you don't have separate views, you can comment out the return statement.
    }

    public function create()
    {
        // Normally, you would return a view here
        // return view('feedback.create');
        // Since you don't have separate views, you can comment out the return statement.
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'sender_name' => 'nullable|string',
            'sender_email' => 'nullable|email',
            'student_id' => 'nullable|exists:students,id',
            'teacher_id' => 'nullable|exists:teachers,id',
            'course_id' => 'nullable|exists:courses,id',
            'feedback_text' => 'required|string',
            'rating' => 'nullable|integer|between:1,5',
            'media' => 'nullable|url',
        ]);

        $feedbackData = [
            'user_id' => $validatedData['user_id'] ?? null,
            'sender_name' => $validatedData['sender_name'] ?? null,
            'sender_email' => $validatedData['sender_email'] ?? null,
            'student_id' => $validatedData['student_id'] ?? null,
            'teacher_id' => $validatedData['teacher_id'] ?? null,
            'course_id' => $validatedData['course_id'] ?? null,
            'feedback_text' => $validatedData['feedback_text'],
            'rating' => $validatedData['rating'] ?? null,
            'media' => $validatedData['media'] ?? null,
        ];

        Feedback::create($feedbackData);

        return back()->with('success', 'Feedback submitted successfully!');
    }

    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);
        // Normally, you would return a view here
        // return view('feedback.edit', compact('feedback'));
        // Since you don't have separate views, you can comment out the return statement.
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'sender_name' => 'nullable|string',
            'sender_email' => 'nullable|email',
            'student_id' => 'nullable|exists:students,id',
            'teacher_id' => 'nullable|exists:teachers,id',
            'course_id' => 'nullable|exists:courses,id',
            'feedback_text' => 'required|string',
            'rating' => 'nullable|integer|between:1,5',
            'media' => 'nullable|url',
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update($validatedData);

        return back()->with('success', 'Feedback updated successfully!');
    }

    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        // Normally, you would return a view here
        // return view('feedback.show', compact('feedback'));
        // Since you don't have separate views, you can comment out the return statement.
    }
}
