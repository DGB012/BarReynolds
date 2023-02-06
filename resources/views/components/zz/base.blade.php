<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" type="image/x-icon" href="/img/icono.png">


    <title>{{ $tituloHead ?? 'BarReynolds' }}</title>

</head>
<body>
<x-zz.menu/>

<h1>{{ $tituloVisible }}</h1>

<hr/>

{{ $slot }}

{{--    <x-zz.pie />--}}
<script src="/js/app.js"></script>

</body>
</html>
