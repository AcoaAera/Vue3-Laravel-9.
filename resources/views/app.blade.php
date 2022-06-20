<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Название проекта</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app-vue">
        <app />
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>