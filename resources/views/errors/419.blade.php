<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>419 page | Welcome to MeuAgente</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global level css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- end of globallevel css-->
    <!-- page level styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/404.css') }}" />
    <!-- end of page level styles-->
</head>

<body>
    <div class="hgroup" style="margin-top:40%;">
        <h1>Essa página expirou por inatividade.</h1>
        <h2><a href="{{ route('home') }}">Clique aqui</a> para voltar à pagina principal.</h2>
    </div>
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('assets/js/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/js/livicons-1.4.min.js') }}"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script src="{{ asset('assets/js/frontend/404.js') }}"></script>
    <!-- end of page level js-->
</body>
</html>