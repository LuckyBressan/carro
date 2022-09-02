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

function fCadastraViagem(modelo, placa, motorista, origem, destino, km, litro, valor) {
    if(!fValida()) {
    document.getElementById('dMostra').innerHTML = "Erro, não válido";
    return;
    } else {
    var vLitro = parseFloat(document.getElementById('litro').value);
    var vValor = parseFloat(document.getElementById('valor').value);
    var vKm = parseFloat(document.getElementById('km').value);

    var vTotal = vLitro*vValor;
    var vGasto = vTotal/vKm;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","salvar.php?modelo="+modelo+"&placa="+placa+"&motorista="+motorista+"&origem="+origem+"&destino="+destino+
    "&km="+km+"&litro="+litro+"&valor="+valor+"&gasto_litro="+vGasto+"&gasto_total="+vTotal,true);
    xmlhttp.send();

    

    document.getElementById('vGastoKM').value = vGasto;
    document.getElementById('vGastoTotal').value = vTotal;

    document.getElementById('dMostra').innerHTML = "Salvo com Sucesso!!!";
    }
}

function fListarViagens() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('dMostra').innerHTML = this.responseText;
    }
    }
    xmlhttp.open("GET","listar.php",true);
    xmlhttp.send();
}

function fExcluirViagem(id) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET',"excluir.php?id="+id,true)
    xmlhttp.send();
}
