<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
   
    public function users()
    {
        dd('in');
        return view('admin.users');
    }
}
