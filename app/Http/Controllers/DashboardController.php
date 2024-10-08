<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Model\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalAdmins = User::where('role_id', 1)->count();
        return view('dashboard2', compact('totalUsers', 'totalAdmins'));
    }
}
