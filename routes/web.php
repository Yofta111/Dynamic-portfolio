<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientTestimonialController;
use App\Http\Controllers\HeroController;
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



    Route::prefix('admin')->group(function () {
        Route::get('/heroes', [HeroController::class, 'index'])->name('heroes.index');
        Route::get('/heroes/create', [HeroController::class, 'create'])->name('heroes.create');
        Route::post('/heroes/store', [HeroController::class, 'store'])->name('heroes.store');
        Route::get('/heroes/edit/{id}', [HeroController::class, 'edit'])->name('heroes.edit');
        Route::post('/heroes/update/{id}', [HeroController::class, 'update'])->name('heroes.update');
        Route::get('/heroes/delete/{id}', [HeroController::class, 'delete'])->name('heroes.delete');
    });


    Route::prefix('admin')->group(function () {
        Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
        Route::get('/portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
        Route::post('/portfolios', [PortfolioController::class, 'store'])->name('portfolios.store');
        Route::get('/portfolios/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolios.edit');
        Route::post('/portfolios/{id}', [PortfolioController::class, 'update'])->name('portfolios.update');
        Route::get('/portfolios/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolios.delete');
    });
// all about
    Route::prefix('admin')->group(function () {
        Route::get('/about', [AboutController::class, 'index'])->name('about.index');
        Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');
        Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
        Route::post('/about/{id}', [AboutController::class, 'update'])->name('about.update');
        Route::get('/about/{id}/delete', [AboutController::class, 'delete'])->name('about.delete');
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


});
require __DIR__.'/auth.php';
