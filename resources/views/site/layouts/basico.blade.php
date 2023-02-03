<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href=" {{ @asset('css/style-basic.css') }} ">
    </head>

    <body>
        @include('site._partials.topo')
        @yield('conteudo')
        @include('site._partials.rodape')
    </body>
</html>