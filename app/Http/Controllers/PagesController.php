<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', true)
            ->withCount('companies')
            ->get();

        $newCompanies = Company::where('status', true)
            ->latest()
            ->take(8)
            ->get();

        $featuredCompanies = Company::where('status', true)
            ->where('featured', true)
            ->take(10)
            ->get();

        return view('index', compact('categories', 'newCompanies', 'featuredCompanies'));
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
