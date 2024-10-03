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

        <button id="button1" class="botao" data-hint="Clique aqui para fazer avaliar o pavimento das ruas da sua cidade."></button>
        <button id="button2" class="botao" data-hint="Clique aqui para emitir um alerta sobre problemas na rua."></button>
        <div id="hint-box" class="hint-box"></div>

        <!-- prettier-ignore -->
        <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
            ({key: "{{ env('G_MAP_KEY') }}", v: "weekly"});
        </script>
    </body>
</html>