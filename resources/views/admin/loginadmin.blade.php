<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contracheque Online | Administrador</title>

    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-icons-1.11.3/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/login-style.css')}}">


</head>
<body>

    <section class="card">
        <figure>
            <img class="d-block mx-auto" src="{{asset('img/logo-w.png')}}">
            <hr class="mx-auto" width="80%">
        </figure>

        <h2 class="text-center text-white">Login Admin</h2>
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" name="email" class="form-control" required>
                        <label>E-mail</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="password" name="pass" class="form-control" required>
                        <label>Senha</label>
                    </div>
                </div>
                <!-- <hr class="mx-auto" width="90%"> -->
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-block" title="Acessar sistema">Entrar</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="d-grid">
                <a href="#" class="btn btn-light btn-block" title="Adicionar novo usuário">Adicionar novo usuário!</a>
            </div>

        </div>

    </section>

</body>
</html>
