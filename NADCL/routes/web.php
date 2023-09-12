<?php

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
//NOTED place other webpages here
Route::get('/', function () {
    return view('landing');
});

Route::get('/astronaut', function()
{
    return view('nadclteams/astronaut',[TeamDisplayController::class, 'Astronaut']);
});

Route::get('/bullish', function()
{
    return view('nadclteams/bullish', [TeamDisplayController::class, 'Bullish']);
});

Route::get('/fryboys', function()
{
    return view('nadclteams/fryboys', [TeamDisplayController::class, 'Fryboys']);
});

Route::get('/grin', function()
{
    return view('nadclteams/grin', [TeamDisplayController::class, 'Grin']);
});

Route::get('/paladins', function()
{
    return view('nadclteams/paladins', [TeamDisplayController::class, 'Paladins']);
});

Route::get('/sporkface', function()
{
    return view('nadclteams/sporkface', [TeamDisplayController::class, 'Sporkface']);
});

Route::get('/thv', function()
{
    return view('nadclteams/thv', [TeamDisplayController::class, 'Thv']);
});

Route::get('/tko', function()
{
    return view('nadclteams/tko', [TeamDisplayController::class, 'Tko']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
