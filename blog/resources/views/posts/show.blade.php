<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $post->title }}</title>
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
    <h1>{{ $post->title }}</h1>

   

    <div class="post">
        
        <p class="abstract"> {{ $post->abstract }}</p>

        <p><img src="{{$post->featured_image}}" alt="{{$post->title}}">
        </p>


        {!! $post->body !!}
    </div>

 
</body>
</html>