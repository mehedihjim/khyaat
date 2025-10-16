<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // For now, just render the view
        // Later we can fetch data from the API if needed
        return view('admin.dashboards.index');
    }
}