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

        <button id="button1" class="botao" data-hint="Clique aqui para fazer avaliar o pavimento das ruas da sua cidade."></button>
        <button id="button2" class="botao" data-hint="Clique aqui para emitir um alerta sobre problemas na rua."></button>
        <div id="hint-box" class="hint-box"></div>

        <script src="https://maps.googleapis.com/maps/api/js?key="></script>
    </body>
</html>