<?php
include "conn/conexao.php";
$sql = "INSERT into viagem (modeloCarro, placaCarro, motorista, localOrigem, localDestino, kilometragem, litroCombustivel, valorCombustivel) 
values (:modelo, :placa, :motorista, :origem, :destino, :km, :litro, :valor);";
$viagem = $conn->prepare($sql);
$viagem->execute(array('modelo'=>$_POST['modelo'], 'placa'=>$_POST['placa'], 'motorista'=>$_POST['motorista'], 'origem'=>$_POST['origem'],'destino'=>$_POST['origem'],
'destino'=>$_POST['destino'],'km'=>$_POST['km'],'litro'=>$_POST['litro'],'valor'=>$_POST['valor']));
