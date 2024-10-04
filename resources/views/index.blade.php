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
    <button id="button1" class="botao" data-hint="Clique aqui para avaliar os pavimentos das ruas da sua cidade."></button>
    <button id="button2" class="botao" data-hint="Clique aqui para emitir um alerta sobre problemas na sua rua."></button>
    <div id="hint-box" class="hint-box"></div>
    
    <form id="crudForm1">
        <div class="form-group">
            <label for="endereco1"><b>Endereço (rua, bairro, cidade):</b></label>
            <input type="text" id="endereco1" name="local" required>
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
            <label for="observacoes1"><b>Observações:</b></label>
            <input type="text" id="observacoes1" name="complemento" required>
        </div>

        <div class="form-group4">
            <button type="submit" id="sendButton1">Enviar</button>
            <button type="button" id="cancelButton1">Cancelar</button>
        </div>
    </form>

    <form id="crudForm2">
        <div class="form-group5">
            <label for="endereco1"><b>Endereço (rua, bairro, cidade):</b></label>
            <input type="text" id="endereco2" name="local" required>
        </div>

        <div class="form-group6">
            <label><b>Alerta (selecione):</b></label><br>
            <input type="radio" id="alagamento" name="alerte" value="opcao9">
            <label for="alagamento">Alagamento</label><br>
            <input type="radio" id="acidente" name="alerte" value="opcao10">
            <label for="acidente">Acidente</label><br>
            <input type="radio" id="animalPerigoso" name="alerte" value="opcao11">
            <label for="animalPerigoso">Animal perigoso</label><br>
            <input type="radio" id="animalDesaparecido" name="alerte" value="opcao12">
            <label for="animalDesaparecido">Animal desaparecido</label><br>
            <input type="radio" id="buraco" name="alerte" value="opcao13">
            <label for="buraco">Buraco</label><br>
            <input type="radio" id="tiroteio" name="alerte" value="opcao14">
            <label for="tiroteio">Tiroteio</label><br>
            <input type="radio" id="vazamentoDeBueiro" name="alerte" value="opcao15">
            <label for="vazamentoDeBueiro">Vazamento de bueiro</label><br>
        </div>

        <div class="form-group7">
            <label for="observacoes1"><b>Observações:</b></label>
            <input type="text" id="observacoes2" name="complemento" required>
        </div>

        <div class="form-group8">
            <input type="file" id="imagem" name="arquivo" required>
        </div>

        <div class="form-group9">
            <button type="submit" id="sendButton2">Enviar</button>
            <button type="button" id="cancelButton2">Cancelar</button>
        </div>
    </form>

</body>

</html>