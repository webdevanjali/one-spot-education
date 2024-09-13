<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Storage; // For file storage

class NotificationController extends Controller
{
    // Display a listing of the notifications
    public function index()
    {
        $notifications = Notification::with('user')->get(); // Load user relationship
        return view('modules.notifications.index', compact('notifications'));
    }

    // Show the form for creating a new notification
    public function create()
    {
        return view('modules.notifications.create');
    }

    // Store a newly created notification in storage
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'read_status' => 'required|boolean',
            'notification_type' => 'required|string',
            'media' => 'nullable|file|mimes:jpg,png,pdf,doc,docx|max:2048',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $filePath = $file->store('notifications', 'public'); // Store file in storage/app/public/notifications
            $data['media'] = $filePath;
        }

        Notification::create($data);

        return redirect()->route('notifications.index')
                         ->with('success', 'Notification created successfully.');
    }

    // Display the specified notification
    // public function show($id)
    // {
    //     $notification = Notification::with('user')->findOrFail($id); // Load user relationship
    //     return view('modules.notifications.show', compact('notification'));
    // }

    // // Show the form for editing the specified notification
    // public function edit($id)
    // {
    //     $notification = Notification::findOrFail($id);
    //     return view('modules.notifications.edit', compact('notification'));
    // }

    // // Remove the specified notification from storage
    // public function destroy($id)
    // {
    //     $notification = Notification::findOrFail($id);
        
    //     // Delete the file if it exists
    //     if ($notification->media && Storage::exists('public/' . $notification->media)) {
    //         Storage::delete('public/' . $notification->media);
    //     }

    //     $notification->delete();

    //     return redirect()->route('notifications.index')
    //                      ->with('success', 'Notification deleted successfully.');
    // }


    public function show($notification_id)
    {
        $notification = Notification::where('notification_id', $notification_id)->firstOrFail();
        return view('modules.notifications.show', compact('notification'));
    }
    
    public function edit($notification_id)
    {
        $notification = Notification::where('notification_id', $notification_id)->firstOrFail();
        return view('modules.notifications.edit', compact('notification'));
    }
    
    public function destroy($notification_id)
    {
        $notification = Notification::where('notification_id', $notification_id)->firstOrFail();
        $notification->delete();
        return redirect()->route('notifications.index')->with('success', 'Notification deleted successfully');
    }
    
    // Update the specified notification in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'read_status' => 'required|boolean',
            'notification_type' => 'required|string',
            'media' => 'nullable|file|mimes:jpg,png,pdf,doc,docx|max:2048',
        ]);

        $notification = Notification::findOrFail($id);

        $data = $request->all();
        
        if ($request->hasFile('media')) {
            // Delete the old file if it exists
            if ($notification->media && Storage::exists('public/' . $notification->media)) {
                Storage::delete('public/' . $notification->media);
            }
            
            $file = $request->file('media');
            $filePath = $file->store('notifications', 'public');
            $data['media'] = $filePath;
        }

        $notification->update($data);

        return redirect()->route('notifications.index')
                         ->with('success', 'Notification updated successfully.');
    }

}
