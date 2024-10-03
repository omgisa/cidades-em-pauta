<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/city_life_2.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <title>Cidades em Pauta</title>
    @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])
</head>

<body>
    <header>
        <div class="header-left">
            <img src="{{ asset('img/city_life.png') }}" alt="Logo" width="70" height="70">
            <p id="titulo">CIDADES EM PAUTA</p>
        </div>
        <div class="header-right">
            <img src="{{ asset('img/lupa.png') }}" alt="Search" width="50" height="50">
        </div>
    </header>
    <iframe class="map-iframe"="Lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/search?q=Lorena&key=AIzaSyCHaRZdxQ3SQqK0oeCjxmuVQ7da0Zm5NCg"></iframe>
    <button id="button1" class="botao" data-hint="Clique aqui para fazer avaliar o pavimento das ruas da sua cidade."></button>
    <button id="button2" class="botao" data-hint="Clique aqui para emitir um alerta sobre problemas na rua."></button>
    <div id="hint-box" class="hint-box"></div>
    
    <form id="crudForm">
        <div class="form-group">
            <label for="endereco"><b>Endereço (rua, bairro, cidade):</b></label>
            <input type="text" id="endereco" name="local" required>
        </div>

        <div class="form-group1">
            <label><b>Modelo de pavimento (selecione):</b></label><br>
            <input type="radio" id="asfalto" name="modelo" value="opcao1">
            <label for="asfalto">Asfalto</label><br>
            <input type="radio" id="bloquete" name="modelo" value="opcao2">
            <label for="bloquete">Bloquete</label><br>
            <input type="radio" id="semPavimento" name="modelo" value="opcao3">
            <label for="semPavimento">Sem pavimento</label>
        </div>

        <div class="form-group2">
            <label><b>Avalie a condição do pavimento (selecione):</b></label><br>
            <input type="radio" id="muitoBom" name="avalie" value="opcao4">
            <label for="muitoBom">Muito bom</label><br>
            <input type="radio" id="bom" name="avalie" value="opcao5">
            <label for="bom">Bom</label><br>
            <input type="radio" id="ok" name="avalie" value="opcao6">
            <label for="ok">Ok</label><br>
            <input type="radio" id="ruim" name="avalie" value="opcao7">
            <label for="ruim">Ruim</label><br>
            <input type="radio" id="muitoRuim" name="avalie" value="opcao8">
            <label for="muitoRuim">Muito ruim</label>
        </div>

        <div class="form-group3">
            <label for="observacoes"><b>Observações:</b></label>
            <input type="text" id="observacoes" name="complemento" required>
        </div>

        <div class="form-group4">
            <button type="submit" id="sendButton">Enviar</button>
            <button type="button" id="cancelButton">Cancelar</button>
        </div>
    </form>

</body>

</html>