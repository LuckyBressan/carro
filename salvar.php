<?php
include "conn/conexao.php";

if(isset($_POST['salvar'])) {
    $dados = array('modelo'=>$_POST['modelo'], 'placa'=>$_POST['placa'], 'motorista'=>$_POST['motorista'], 'origem'=>$_POST['origem'],'destino'=>$_POST['origem'],
                'destino'=>$_POST['destino'],'kilometragem'=>$_POST['kilometragem'],'litro_combustivel'=>$_POST['litro_combustivel'],'valor_combustivel'=>$_POST['valor_combustivel'], 'gasto_por_km'=>$_POST['gasto_por_km'], 'gasto_total'=>$_POST['gasto_total']);

    $sql = "INSERT into viagem (modeloCarro, placaCarro, motorista, localOrigem, localDestino, kilometragem, litroCombustivel, valorCombustivel, gastoPorKm, gastoTotal) 
    values (:modelo, :placa, :motorista, :origem, :destino, :kilometragem, :litro_combustivel, :valor_combustivel, :gasto_por_km, :gasto_total);";
    $viagem = $conn->prepare($sql);
    $viagem->execute($dados);
}

?>