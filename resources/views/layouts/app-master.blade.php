<!doctype html>
<html lang="es">
<head>
    <title>@yield('titulo', 'NeuPoom')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- agrega el elemento meta con el token CSRF -->
    
    <!-- ICON -->
    <link rel="icon" type="image\x-icon" href="{{ asset('images/logo.ico') }}">

    <!-- Bootstrap v5.2.3 -->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3/css/bootstrap.min.css') }}">

    <!-- Bootstrap Icons v1.10.4 -->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3/bootstrap-icons-1.10.4/bootstrap-icons.css') }}">



{{-- 
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">

    <!-- estilos propios -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
    
    <!-- librerias -->
    @yield('librerias')
    <script src="{{ asset('bootstrap-5.2.3/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    
    <!-- index dom -->
    <script type="module" src="{{ asset('js/index_dom.js') }}"></script>     --}}

</head>
<body class="transicion">
    <!-- este deberia ser el navbar -->
    @include('layouts.partials.navbar')

    <main class="container-fluid my-4">
        <h1 class="display-5 text-center">@yield('encabezado')</h1>
        @yield('contenido')
    </main>

    @include('layouts.partials.footer')


    @auth
    <script src="{{ asset('js/notificaciones.js') }}"></script>
    @endauth

  </body>
</html>
