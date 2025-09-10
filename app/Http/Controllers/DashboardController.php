<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
        $user = auth()->user();
        return view('dashboards.admin', compact('user'));
    }
    public function user()
    {
        $user = auth()->user();
        return view('dashboards.user', compact('user'));
    }
    public function profile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }
}
