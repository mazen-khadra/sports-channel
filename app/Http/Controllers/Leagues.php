<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TysonSports as SportAPI;

class Leagues extends Controller
{
    public function index($sport = null) {
      $sportId = SportAPI::$SPORTS_IDS[$sport];

      $data = (new SportAPI())->getLeagues($sportId);
      return $data;
    }

  public function details ($leagueId) {
    $data = (new SportAPI())->getLeagueDetails($leagueId);
    return $data;
  }
}
