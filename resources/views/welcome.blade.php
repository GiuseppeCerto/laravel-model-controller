<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @forelse ($movies as $movie)
    <div class="col-3">
        <h3>{{ $book->title }}</h3>
        <p>{{ $book->original_title }}</p>
        <span>

        </span>
    </div>

    @endforeach

</body>

</html>