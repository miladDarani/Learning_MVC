<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Detail Page</h1>
    @foreach($games as $game)
    <p>{{$game->title}}</p>

    @endforeach
</body>
</html>