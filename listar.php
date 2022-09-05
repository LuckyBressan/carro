<?php 
    include "conn/conexao.php";
    

    $sql = "SELECT * from viagem";
    $lista = $conn->prepare($sql);
    $lista->execute();

    echo "<table class='table table-striped table-border'>";
        echo '<tr>';
            echo '<td>Modelo</td>';
            echo '<td>Placa</td>';
            echo '<td>Motorista</td>';
            echo '<td>Local de Origem</td>';
            echo '<td>Local de Destino</td>';
            echo '<td>Kilometragem</td>';
            echo '<td>Litro de Combustível Gasto</td>';
            echo '<td>Valor do Combustível</td>';
            echo '<td>Gasto por Km</td>';
            echo '<td>Gasto Total</td>';
            echo '<td>Ação</td>';
        echo '</tr>';
        foreach($lista as $linha) {
            echo '<tr>';
                echo "<td>".$linha['modeloCarro']."</td>";
                echo "<td>".$linha['placaCarro']."</td>";
                echo "<td>".$linha['motorista']."</td>";
                echo "<td>".$linha['localOrigem']."</td>";
                echo "<td>".$linha['localDestino']."</td>";
                echo "<td>".$linha['kilometragem']."</td>";
                echo "<td>".$linha['litroCombustivel']."</td>";
                echo "<td>".$linha['valorCombustivel']."</td>";
                echo "<td>R$ ".$linha['gastoPorKm']."</td>";
                echo "<td>R$ ".$linha['gastoTotal']."</td>";
                echo "<td><input type='submit' value='Deletar' id='deletar' class='btn btn-danger' onclick='fExcluirViagem(".$linha['id'].")'</td>";
            echo '</tr>';
        }
   
?>

<!-- <table class="table table-stripped table-border">
    <tr>
        <td>Modelo</td>
        <td>Placa</td>
        <td>Motorista</td>
        <td>Local de Origem</td>
        <td>Local de Destino</td>
        <td>Kilometragem</td>
        <td>Litro de Combustível Gasto</td>
        <td>Valor do Combustível</td>
    </tr>
!-->