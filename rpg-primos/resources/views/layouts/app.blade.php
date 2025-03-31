<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <title>{{ config('app.name', 'RPG PRIMOS') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div id="app"
            style="display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                width:100%;
                height:100vh;
                background-color:#001219;
                color:#BB3E03;
                border:1px solid #BB3E03;
                " 
            class=""> 
        <!-- CABECALHO -->
        @yield('content')
        <!-- RODAPE -->
    </div>
</body>
</html>
