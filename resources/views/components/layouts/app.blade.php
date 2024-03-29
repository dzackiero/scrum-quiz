<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Instumen Penilaian Scrum Tim Development' }}</title>
    @wireUiStyles
    @wireUiScripts
    @vite('resources/css/app.css')

    @env('production')
    <link rel="preload" as="style" href="public/build/assets/app-cV5UvxHO.css">
    <link rel="stylesheet" href="public/build/assets/app-cV5UvxHO.css">
    @endenv
</head>

<body>
    {{ $slot }}
</body>

</html>
