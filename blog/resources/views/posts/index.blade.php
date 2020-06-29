<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>
        p.abstract{
            padding: 10px;
            background: #efe;
            margin: 20px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>

    @foreach($posts as $post)

    <div class="post">
        <h2> {{ $post->title }}</h2>
        <p class="abstract"> {{ $post->abstract }}</p>

        <p><a href="/posts/{{$post->id}}/show">Read More</a></p>

    </div>

    @endforeach
</body>
</html>