<?php

use App\Models\ContactMessage;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
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

// Route::get('/', function () {
//     return view('portfolio.main');
// })->name('portfolio.main');
Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/create', function () {
    return view('project.create');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('contact', ContactController::class);
Route::resource('project', ProjectController::class);