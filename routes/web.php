<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientTestimonialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyServicesController;
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
//main page
//Route::get('/', function () {return view('welcome');});
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Home')->name('Homepage');                // List all portfolios
  });
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
//Admin profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// all portfolio
Route::controller(PortfolioController::class)->group(function () {
    Route::get('/portfolios', 'index')->name('portfolios.index');                // List all portfolios
    Route::get('/portfolios/create', 'create')->name('portfolios.create');       // Add portfolios form
    Route::post('/portfolios/store', 'store')->name('portfolios.store');         // Save new portfolios
    Route::get('/portfolios/{id}/edit', 'edit')->name('portfolios.edit');        // Edit portfolios form
    Route::post('/portfolios/{id}', 'update')->name('portfolios.update');        // Update existing portfolios
    Route::get('/portfolios/{id}', 'destroy')->name('portfolios.delete');        // Delete portfolios
});
// all about
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index')->name('about.index');                // List all about
    Route::get('/about/create', 'create')->name('about.create');       // Add about form
    Route::post('/about/store', 'store')->name('about.store');         // Save new about
    Route::get('/about/{id}/edit', 'edit')->name('about.edit');        // Edit about form
    Route::post('/about/{id}', 'update')->name('about.update');        // Update existing about
    Route::get('/about/{id}', 'destroy')->name('about.delete');        // Delete about
});
// all myServices
Route::controller(MyServicesController::class)->group(function () {
    Route::get('/myServices', 'index')->name('myServices.index');                // List all myServices
    Route::get('/myServices/create', 'create')->name('myServices.create');       // Add myServices form
    Route::post('/myServices/store', 'store')->name('myServices.store');         // Save new myServices
    Route::get('/myServices/{id}/edit', 'edit')->name('myServices.edit');        // Edit myServices form
    Route::post('/myServices/{id}', 'update')->name('myServices.update');        // Update existing myServices
    Route::get('/myServices/{id}', 'destroy')->name('myServices.delete');        // Delete myServices
});
// all clientTestimonial
Route::controller(ClientTestimonialController::class)->group(function () {
    Route::get('/clientTestimonial', 'index')->name('clientTestimonial.index');                // List all clientTestimonial
    Route::get('/clientTestimonial/create', 'create')->name('clientTestimonial.create');       // Add clientTestimonial form
    Route::post('/clientTestimonial/store', 'store')->name('clientTestimonial.store');         // Save new clientTestimonial
    Route::get('/clientTestimonial/{id}/edit', 'edit')->name('clientTestimonial.edit');        // Edit clientTestimonial form
    Route::post('/clientTestimonial/{id}', 'update')->name('clientTestimonial.update');        // Update existing clientTestimonial
    Route::get('/clientTestimonial/{id}', 'destroy')->name('clientTestimonial.delete');        // Delete clientTestimonial
});

require __DIR__.'/auth.php';
