<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal Informasi Kegiatan PSTI</title>

    <!-- Fonts -->

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

    <!-- Styles -->

</head>

<body class="container mx-auto">
    {{-- navigation --}}
    @include('templates.navigation')

</body>

</html>