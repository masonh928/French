<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->auth_level;

        if ($role == 1) {
            return 'Teacher';
        } else {
            return 'Not teacher';
        }
    }
}
