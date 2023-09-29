<?php

use App\Http\Controllers\NADCL_PagesController;
use App\Http\Controllers\NADCL_ProfileController;
use App\Http\Controllers\NADCL_SteamController;
use App\Http\Controllers\NADCL_TournamentPlayerController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [NADCL_PagesController::class, 'Landing']);

Route::get('/AboutUs', [NADCL_PagesController::class, 'AboutUs']);

Route::get('/BigScreen',  [NADCL_PagesController::class, 'BigScreen']);

Route::get('/astronaut', [TeamDisplayController::class, 'Astronaut']);
Route::get('/bullish', [TeamDisplayController::class, 'Bullish']);
Route::get('/fryboys', [TeamDisplayController::class, 'Fryboys']);
Route::get('/grin',  [TeamDisplayController::class, 'Grin']);
Route::get('/paladins', [TeamDisplayController::class, 'Paladins']);
Route::get('/sporkface', [TeamDisplayController::class, 'Sporkface']);
Route::get('/thv', [TeamDisplayController::class, 'Thv']);
Route::get('/tko', [TeamDisplayController::class, 'Tko']);

Route::get('/dashboard/dota_profile', [NADCL_SteamController::class, 'Load']);
Route::get('/dashboard/process-openId', [NADCL_SteamController::class, 'Store']);
Route::get('/dashboard/init-openId', [NADCL_SteamController::class, 'ToSteam']);

Route::get('/Tournaments/NADCL_SeasonFive', [NADCL_TournamentPlayerController::class, 'SeasonFiveLoad']);
Route::get('/Tournaments/NADCL_SeasonFour', [NADCL_TournamentPlayerController::class, 'SeasonFourLoad']);
Route::get('/Tournaments/NADCL_tournamentjoin', [NADCL_TournamentPlayerController::class, 'NADCL_SeasonJoin'])->middleware('auth');
Route::get('/players', [NADCL_TournamentPlayerController::class, 'Players']);

Route::get('/dashboard', [NADCL_ProfileController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/NADCL_Profile', [NADCL_ProfileController::class, 'Load']);
Route::put('/dashboard/NADCL_Profile', [NADCL_ProfileController::class, 'Store']);
Route::get('/dashboard/NADCL_CreateTeam', [NADCL_ProfileController::class, 'TeamLoad']);
Route::put('/dashboard/NADCL_CreateTeam', [NADCL_ProfileController::class, 'TeamStore']);
Route::get('/players/{who}', [NADCL_ProfileController::class, 'PlayerIndex']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
