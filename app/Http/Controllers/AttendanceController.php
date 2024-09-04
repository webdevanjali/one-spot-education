<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('modules.attendance.index', compact('attendances'));
    }

    public function mark()
    {
        return view('modules.attendance.mark');
    }

    public function report()
    {
        return view('modules.attendance.report');
    }
}