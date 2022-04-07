<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url(mix('site/css/app.css')) }}" type="text/css">
        <link rel="stylesheet" href="{{ url(mix('site/css/menu.css')) }}" type="text/css">
        <link rel="stylesheet" href="{{ url(mix('site/css/tabela.css')) }}" type="text/css">
    </head>
    <body>
        @yield('content')
        @stack('scripts')
    </body>
</html>
