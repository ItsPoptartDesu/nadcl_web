<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TournamentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamDisplayController;

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
Route::get('/', function () {
    return view('landing');
});

Route::get('/astronaut', [TeamDisplayController::class, 'Astronaut']);

Route::get('/bullish', [TeamDisplayController::class, 'Bullish']);

Route::get('/fryboys',[TeamDisplayController::class, 'Fryboys']);

Route::get('/grin',  [TeamDisplayController::class, 'Grin']);

Route::get('/paladins', [TeamDisplayController::class, 'Paladins']);

Route::get('/sporkface', [TeamDisplayController::class, 'Sporkface']);

Route::get('/thv',[TeamDisplayController::class, 'Thv']);

Route::get('/tko', [TeamDisplayController::class, 'Tko']);

Route::get('/Tournaments/NADCL_Season/{id}', [TournamentController::class, 'NADCL_SeasonSelection']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';