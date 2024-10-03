<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/city_life_2.png') }}">
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
            <label for="input1">Endereço (rua, bairro, cidade):</label>
            <input type="text" id="input1" name="input1" required>
        </div>

        <div class="form-group">
            <label>Tipo de pavimentação (selecione):</label><br>
            <input type="radio" id="option1" name="group1" value="opcao1">
            <label for="option1">Opção 1</label><br>
            <input type="radio" id="option2" name="group1" value="opcao2">
            <label for="option2">Opção 2</label><br>
            <input type="radio" id="option3" name="group1" value="opcao3">
            <label for="option3">Opção 3</label>
        </div>

        <div class="form-group">
            <label>Avalie a condição do pavimento (selecione):</label><br>
            <input type="radio" id="option4" name="group2" value="opcao4">
            <label for="option4">Opção 4</label><br>
            <input type="radio" id="option5" name="group2" value="opcao5">
            <label for="option5">Opção 5</label><br>
            <input type="radio" id="option6" name="group2" value="opcao6">
            <label for="option6">Opção 6</label><br>
            <input type="radio" id="option7" name="group2" value="opcao7">
            <label for="option7">Opção 7</label><br>
            <input type="radio" id="option8" name="group2" value="opcao8">
            <label for="option8">Opção 8</label>
        </div>

        <div class="form-group">
            <label for="input2">Observações:</label>
            <input type="text" id="input2" name="input2" required>
        </div>

        <div class="form-group">
            <button type="submit">Enviar</button>
            <button type="button" onclick="document.getElementById('crudForm').reset();">Cancelar</button>
        </div>
    </form>

</body>

</html>