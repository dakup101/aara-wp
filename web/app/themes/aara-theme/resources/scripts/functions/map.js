import {Loader, LoaderOptions} from 'google-maps';

export default async () => {
    const mapWrapper = document.querySelector("#contactMap");
    if (!mapWrapper) return;

    const apiKey = GOOGLE_MAPS_API;

    const loader = new Loader(apiKey);
     
    const google = await loader.load();
    const map = new google.maps.Map(mapWrapper, {
        center: {lat: 50.02702651523084, lng: 19.942446396604662},
        zoom: 15,
        styles: [
            {
              elementType: 'geometry',
              stylers: [{ saturation: -100 }, { lightness: 0 }],
            },
            {
              featureType: 'road',
              elementType: 'labels',
              stylers: [{ visibility: 'on' }],
            },
            {
              featureType: 'landscape',
              elementType: 'labels',
              stylers: [{ visibility: 'off' }],
            },
            {
              featureType: 'poi',
              elementType: 'labels',
              stylers: [{ visibility: 'off' }],
            },
            {
              featureType: 'transit',
              elementType: 'labels',
              stylers: [{ visibility: 'off' }],
            },
          ],
    });

    const marker = new google.maps.Marker({
        position: {lat: 50.02702651523084, lng: 19.942446396604662},
        map: map,
        title: 'Marker Title',
      });
}

