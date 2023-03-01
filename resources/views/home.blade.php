<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js');
</head>

<body>
    <header>
        <figure>
            <img src="{{asset('images/dc-logo.png')}}" alt="">
        </figure>
        <ul>
            <li>
                <a href="{{ url('/characters') }}">CHARACTERS</a>
            </li>
            <li>
                <a href="{{ url('/comics') }}">COMICS</a>
            </li>
            <li>
                <a href="{{ url('/movies') }}">MOVIES</a>
            </li>
            <li>
                <a href="{{ url('/tv') }}">TV</a>
            </li>
            <li>
                <a href="{{ url('/games') }}">GAMES</a>
            </li>
            <li>
                <a href="{{ url('/collectibles') }}">COLLECTIBLES</a>
            </li>
            <li>
                <a href="{{ url('/videos') }}">VIDEOS</a>
            </li>
            <li>
                <a href="{{ url('/fans') }}">FANS</a>
            </li>
            <li>
                <a href="{{ url('/news') }}">NEWS</a>
            </li>
            <li>
                <a href="{{ url('/shop') }}">SHOP</a>
            </li>
            <li>
                
            </li>
        </ul>
    </header>
</body>

</html>