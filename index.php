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
        <?php include 'cadastro.php'; ?>

    </div>
  </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="viagem.js"></script>
    <script lang="JavaScript">
        function fCadastraViagem(modelo, placa, motorista, origem, destino, km, litro, valor) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","salvar.php?modelo="+modelo+"&placa="+placa+"&motorista="+motorista+"&origem="+origem+"&destino="+destino+
            "&km="+km+"&litro="+litro+"&valor="+valor,true);
            xmlhttp.send();

            var vLitro = parseFloat(document.getElementById('litro').value);
            var vValor = parseFloat(document.getElementById('valor').value);
            var vKm = parseFloat(document.getElementById('km').value);

            var vTotal = vLitro*vValor;
            var vGasto = vTotal/vKm;

            document.getElementById('vGastoKM').value = vGasto;
            document.getElementById('vGastoTotal').value = vTotal;

            document.getElementById('dMostra').innerHTML = "Salvo com Sucesso!!! <br> Número de Viagens: ";
        }
        function fCadastraResultado(vGastoKM, vGastoTotal) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","salvar_resultado.php?GastoKm="+vGastoKM+"&GastoTotal="+vGastoTotal,true);
            xmlhttp.send();

        }
    </script>
</html>