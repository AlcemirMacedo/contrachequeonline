<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contracheque Online | Usuário</title>

    <link rel="stylesheet" href="{{asset('bootstrap-4.1.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-icons-1.11.3/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/login-style.css')}}">
    <script src={{ asset('js/sweetalert.min.js') }}></script>

</head>
<body>

    <section class="card">
        <figure>
            <img class="d-block mx-auto" src="{{asset('img/logo-w.png')}}">
            <hr class="mx-auto" width="80%">
        </figure>

        <h2 class="text-center text-white">Login Usuário</h2>
        <section class="card-body">
            @if (Session::has('success'))
                {{-- <div class="alert alert-success">{{ Session::get('success') }}</div> --}}

                <script>
                    swal({
                        title:"Contracheque Online Sucesso",
                        text:"{{ Session::get('success') }}",
                        icon:"success"
                    });
                </script>
            @endif
            @if (Session::has('error'))
                <script>
                    swal({
                        title:"Contracheque Online Erro",
                        text:"{{ Session::get('error') }}",
                        icon:"error"
                    });
                </script>
            @endif

            @if (Session::has('successlogin'))
                <script>
                    swal({
                        title:"Contracheque Online Sucesso",
                        text:"{{ Session::get('successlogin') }}",
                        icon:"success",
                        button:{
                            text:"OK"
                        }
                    })
                    .then((value)=>{
                        window.location.href="/dash";
                    });
                </script>
            @endif

            @if (Session::has('errorlogin'))
                <script>
                    swal({
                        title:"Contracheque Online Erro",
                        text:"{{ Session::get('errorlogin') }}",
                        icon:"error"
                    });
                </script>
            @endif
            <form action="/login" method="POST" autocomplete="no">
                @csrf
                <section class="form-row">
                    <section class="form-group col-md-12">
                        <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}" required>
                        <label>CPF:</label>
                    </section>
                </section>
                <section class="form-row">
                    <section class="form-group col-md-12">
                        <input type="password" name="pass" class="form-control" required>
                        <label>Senha</label>
                    </section>
                </section>
                <!-- <hr class="mx-auto" width="90%"> -->
                <section class="form-row">
                    <section class="form-group col-md-12">
                        <section class="d-grid">
                            <button type="submit" class="btn btn-success btn-block" title="Acessar sistema">Entrar</button>
                        </section>
                    </section>
                </section>
            </form>

            <section class="d-grid">
                <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-light btn-block" title="Adicionar novo usuário">Adicionar novo usuário!</button>
            </section>

        </section>

    </section>

    <section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="{{ '/adduser' }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="fullname">Nome Completo</label>
                        <input type="text" name="fullname" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="senha">Senha</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group col md-6">
                        <label for="confirme">Confirmar Senha</label>
                        <input type="password" name="confirme" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <button type="button" class="btn btn-light" data-dismiss="modal" aria-label="Close">
                    Cancelar
                </button>
            </form>
            </div>

        </div>
        </div>
    </div>

    </section>

    <script type="text/javascript" src="{{asset('js/jquery-3.4.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-4.1.3-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
