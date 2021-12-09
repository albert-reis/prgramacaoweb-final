<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Marcelo Albert Santana dos Reis, Ernani Alexandre Wippel Neto e Vitor Krowczuk Beirão">
    <link rel="icon" href="img/aba.png">

    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/select2/select2-bootstrap-5-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/DataTables/datatables.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    @yield('content');


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('libs/DataTables/datatables.js') }}"></script>
    <script src="{{ asset('libs/select2/select2.min.js') }}"></script>
</body>

</html>