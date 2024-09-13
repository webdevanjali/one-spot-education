<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    // app/Http/Controllers/AnnouncementController.php

    public function index(Request $request)
    {
        $perPage = $request->has('all') ? 1000 : 10; // Set a high number for "All" option
        $filterLabel = $request->input('label');

        $query = Announcement::query();
        
        if ($filterLabel) {
            $query->where('labels', 'LIKE', '%' . $filterLabel . '%');
        }

        $announcements = $query->paginate($perPage)->withQueryString();

        return view('modules.announcements.index', [
            'announcements' => $announcements,
            'filterLabel' => $filterLabel
        ]);
    }

    public function show($announcement_id)
    {
        $announcement = Announcement::findOrFail($announcement_id);
        return view('modules.announcements.show', compact('announcement'));
    }

    public function create()
    {
        return view('modules.announcements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'labels' => 'required|string',
            'created_by' => 'required|string',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'media' => 'nullable|string',
        ]);

        Announcement::create($request->all());

        return redirect()->route('announcements.index')->with('success', 'Announcement created successfully');
    }

    public function edit($announcement_id)
    {
        $announcement = Announcement::findOrFail($announcement_id);
        return view('modules.announcements.edit', compact('announcement'));
    }

    public function update(Request $request, $announcement_id)
    {
        $request->validate([
            'labels' => 'required|string',
            'created_by' => 'required|string',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'media' => 'nullable|string',
        ]);

        $announcement = Announcement::findOrFail($announcement_id);
        $announcement->update($request->all());

        return redirect()->route('announcements.index')->with('success', 'Announcement updated successfully');
    }

    public function destroy($announcement_id)
    {
        $announcement = Announcement::findOrFail($announcement_id);
        $announcement->delete();

        return redirect()->route('announcements.index')->with('success', 'Announcement deleted successfully');
    }
}
