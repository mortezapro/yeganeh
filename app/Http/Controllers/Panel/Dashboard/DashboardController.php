<?php

namespace App\Http\Controllers\Panel\Dashboard;

use App\Http\Controllers\Controller;
use function view;

class DashboardController extends Controller
{
    public function index()
    {
        return view("panel.dashboard.index");
    }
}
