<?php

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

Route::get('/', function () { return view('website.pages.home'); });
Route::get('/sobre-nos', function () { return view('website.pages.about-us'); });
Route::get('/duvidas-frequentes', function () { return view('website.pages.faq'); });
Route::get('/politica-de-privacidade', function () { return view('website.pages.privacy-policy'); });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/deletar-conta', function () { return view('dashboard.profile.delete'); });
    Route::delete('/deletar-conta', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';