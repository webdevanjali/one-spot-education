<?php

namespace App\Http\Controllers;

use App\Models\MediaItem;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $mediaItems = MediaItem::all();
        return view('admin.media-gallery.index', compact('mediaItems'));
    }

    public function create()
    {
        return view('admin.media-gallery.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file',
        ]);

        $path = $request->file('file')->store('media', 'public');
        MediaItem::create([
            'title' => $validatedData['title'],
            'path' => $path,
        ]);

        return redirect()->route('media-gallery.index');
    }

    public function edit($id)
    {
        $mediaItem = MediaItem::findOrFail($id);
        return view('admin.media-gallery.edit', compact('mediaItem'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|file',
        ]);

        $mediaItem = MediaItem::findOrFail($id);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('media', 'public');
            $mediaItem->update([
                'title' => $validatedData['title'],
                'path' => $path,
            ]);
        } else {
            $mediaItem->update([
                'title' => $validatedData['title'],
            ]);
        }

        return redirect()->route('media-gallery.index');
    }

    public function show($id)
    {
        $mediaItem = MediaItem::findOrFail($id);
        return view('admin.media-gallery.show', compact('mediaItem'));
    }
}
