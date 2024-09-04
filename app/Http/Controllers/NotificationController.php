<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        return view('modules.notifications.index', compact('notifications'));
    }

    public function create()
    {
        return view('modules.notifications.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);

        Notification::create($validatedData);
        return redirect()->route('notifications.index');
    }
}