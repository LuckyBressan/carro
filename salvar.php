<?php
include "conn/conexao.php";
$sql = "INSERT into viagem (modeloCarro, placaCarro, motorista, localOrigem, localDestino, kilometragem, litroCombustivel, valorCombustivel) 
values (:modelo, :placa, :motorista, :origem, :destino, :km, :litro, :valor);";
$viagem = $conn->prepare($sql);
$viagem->execute(array('modelo'=>$_GET['modelo'], 'placa'=>$_GET['placa'], 'motorista'=>$_GET['motorista'], 'origem'=>$_GET['origem'],'destino'=>$_GET['origem'],
'destino'=>$_GET['destino'],'km'=>$_GET['km'],'litro'=>$_GET['litro'],'valor'=>$_GET['valor']));
?>