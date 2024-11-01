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

    <div id="map"></div>
    <p id="info" class="info"></p>

    <button id="button1" class="botao" data-hint="Clique aqui para avaliar os pavimentos das ruas da sua cidade."></button>
    <button id="button2" class="botao" data-hint="Clique aqui para emitir um alerta sobre problemas na sua rua."></button>
    <div id="hint-box" class="hint-box"></div>

    
    @if(session('sucesso'))
        <div id="sucesso">
            {{ session('sucesso') }}
        </div>
    @endif

    @if(session('emitido'))
        <div id="emitido">
           <center>{{ session('emitido') }}</center>
        </div>
    @endif
    
    
    <form id="crudForm1" action="{{ route('avaliacao') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="endereco1"><b>Endereço (rua, bairro, cidade):</b></label>
            <input type="text" id="endereco1" name="local" required>
        </div>

        <div class="form-group1">
            <label><b>Modelo de pavimento (selecione):</b></label><br>
            <input type="radio" id="asfalto" name="modelo" value="Asfalto">
            <label for="asfalto">Asfalto</label><br>
            <input type="radio" id="bloquete" name="modelo" value="Bloquete">
            <label for="bloquete">Bloquete</label><br>
            <input type="radio" id="semPavimento" name="modelo" value="Sem Pavimento">
            <label for="semPavimento">Sem pavimento</label>
        </div>

        <div class="form-group2">
            <label><b>Avalie a condição do pavimento (selecione):</b></label><br>
            <input type="radio" id="muitoBom" name="avalie" value="Muito Bom">
            <label for="muitoBom">Muito bom</label><br>
            <input type="radio" id="bom" name="avalie" value="Bom">
            <label for="bom">Bom</label><br>
            <input type="radio" id="ok" name="avalie" value="Ok">
            <label for="ok">Ok</label><br>
            <input type="radio" id="ruim" name="avalie" value="Ruim">
            <label for="ruim">Ruim</label><br>
            <input type="radio" id="muitoRuim" name="avalie" value="Muito Ruim">
            <label for="muitoRuim">Muito ruim</label>
        </div>

        <div class="form-group3">
            <label for="observacoes1"><b>Observações:</b></label>
            <input type="text" id="observacoes1" name="complemento">
        </div>

        <div class="form-group4">
            <button type="submit" id="sendButton1">Enviar</button>
            <button type="button" id="cancelButton1">Cancelar</button>
        </div>
    </form>

    <form id="crudForm2" action="{{ route('alerta') }}" method="post">
        @csrf
        <div class="form-group5">
            <label for="endereco1"><b>Endereço (rua, bairro, cidade):</b></label>
            <input type="text" id="endereco2" name="local" required>
        </div>

        <div class="form-group6">
            <label><b>Alerta (selecione):</b></label><br>
            <input type="radio" id="alagamento" name="alerte" value="Alagamento">
            <label for="alagamento">Alagamento</label><br>
            <input type="radio" id="acidente" name="alerte" value="Acidente">
            <label for="acidente">Acidente</label><br>
            <input type="radio" id="animalSilvestre" name="alerte" value="Animal Silvestre">
            <label for="animalPerigoso">Animal silvestre</label><br>
            <input type="radio" id="animalDesaparecido" name="alerte" value="Animal Desaparecido">
            <label for="animalDesaparecido">Animal desaparecido</label><br>
            <input type="radio" id="buraco" name="alerte" value="Buraco">
            <label for="buraco">Buraco</label><br>
            <input type="radio" id="tiroteio" name="alerte" value="Tiroteio">
            <label for="tiroteio">Tiroteio</label><br>
            <input type="radio" id="vazamentoDeBueiro" name="alerte" value="Vazamento de Bueiro">
            <label for="vazamentoDeBueiro">Vazamento de bueiro</label><br>
        </div>

        <div class="form-group7">
            <label for="observacoes1"><b>Observações:</b></label>
            <input type="text" id="observacoes2" name="complemento">
        </div>

        <div class="form-group8">
            <input type="file" id="imagem" name="arquivo">
        </div>

        <div class="form-group9">
            <button type="submit" id="sendButton2">Enviar</button>
            <button type="button" id="cancelButton2">Cancelar</button>
        </div>
    </form>

    <script src="https://maps.googleapis.com/maps/api/js?key="></script>

</body>

</html>