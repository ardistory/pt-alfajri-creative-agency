let map;

async function initMap() {
    const { Map } = await google.maps.importLibrary("maps");

    map = new Map(document.getElementById("map"), {
        center: { lat: -6.2361587524603905, lng: 106.70533871349217 },
        zoom: 20,
    });
}

initMap();
