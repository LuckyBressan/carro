function fValida() {
    const vmodelo=$("#modelo").val();
    const vplaca=$("#placa").val();
    const vmotorista=$("#motorista").val();
    const vorigem=$("#origem").val();
    const vdestino=$("#destino").val();
    const vkm=$("#km").val();
    const vlitro=$("#litro").val();
    const vvalor=$("#valor").val();

    let valido = true;

    if (vmodelo == "") {
        alert("Modelo é Obrigatório");
        $("#modelo").focus();
        valido = false;
    } else if (vplaca == "") {
        alert("Placa é Obrigatório");
        $("#placa").focus();
        valido = false;
    } else if (vmotorista == "") {
        alert("Nome do motorista é Obrigatório");
        $("#motorista").focus();
        valido = false;
    } else if (vorigem == "") {
        alert("Local de Origem é Obrigatório");
        $("#origem").focus();
        valido = false;
    } else if (vdestino == "") {
        alert("Local de Destino é Obrigatório");
        $("#destino").focus();
        valido = false;
    } else if (vkm == "") {
        alert("Kilometragem é Obrigatório");
        $("#km").focus();
        valido = false;
    } else if (vlitro == "") {
        alert("Litros de Combustível Gastos é Obrigatório");
        $("#litros").focus();
        valido = false;
    } else if (vvalor == "") {
        alert("Valor do Combustível é Obrigatório");
        $("#valor").focus();
        valido = false;
    } 
    return(valido);
}

$("#salvar").click(function(){
    if(!fValida()) {
        document.getElementById('dMostra').innerHTML = "Erro, não válido";
        return;
    } else {
        var vLitro = parseFloat(document.getElementById('litro').value);
        var vValor = parseFloat(document.getElementById('valor').value);
        var vKm = parseFloat(document.getElementById('km').value);

        var vTotal = vLitro*vValor;
        var vGasto = vTotal/vKm;
        document.getElementById('vGastoKM').value = vGasto;
        document.getElementById('vGastoTotal').value = vTotal;

        $.post("salvar.php", 
                {modelo:$('#modelo').val(),
                placa:$('#placa').val(),
                motorista:$('#motorista').val(),
                origem:$('#origem').val(),
                destino:$('#destino').val(),
                kilometragem:$('#km').val(),
                litro_combustivel:$('#litro').val(),
                valor_combustivel:$('#valor').val(),
                gasto_por_km:$('#vGastoKM').val(),
                gasto_total:$('#vGastoKM').val(),
                salvar: $('#salvar').val()
                }, function(result){
                    //$("span").html(result);
                    document.getElementById('dMostra').innerHTML = result;
                    document.getElementById('dMostra').innerHTML = "Salvo com Sucesso!!!";
        });

        


    
    }
});
$('#lista').click(function (){
    $.post("listar.php",function(result){
        document.getElementById('dMostra').innerHTML = result;
    })
})


function fExcluirViagem(id) {
    let acao = "excluir.php?id="+id;

    $.get(acao, function(dados,status){
        if(status=="success") {
            alert("Deletado com Sucesso");
            location.reload();
        }
    })
}
