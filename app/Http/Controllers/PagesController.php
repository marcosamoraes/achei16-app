<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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

        $newCompanies->each(fn ($company) => $company->update(['visits' => $company->visits + 1]));
        $featuredCompanies->each(fn ($company) => $company->update(['visits' => $company->visits + 1]));

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

        $companies->each(fn ($company) => $company->update(['visits' => $company->visits + 1]));

        return view('listing', compact('categories', 'companies'));
    }

    public function viewCompany(Request $request, string $city, Company $company)
    {
        $company->update(['visits' => $company->visits + 1]);
        return view('view-company', compact('company'));
    }

    public function contactCompany(Request $request, Company $company)
    {
        $user = $company->client->user;

        Contact::create([
            'user_id'       => $user->id,
            'name'          => $request->name,
            'email'         => $request->email,
            'whatsapp'      => $request->whatsapp,
            'message'       => $request->message,
        ]);

        Alert::toast('Contato enviado com sucesso, em breve o responsável entrará em contato.', 'success');
        return back();
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
