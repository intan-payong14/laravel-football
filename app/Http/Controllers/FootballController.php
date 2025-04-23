<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FootballService;

class FootballController extends Controller
{
    protected $football;

    public function __construct(FootballService $football)
    {
        $this->football = $football;
    }

    public function liveMatches()
    {
        $matches = $this->football->getLiveMatches();
        return view('football.live', compact('matches'));
    }
}
