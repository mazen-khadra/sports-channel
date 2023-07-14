<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Leagues as LeagueController;
use App\Http\Controllers\Teams as TeamController;
use App\Http\Controllers\Players as PlayerController;
use App\Http\Controllers\Matches as MatchController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('league')->group(function() {
  Route::get('/list/{sport}', [LeagueController::class, "index"]);
  Route::get('/{leagueId}/details', [LeagueController::class, "details"]);
});

Route::prefix('team')->group(function() {
  Route::get('/{teamId}/details', [TeamController::class, "details"]);
});

Route::prefix('player')->group(function() {
  Route::get('/{playerId}/details', [PlayerController::class, "details"]);
});

Route::prefix('match')->group(function() {
  Route::get('/list', [MatchController::class, "index"]);
  Route::get('/{matchId}/details', [MatchController::class, "details"]);
});
