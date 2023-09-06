<?php

namespace App\Http\Controllers;

use App\Models\Category;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', true)
            ->withCount('companies')
            ->get();
        return view('index', compact('categories'));
    }

    public function listing()
    {
        return view('listing');
    }

    public function viewCompany()
    {
        return view('view-company');
    }

    public function register()
    {
        return view('register');
    }

    public function contact()
    {
        return view('contact');
    }
}
