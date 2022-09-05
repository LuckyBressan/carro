<h1>Cadastrar Viagem</h1>
        <form id="c_viagem">
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
                <input type="text" class="form-control" id="vGastoKM" readonly>
            </div>
            <div class="mb-3">
                <label for="vGastoTotal" class="form-label">Valor Gasto no Total:</label>
                <input type="text" class="form-control" id="vGastoTotal" readonly>
            </div>
            <div class="mb-3">
                <input type="button" value="Salvar" id="salvar" class="btn btn-success">&nbsp;&nbsp;
                <input type="button" value="Listar" id="lista" class="btn btn-primary">&nbsp;&nbsp;
                <input type="reset" value="Limpar" id="limpa" class="btn btn-warning">&nbsp;&nbsp;
            </div>
            <div class="border border-warning text-center">
                <p id="dMostra"></p>
            </div>
        </form>