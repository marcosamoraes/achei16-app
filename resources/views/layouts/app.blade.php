<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Guia de empresas em Ribeirão Preto/SP - http://www.achei16.com.br">
    <meta name="abstract" content="guia, hotel, restaurante, empresas em Ribeirão Preto/SP.">
    <meta name="keywords"
        content="hotel em Ribeirão Preto, achei 16, restaurante, academia, veículos, bar, som automotivo, restaurante em ribeirão preto, cinema, o que fazer em Ribeirão Preto, lojas,  ">
    <meta name="author" content="Marcos Moraes - http://www.marcosamoraes.com">

    <title>{{ config('app.name', 'Achei 16') }} - @yield('title')</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="favicon.ico">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="favicon.ico">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="favicon.ico">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/css/custom.css" rel="stylesheet">
</head>

<body>
    @include('components.header')

    @yield('content')

    @include('components.footer')

    <div id="toTop"></div><!-- Back to top button -->

    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->

	<!-- COMMON SCRIPTS -->
    <script src="/js/common_scripts.min.js"></script>
    <script src="/js/common_func.js"></script>
    <script src="/assets/validate.js"></script>

    @stack('scripts')
</body>

</html>
