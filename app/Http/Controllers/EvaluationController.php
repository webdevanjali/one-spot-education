<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        $evaluations = Evaluation::all();
        return view('admin.evaluations.index', compact('evaluations'));
    }

    public function create()
    {
        return view('admin.evaluations.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Evaluation::create($validatedData);
        return redirect()->route('evaluations.index');
    }

    public function edit($id)
    {
        $evaluation = Evaluation::findOrFail($id);
        return view('admin.evaluations.edit', compact('evaluation'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $evaluation = Evaluation::findOrFail($id);
        $evaluation->update($validatedData);
        return redirect()->route('evaluations.index');
    }

    public function show($id)
    {
        $evaluation = Evaluation::findOrFail($id);
        return view('admin.evaluations.show', compact('evaluation'));
    }
}