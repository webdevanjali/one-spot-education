<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('admin.reports.index', compact('reports'));
    }

    public function create()
    {
        return view('admin.reports.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Report::create($validatedData);
        return redirect()->route('reports.index');
    }

    public function edit($id)
    {
        $report = Report::findOrFail($id);
        return view('admin.reports.edit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $report = Report::findOrFail($id);
        $report->update($validatedData);
        return redirect()->route('reports.index');
    }

    public function show($id)
    {
        $report = Report::findOrFail($id);
        return view('admin.reports.show', compact('report'));
    }
}