<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/empresas', [PagesController::class, 'listing'])->name('listing');
Route::get('/empresa/{company:slug}', [PagesController::class, 'viewCompany'])->name('listing.view');
Route::get('/cadastro', [PagesController::class, 'register'])->name('register');
Route::get('/contato', [PagesController::class, 'contact'])->name('contact');
