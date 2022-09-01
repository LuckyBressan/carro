<?php
include 'conn/conexao.php';

$sql = "DELETE from viagem where id = :id";
$deletar = $conn->prepare($sql);
$deletar->execute(array('id'=>$_GET['id']));

?>