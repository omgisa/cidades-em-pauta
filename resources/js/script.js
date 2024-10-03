document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('button[data-hint]');
    const hintBox = document.getElementById('hint-box');
  
    buttons.forEach(button => {
        button.addEventListener('mouseover', showHint);
        button.addEventListener('mouseout', hideHint);
    });
  
    function showHint(event) {
        const hint = event.target.getAttribute('data-hint');
        const buttonId = event.target.id;
        
        hintBox.textContent = hint;
        hintBox.style.display = 'block';
        
        // Definir a cor de fundo com base no ID do botão
        if (buttonId === 'button1') {
            hintBox.style.backgroundColor = '#FFD700'; // Amarelo
            hintBox.style.color = '#000000';
        } else if (buttonId === 'button2') {
            hintBox.style.backgroundColor = '#FF0000'; // Vermelho
            hintBox.style.color = '#FFFFFF';
        }
        
        const rect = event.target.getBoundingClientRect();
        hintBox.style.right = (window.innerWidth - rect.left + 10) + 'px';
        hintBox.style.top = rect.top + 'px';
    }
  
    function hideHint() {
        hintBox.style.display = 'none';
    }
  });

  // Initialize and add the map
let map;

async function initMap() {
  // The location of SESI Lorena
  const position = { lat: -22.7251316, lng: -45.1214007 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  // The map, centered at SESI Lorena
  map = new Map(document.getElementById("map"), {
    zoom: 12,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  // The marker, positioned at SESI Lorena
  const marker = new AdvancedMarkerElement({
    map: map,
    position: position,
    title: "SESI Lorena",
  });
}

initMap();

document.getElementById('button1').addEventListener('click', function() {
    document.getElementById('crudForm').style.display = 'block'; // Mostra o formulário
});

document.getElementById('cancelButton').addEventListener('click', function() {
    document.getElementById('crudForm').style.display = 'none'; // Esconde o formulário
});