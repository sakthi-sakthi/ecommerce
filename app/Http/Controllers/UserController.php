<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = auth()->user();
        
        return response()->json([
            'users' => $users,
            'status' => 200
        ]);
    }
    
    public function user()
    {
        return view('admin.users');
    }
}
