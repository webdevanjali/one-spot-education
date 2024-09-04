<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function analysis()
    {
        return view('modules.performance.analysis');
    }

    public function reports()
    {
        return view('modules.performance.reports');
    }
}
