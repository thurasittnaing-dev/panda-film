<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main()
    {
        return view('backend.dashboard.main-dashboard');
    }
}
