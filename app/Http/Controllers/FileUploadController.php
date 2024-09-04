<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        $files = FileUpload::all();
        return view('admin.file-uploads.index', compact('files'));
    }

    public function create()
    {
        return view('admin.file-uploads.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file',
        ]);

        $path = $request->file('file')->store('uploads', 'public');
        FileUpload::create([
            'title' => $validatedData['title'],
            'path' => $path,
        ]);

        return redirect()->route('file-uploads.index');
    }

    public function edit($id)
    {
        $file = FileUpload::findOrFail($id);
        return view('admin.file-uploads.edit', compact('file'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|file',
        ]);

        $file = FileUpload::findOrFail($id);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $file->update([
                'title' => $validatedData['title'],
                'path' => $path,
            ]);
        } else {
            $file->update([
                'title' => $validatedData['title'],
            ]);
        }

        return redirect()->route('file-uploads.index');
    }

    public function show($id)
    {
        $file = FileUpload::findOrFail($id);
        return view('admin.file-uploads.show', compact('file'));
    }
}
