<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BloodbankController;
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

Route::get('/', function () { return view('website.pages.home.index'); });
Route::get('/teste-posso-doar', function () { return view('website.pages.quiz.index'); });
Route::get('/requisitos-para-doacao', function () { return view('website.pages.requisitos'); });
Route::get('/sobre-nos', function () { return view('website.pages.about-us'); });
Route::get('/duvidas-frequentes', function () { return view('website.pages.faq.index'); });
Route::get('/politica-de-privacidade', function () { return view('website.pages.privacy-policy'); });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [BloodbankController::class, 'index'])->name('dashboard');
    Route::get('/procurar-hemocentro', [BloodbankController::class, 'search'])->name('search');
});

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/deletar-conta', function () { return view('dashboard.profile.delete'); });
    Route::delete('/deletar-conta', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';