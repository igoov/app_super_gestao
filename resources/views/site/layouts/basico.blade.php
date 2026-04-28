<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        {{-- O link para o seu CSS moderno aqui --}}
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>
    <body>
        @include('site.layouts._partials.topo')
        @yield('conteudo')
    </body>
</html>