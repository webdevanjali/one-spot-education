<?php

namespace App\Http\Controllers;

use App\Models\QualificationProof;
use Illuminate\Http\Request;

class QualificationProofController extends Controller
{
    public function index()
    {
        $proofs = QualificationProof::all();
        return view('admin.qualification-proofs.index', compact('proofs'));
    }

    public function create()
    {
        return view('admin.qualification-proofs.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file',
        ]);

        $path = $request->file('file')->store('qualifications', 'public');
        QualificationProof::create([
            'title' => $validatedData['title'],
            'path' => $path,
        ]);

        return redirect()->route('qualification-proofs.index');
    }

    public function edit($id)
    {
        $proof = QualificationProof::findOrFail($id);
        return view('admin.qualification-proofs.edit', compact('proof'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|file',
        ]);

        $proof = QualificationProof::findOrFail($id);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('qualifications', 'public');
            $proof->update([
                'title' => $validatedData['title'],
                'path' => $path,
            ]);
        } else {
            $proof->update([
                'title' => $validatedData['title'],
            ]);
        }

        return redirect()->route('qualification-proofs.index');
    }

    public function show($id)
    {
        $proof = QualificationProof::findOrFail($id);
        return view('admin.qualification-proofs.show', compact('proof'));
    }
}