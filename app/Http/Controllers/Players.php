<?php

namespace App\Http\Controllers;

use App\Services\TysonSports as SportAPI;
use Illuminate\Http\Request;

class Players extends Controller
{
  public function details ($playerId) {
    $data = (new SportAPI())->getPlayerDetails($playerId);
    return $data;
  }
}
