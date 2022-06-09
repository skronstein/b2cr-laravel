<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Burnout 2 Cheat Rankings</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="p-3 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Videos</a>
            </li>
            <li>
                <a href="" class="p-3">Setup</a>
            </li>
            <li>
                <a href="" class="p-3">Info</a>
            </li>
            <li>
                <a href="" class="p-3">Contact</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Submit</a>
            </li>
        </ul>
    </nav>
    <nav class="p-3 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            @for($itr = 1; $itr <=15 ; $itr++)
                <li>
                    <a href="/tracks/{{$itr}}" class="p-3"><img src="/images/tracks/{{$itr}}.png"></a>
                </li>
            @endfor
        </ul>
    </nav>
    @yield('content')
</body>
</html>