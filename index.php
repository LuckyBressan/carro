<?php 
    session_start();

    include_once "conn/conexao.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratório - Java Script Moderno - Ajax e JQuery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <h1>Cadastrar Viagem</h1>
        <form method="get" id="c_viagem">
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" class="form-control" id="modelo" placeholder="Informe o modelo do carro..." required>
            </div>
            <div class="mb-3">
                <label for="placa" class="form-label">Placa:</label>
                <input type="text" class="form-control" id="placa" placeholder="Informe a placa do carro..." required>
            </div>
            <div class="mb-3">
                <label for="motorista" class="form-label">Motorista:</label>
                <input type="text" class="form-control" id="motorista" placeholder="Informe o nome do motorista..." required>
            </div>
            <div class="mb-3">
                <label for="origem" class="form-label">Local de Origem:</label>
                <input type="text" class="form-control" id="origem" placeholder="Informe o local de origem..." required>
            </div>
            <div class="mb-3">
                <label for="destino" class="form-label">Local de Destino:</label>
                <input type="text" class="form-control" id="destino" placeholder="Informe o local de destino..." required>
            </div>
            <div class="mb-3">
                <label for="km" class="form-label">Kilometragem:</label>
                <input type="number" class="form-control" id="km" placeholder="Informe a kilometragem..." required>
            </div>
            <div class="mb-3">
                <label for="litro" class="form-label">Litro de Combustível:</label>
                <input type="number" class="form-control" id="litro" placeholder="Informe a quantidade de combustível gasto..." required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor do Combustível:</label>
                <input type="number" class="form-control" id="valor" placeholder="Informe o valor do combustível..." required>
            </div>
            <div class="mb-3">
                <label for="vGastoKM" class="form-label">Valor Gasto por KM:</label>
                <input type="number" class="form-control" id="vGastoKM" readonly>
            </div>
            <div class="mb-3">
                <label for="vGastoTotal" class="form-label">Valor Gasto no Total:</label>
                <input type="number" class="form-control" id="vGastoTotal" readonly>
            </div>
            <div class="mb-3">
                <input type="submit" value="Salvar" id="salvar" class="btn btn-success">&nbsp;&nbsp;
                <input type="button" value="Listar" id="lista" class="btn btn-primary">&nbsp;&nbsp;
                <input type="reset" value="Limpar" id="limpa" class="btn btn-warning">&nbsp;&nbsp;
                <input type="button" value="Limpar Array" id="limpa_tudo" class="btn btn-danger">&nbsp;&nbsp;
            </div>
            <div class="alert alert-warning">
                <p id="dMostra"></p>
            </div>
        </form>
        <form action="/lucas/java/paginaprincipal/index.php">
            <input type="submit" value="Página Principal" class="btn btn-info">
        </form>
    </div>
  </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="viagem.js"></script>
    <script lang="JavaScript">
                document.getElementById("c_viagem").onsubmit = function() {
                    
                    var dados = $('#c_viagem').serialize();

                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        url: 'http://localhost/JavaScript_Moderno/carro/salvar.php',
                        async: true,
                        data: dados,
                        success: function(response) {
                            location.reload();
                        }
                    })

                    var vLitro = parseFloat(document.getElementById('litro').value);
                    var vValor = parseFloat(document.getElementById('valor').value);
                    var vKm = parseFloat(document.getElementById('km').value);

                    


                    document.getElementById('dMostra').innerHTML = "Salvo com Sucesso!!! <br> Número de Viagens: " + ContAluno();
                }
    </script>
</html>