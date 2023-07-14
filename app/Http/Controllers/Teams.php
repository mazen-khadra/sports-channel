<?php

namespace App\Http\Controllers;

use App\Services\TysonSports as SportAPI;
use Illuminate\Http\Request;

class Teams extends Controller
{
  public function details ($teamId) {
    $data = (new SportAPI())->getTeamDetails($teamId);
    return $data;
  }
}
