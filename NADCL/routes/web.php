<?php

use App\Http\Controllers\NADCL_PagesController;
use App\Http\Controllers\NADCL_ProfileController;
use App\Http\Controllers\NADCL_SteamController;
use App\Http\Controllers\NADCL_TournamentDescController;
use App\Http\Controllers\NADCL_TournamentPlayerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamDisplayController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/sandbox', [NADCL_PagesController::class, 'sandbox']);

Route::get('/', [NADCL_PagesController::class, 'Landing']);
Route::get('/Tournaments/NADCL_SeasonFour', [NADCL_PagesController::class, 'SeasonFourLoad']);
Route::get('/AboutUs', [NADCL_PagesController::class, 'AboutUs']);
Route::get('/players', [NADCL_PagesController::class, 'ShowAllPlayersPlayers']);
Route::get('/BigScreen',  [NADCL_PagesController::class, 'BigScreen']);
Route::get('/playercard/{who}', [NADCL_PagesController::class, 'PlayerCardDisplay']);

Route::get('/Teams/{id}', [TeamDisplayController::class, 'Index']);
Route::get('/Teams', [TeamDisplayController::class, 'Teams']);
Route::get('/astronaut', [TeamDisplayController::class, 'Astronaut']);
Route::get('/bullish', [TeamDisplayController::class, 'Bullish']);
Route::get('/fryboys', [TeamDisplayController::class, 'Fryboys']);
Route::get('/grin',  [TeamDisplayController::class, 'Grin']);
Route::get('/paladins', [TeamDisplayController::class, 'Paladins']);
Route::get('/sporkface', [TeamDisplayController::class, 'Sporkface']);
Route::get('/thv', [TeamDisplayController::class, 'Thv']);
Route::get('/tko', [TeamDisplayController::class, 'Tko']);

Route::get('/Season/{id}', [NADCL_TournamentDescController::class, 'Index']);
Route::get('/Tournaments/NADCL_SeasonFive', [NADCL_TournamentPlayerController::class, 'SeasonFiveLoad']);
Route::get('/Tournaments/NADCL_tournamentjoin', [NADCL_TournamentPlayerController::class, 'NADCL_SeasonJoin'])->middleware('auth');

Route::get('/dashboard', [NADCL_ProfileController::class, 'Dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/NADCL_Profile', [NADCL_ProfileController::class, 'Load'])->middleware('auth');
Route::put('/dashboard/NADCL_Profile', [NADCL_ProfileController::class, 'Store'])->middleware('auth');
Route::get('/dashboard/NADCL_CreateTeam', [NADCL_ProfileController::class, 'TeamLoad'])->middleware('auth');
Route::put('/dashboard/NADCL_CreateTeam', [NADCL_ProfileController::class, 'TeamStore'])->middleware('auth');
Route::get('/dashboard/AdminPanel', [NADCL_ProfileController::class, 'AdminLoad'])->middleware('auth');
Route::put('/dashboard/AdminPanel', [NADCL_ProfileController::class, 'AdminStore'])->middleware('auth');
Route::get('/dashboard/process-openId', [NADCL_SteamController::class, 'Store']);
Route::get('/dashboard/init-openId', [NADCL_SteamController::class, 'ToSteam']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
require __DIR__ . '/auth.php';
