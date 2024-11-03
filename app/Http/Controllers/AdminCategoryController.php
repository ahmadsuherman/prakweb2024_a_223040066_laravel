<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories'    => Category::paginate(10),
            'title'         => 'Categories'
        ]);
    }
}
