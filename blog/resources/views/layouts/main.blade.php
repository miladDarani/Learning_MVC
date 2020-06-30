<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <style>

        .container {
            
            margin:0 auto;
        }

        nav{
            display: flex;
        }
        .main{
            display: flex;
            flex:7;
            flex-direction: column;
        }
        .content{
            flex:5;
            flex-direction: column;
        }

        nav.top li {
            display: inline-block;
            text-transform: uppercase;
            font-size: 1.1rem;
        }

        nav.bottom li {
            background-color:orange;
            display: inline-block;
            font-size: 0.9rem;
        }
        
    </style>
</head>
<body>
    <h1>Main Blade Layout</h1>

    <div class="container">
        <nav class="top">
            @include('partials/nav')
        </nav>

        <div class="content">

            <div class="main">

               @yield('content')
                
            </div>

            <div class="secondary">
                @yield('side')
            </div>

        </div>
        <nav class="bottom">
            @include('partials/nav')
        </nav>
    </div>
</body>
</html>