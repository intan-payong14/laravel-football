<!DOCTYPE html>
<html>
<head>
    <title>Live Football Matches</title>
</head>
<body>
    <h1>Live Matches</h1>
    @if(isset($matches['response']) && count($matches['response']) > 0)
        <ul>
            @foreach($matches['response'] as $match)
                <li>
                    {{ $match['teams']['home']['name'] }} vs {{ $match['teams']['away']['name'] }}
                    ({{ $match['goals']['home'] }} - {{ $match['goals']['away'] }})
                </li>
            @endforeach
        </ul>
    @else
        <p>No live matches right now.</p>
    @endif
</body>
</html>
