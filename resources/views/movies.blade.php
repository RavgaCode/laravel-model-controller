<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Film</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('movies') }}">Lista Film</a></li>
    </ul>

    <h2>Lista film</h2>

    @foreach ($movies as $movie)
        <div>
            <div>Titolo: {{ $movie->title }}</div>
            <div>Titolo originale: {{ $movie->original_title }}</div>
            <div>Nazionalità: {{ $movie->nationality }}</div>
        </div>
        <br>
    @endforeach
</body>
</html>