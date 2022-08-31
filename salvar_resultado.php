<?php
    include 'conn/conexao.php';
    $sql = "INSERT into resultado(valorKm, valorTotal) values (:valorKm, :valorTotal)";
    $result = $conn->prepare($sql);
    $result->execute(array('valorKm'=>$_GET['GastoKm'],'valorTotal'=>$_GET['GastoTotal']));
    
?>