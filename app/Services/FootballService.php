<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FootballService
{
    public function getLiveMatches()
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => env('FOOTBALL_API_KEY'),
            'X-RapidAPI-Host' => env('FOOTBALL_API_HOST'),
        ])->get("https://api-football-v1.p.rapidapi.com/v3/fixtures", [
            'live' => 'all'
        ]);

        return $response->json();
    }
}
