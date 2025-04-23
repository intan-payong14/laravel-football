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
        if (empty($matches['response'])) {
            $matches['response'] = [
                [
                    'teams' => [
                        'home' => ['name' => 'Real Madrid'],
                        'away' => ['name' => 'Barcelona']
                    ],
                    'goals' => [
                        'home' => 2,
                        'away' => 1
                    ]
                ],
                [
                    'teams' => [
                        'home' => ['name' => 'Manchester United'],
                        'away' => ['name' => 'Liverpool']
                    ],
                    'goals' => [
                        'home' => 0,
                        'away' => 3
                    ]
                ],
                [
                    'teams' => [
                        'home' => ['name' => 'Juventus'],
                        'away' => ['name' => 'AC Milan']
                    ],
                    'goals' => [
                        'home' => 1,
                        'away' => 1
                    ]
                ],
                [
                    'teams' => [
                        'home' => ['name' => 'PSG'],
                        'away' => ['name' => 'Marseille']
                    ],
                    'goals' => [
                        'home' => 3,
                        'away' => 0
                    ]
                ],
                [
                    'teams' => [
                        'home' => ['name' => 'Bayern Munich'],
                        'away' => ['name' => 'Borussia Dortmund']
                    ],
                    'goals' => [
                        'home' => 2,
                        'away' => 2
                    ]
                ],
                [
                    'teams' => [
                        'home' => ['name' => 'Chelsea'],
                        'away' => ['name' => 'Arsenal']
                    ],
                    'goals' => [
                        'home' => 1,
                        'away' => 4
                    ]
                ]
            ];
        }

        return view('football.live', compact('matches'));
    }
}
