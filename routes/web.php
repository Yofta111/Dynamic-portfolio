<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {return view('welcome');});
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



});
// all portfolios
Route::controller(PortfolioController::class)->group(function () {
    Route::get('/portfolios', 'index')->name('portfolios.index');               // List all portfolios
    Route::get('/portfolios/create', 'create')->name('portfolios.create');       // Add portfolios form
    Route::post('/portfolios/store', 'store')->name('portfolios.store');         // Save new portfolios
    Route::get('/portfolios/{id}/edit', 'edit')->name('portfolios.edit');        // Edit portfolios form
    Route::post('/portfolios/{id}', 'update')->name('portfolios.update'); // Update existing portfolios
    Route::get('/portfolios/{id}', 'destroy')->name('portfolios.delete'); // Delete portfolios
    });
require __DIR__.'/auth.php';
