<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view()
    {
        $data = Product::all();
        $allProjects = Product::count();
        $tag = Tag::count();
        $categories = Category::count();
        $users = User::count();
        return view('admin.index',compact('data','allProjects','tag','categories','users'));
    }
    
}
