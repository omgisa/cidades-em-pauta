// Initialize and add the map
let map;

async function initMapBkp(lat = -22.7251316, lon = -45.1214007) {
    // The location of SESI Lorena
    const position = { lat: lat, lng: lon };
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

async function getLatitudeLongitude(key){
    /*
    var xhr = new XMLHttpRequest();
    // we defined the xhr

    xhr.onreadystatechange = function () {
        if (this.readyState != 4) return;

        if (this.status == 200) {
            var data = JSON.parse(this.responseText);

            console.log(data);
        }else{
            initMap();
        }
    };

    xhr.open('GET', 'https://www.googleapis.com/geolocation/v1/geolocate?key=' + key, true);
    xhr.send();
    */
}

/**
 * Create google maps Map instance.
 * @param {number} lat
 * @param {number} lng
 * @return {Object}
 */
const createMap = ({ lat, lng }) => {
    return new google.maps.Map(document.getElementById('map'), {
      center: { lat, lng },
      zoom: 15
    });
};
  
/**
 * Create google maps Marker instance.
 * @param {Object} map
 * @param {Object} position
 * @return {Object}
 */
const createMarker = ({ map, position }) => {
    return new google.maps.Marker({ map, position });
};
  
/**
 * Track the user location.
 * @param {Object} onSuccess
 * @param {Object} [onError]
 * @return {number}
 */
const trackLocation = ({ onSuccess, onError = () => { } }) => {
    if ('geolocation' in navigator === false) {
        return onError(new Error('Geolocation is not supported by your browser.'));
    }

    return navigator.geolocation.watchPosition(onSuccess, onError, {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    });
};
  
/**
 * Get position error message from the given error code.
 * @param {number} code
 * @return {String}
 */
const getPositionErrorMessage = code => {
    switch (code) {
      case 1:
        return 'Permission denied.';
      case 2:
        return 'Position unavailable.';
      case 3:
        return 'Timeout reached.';
    }
}
  
/**
 * Initialize the application.
 * Automatically called by the google maps API once it's loaded.
 */
function initMap() {
    const initialPosition = { lat: -22.7251316, lng: -45.1214007 };
    const map = createMap(initialPosition);
    const marker = createMarker({ map, position: initialPosition });
    const $info = document.getElementById('info');
  
    let watchId = trackLocation({
      onSuccess: ({ coords: { latitude: lat, longitude: lng } }) => {
        marker.setPosition({ lat, lng });
        map.panTo({ lat, lng });
        $info.textContent = `Lat: ${lat.toFixed(5)} Lng: ${lng.toFixed(5)}`;
        $info.classList.remove('error');
      },
      onError: err => {
        console.log($info);
        $info.textContent = `Error: ${err.message || getPositionErrorMessage(err.code)}`;
        $info.classList.add('error');
      }
    });
}

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

    document.getElementById('button1').addEventListener('click', function() {
        document.getElementById('crudForm').style.display = 'block'; // Mostra o formulário
    });

    document.getElementById('cancelButton').addEventListener('click', function() {
        document.getElementById('crudForm').style.display = 'none'; // Esconde o formulário
    });

    initMap();
});