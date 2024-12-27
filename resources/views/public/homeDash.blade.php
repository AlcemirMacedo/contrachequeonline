<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <link rel="stylesheet" href="{{asset('bootstrap-4.1.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-icons-1.11.3/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dash-usuario.css')}}">
</head>
<body>
    <header>

        <div class="container-fluid">
            <h3>Olá, <span class="user-info">Alcemir Macêdo</span>! Sua matrícula: <span class="user-info">669.528.592-68</span></h3>
        </div>
        <div><button>Ano 2024</button> <button>Dezembro</button></div>

    </header>
    <hr>

    <section class="container">
        <div class="dados-empresa-div">
            <p>Instituição: <span class="dados-empresa">Prefeitura Municipal de Boca do Acre</span></p>
            <p>CNPJ: <span class="dados-empresa">15.811.318/0001-20</span></p>
        </div>
        <div class="infoGeral">
            <div class="info prov">Proventos:<br/>R$ <span class="valor">2.500,00</span></div>
            <div class="info desc">Descontos:<br/><span class="valor">R$ 150,00</span></div>
            <div class="info liq">Líquido:<br/><span class="valor">R$ 2.350,00</span></div>
        </div>
    </section>

    <section>
        <div class="accordion container" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Dados Pessoais
                    <i class="bi bi-chevron-down"></i>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>CPF: <span class="user-info">789.558.578-55</span><br></p>
                            <p>Nome: <span class="user-info">Alcemir Macedo de Souza</span><br></p>
                            <p>Matrículas: <span class="user-info">66952859268 / 92983563052</span></p>
                        </div>
                        <div class="col-md-6">
                            <p>Nome da Mãe: <span class="user-info">Socorro Cavalcanti Maciel</span></p>
                            <p>Nome do Pai: <span class="user-info">Alvez Camaruel Glouber</span></p>
                        </div>
                    </div>
                    <hr>

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Dados Contratuais
                    <i class="bi bi-chevron-down"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Some placeholder content for the second accordion panel. This panel is hidden by default.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Proventos
                    <i class="bi bi-chevron-down"></i>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                </div>
              </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                      Descontos
                      <i class="bi bi-chevron-down"></i>
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                  </div>
                </div>
              </div>
          </div>
    </section>
    <div>
        <p></p>
    </div>


    <script type="text/javascript" src="{{asset('js/jquery-3.4.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-4.1.3-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
