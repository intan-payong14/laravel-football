<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Football Matches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .match-card {
            border-radius: 1rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
            transition: transform 0.2s ease;
        }
        .match-card:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body>
<div class="container py-5">
    <h1 class="mb-4 text-center">⚽ Live Football Matches</h1>

    @php
        $isDummy = false;
    @endphp

    @if(empty($matches['response']) || count($matches['response']) === 0)
        @php
            $isDummy = true;
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
        @endphp
    @endif

    @if($isDummy)
        <div class="alert alert-info text-center">
            <strong>Simulasi:</strong> Tidak ada pertandingan live saat ini, menampilkan data dummy.
        </div>
    @endif

    <div class="row g-4">
        @foreach($matches['response'] as $match)
            <div class="col-md-6 col-lg-4">
                <div class="card match-card p-3">
                    <h5 class="card-title text-center">
                        {{ $match['teams']['home']['name'] }} 
                        <span class="text-muted">vs</span> 
                        {{ $match['teams']['away']['name'] }}
                    </h5>
                    <p class="card-text text-center fs-4 mb-1">
                        <span class="badge bg-primary">{{ $match['goals']['home'] }}</span> 
                        -
                        <span class="badge bg-danger">{{ $match['goals']['away'] }}</span>
                    </p>
                    <p class="text-center text-muted">⏱️ 67'</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
