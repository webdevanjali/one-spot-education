<?php

namespace App\Http\Controllers;

use App\Models\ResourceLink;
use Illuminate\Http\Request;

class ResourceLinkController extends Controller
{
    public function index()
    {
        $links = ResourceLink::all();
        return view('admin.resource-links.index', compact('links'));
    }

    public function create()
    {
        return view('admin.resource-links.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
        ]);

        ResourceLink::create($validatedData);
        return redirect()->route('resource-links.index');
    }

    public function edit($id)
    {
        $link = ResourceLink::findOrFail($id);
        return view('admin.resource-links.edit', compact('link'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
        ]);

        $link = ResourceLink::findOrFail($id);
        $link->update($validatedData);
        return redirect()->route('resource-links.index');
    }

    public function show($id)
    {
        $link = ResourceLink::findOrFail($id);
        return view('admin.resource-links.show', compact('link'));
    }
}