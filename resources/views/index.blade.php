<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades em Pauta</title>
    @vite(['resources/css/style.css', 'resources/js/app.js', 'resources/js/script.js'])
</head>
<body>
    <header>
        <header>
            <div class="header-left">
                <img src="{{ asset('img/city_life.png') }}" alt="Logo" width="70" height="70">
                <p id="titulo">CIDADES EM PAUTA</p>
            </div>
            <div class="header-right">
                <img src="{{ asset('img/lupa.png') }}" alt="Search" width="50" height="50">
            </div>
        </header>
    </header>
    <iframe class="map-iframe" = "Lazy" allowfullscreen
        src="https://www.google.com/maps/embed/v1/search?q=Lorena&key=AIzaSyCHaRZdxQ3SQqK0oeCjxmuVQ7da0Zm5NCg"></iframe>
<button id="button1" class="botao" data-hint="Clique aqui para fazer avaliar o pavimento das ruas da sua cidade."></button>
<button id="button2" class="botao" data-hint="Clique aqui para emitir um alerta sobre problemas na rua."></button>
<div id="hint-box" class="hint-box"></div>
</body>
</body>
</html>