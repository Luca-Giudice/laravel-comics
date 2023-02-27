<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    @yield('cdns')
</head>
<body>
    <main>
        @yield('main-contet')
    </main>
    @yield('scripts')
</body>
</html>