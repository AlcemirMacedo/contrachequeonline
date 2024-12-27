<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contracheque Online | Painel</title>

    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-icons-1.11.3/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dash-style.css')}}">

    <script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" role="navigation">
        <a class="navbar-brand">
            <img class="img-fluid" src="{{asset('img/logo-w.png')}}">
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#myCollapse" aria-controls="myCollapse" aria-expanded="false">
            <i class="bi bi-list"></i>
        </button>

        <section class="collapse navbar-collapse" id="myCollapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Usuários
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Envios
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Configurações
                    </a>
                </li>
            </ul>
        </section>
    </nav>

    <iframe id="myFrame" name="myframe" src="/dash/home" height="1" frameborder="1" width="100%" scrolling="no">


    </iframe>






    <script type="text/javascript" src="{{asset('js/jquery-3.4.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-5.3.3-dist/js/bootstrap.min.js')}}"></script>

</body>
</html>
