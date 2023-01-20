<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>{{ $tituloHead ?? 'BarReynolds' }}</title>

</head>
<body>
{{--    <x-zz.menu />--}}

<h1>{{ $tituloVisible }}</h1>

<hr/>

{{ $slot }}

{{--    <x-zz.pie />--}}
</body>
</html>
