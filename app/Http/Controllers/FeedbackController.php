<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('admin.feedback.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|string',
            'assignment_id' => 'required|exists:assignments,id',
        ]);

        Feedback::create($validatedData);
        return redirect()->route('feedback.index');
    }

    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.feedback.edit', compact('feedback'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'content' => 'required|string',
            'assignment_id' => 'required|exists:assignments,id',
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->update($validatedData);
        return redirect()->route('feedback.index');
    }

    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.feedback.show', compact('feedback'));
    }
}