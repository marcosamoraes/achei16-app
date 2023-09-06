<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $footerCities = Company::where('status', true)
            ->distinct()
            ->take(5)
            ->inRandomOrder()
            ->pluck('city')
            ->toArray();

        $footerCompanies = Company::where('status', true)
            ->take(5)
            ->inRandomOrder()
            ->get();

        view()->share(compact('footerCities', 'footerCompanies'));
    }

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

    public function listing(Request $request)
    {
        $categories = Category::where('status', true)
            ->withCount('companies')
            ->get();

        $companies = Company::where('status', true)
            ->when($request->has('cat'), function ($query) {
                $query->whereHas('categories', function ($query) {
                    $query->whereIn('category_id', (array) request()->cat);
                });
            })
            ->when($request->has('city'), function ($query) {
                $query->where(function ($query) {
                    $query->orWhere('address', 'like', '%' . request()->city . '%')
                        ->orWhere('neighborhood', 'like', '%' . request()->city . '%')
                        ->orWhere('city', 'like', '%' . request()->city . '%')
                        ->orWhere('state', 'like', '%' . request()->city . '%');
                });
            })
            ->paginate(15)
            ->withQueryString();

        return view('listing', compact('categories', 'companies'));
    }

    public function viewCompany(Request $request, Company $company)
    {
        return view('view-company', compact('company'));
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
