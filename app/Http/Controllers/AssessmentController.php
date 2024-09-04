<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        $assessments = Assessment::all();
        return view('admin.assessments.index', compact('assessments'));
    }

    public function create()
    {
        return view('admin.assessments.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Assessment::create($validatedData);
        return redirect()->route('assessments.index');
    }

    public function edit($id)
    {
        $assessment = Assessment::findOrFail($id);
        return view('admin.assessments.edit', compact('assessment'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $assessment = Assessment::findOrFail($id);
        $assessment->update($validatedData);
        return redirect()->route('assessments.index');
    }

    public function show($id)
    {
        $assessment = Assessment::findOrFail($id);
        return view('admin.assessments.show', compact('assessment'));
    }
}