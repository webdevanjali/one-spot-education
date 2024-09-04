<?php

namespace App\Http\Controllers;

use App\Models\StudentGroup;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = StudentGroup::all();
        return view('admin.student-groups.index', compact('groups'));
    }

    public function create()
    {
        return view('admin.student-groups.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        StudentGroup::create($validatedData);
        return redirect()->route('student-groups.index');
    }

    public function edit($id)
    {
        $group = StudentGroup::findOrFail($id);
        return view('admin.student-groups.edit', compact('group'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $group = StudentGroup::findOrFail($id);
        $group->update($validatedData);
        return redirect()->route('student-groups.index');
    }

    public function show($id)
    {
        $group = StudentGroup::findOrFail($id);
        return view('admin.student-groups.show', compact('group'));
    }
}