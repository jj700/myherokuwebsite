<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>pydeck</title>
        <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v1.13.0/mapbox-gl.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <script src='https://cdn.jsdelivr.net/npm/@deck.gl/jupyter-widget@~8.4.*/dist/index.js'></script>
    <style>
    body {
  margin: 0;
  padding: 0;
  overflow: hidden;
}

#deck-map-container {
  width: 100%;
  height: 100%;
  background-color: black;
}

#map {
  pointer-events: none;
  height: 100%;
  width: 100%;
  position: absolute;
  z-index: 1;
}

#deckgl-overlay {
  z-index: 2;
  background: none;
}

#deck-map-wrapper {
  width: 100%;
  height: 100%;
}

#deck-container {
  width: 100vw;
  height: 100vh;
}
    </style>
  </head>
  <body>
    <div id="deck-container">
    </div>
  </body>
  <script>
    const jsonInput = {"initialViewState": {"bearing": 0, "latitude": 49.254, "longitude": -123.13, "maxZoom": 16, "pitch": 45, "zoom": 11}, "layers": [{"@@type": "PolygonLayer", "data": [[[-123.0, 49.196], [-123.0, 49.324], [-123.306, 49.324], [-123.306, 49.196]]], "getFillColor": [0, 0, 0, 20], "getPolygon": "@@=-", "id": "be32faec-d87c-425f-9ae9-eb8710db65e3", "stroked": false}, {"@@type": "GeoJsonLayer", "data": "https://raw.githubusercontent.com/visgl/deck.gl-data/master/examples/geojson/vancouver-blocks.json", "extruded": true, "filled": true, "getElevation": "@@=properties.valuePerSqm / 20", "getFillColor": "@@=[255, 255, properties.growth * 255]", "getLineColor": [255, 255, 255], "id": "d534408e-dcf1-431b-ac2e-f9112ec38bda", "opacity": 0.8, "pickable": true, "stroked": false, "wireframe": true}], "mapProvider": "carto", "mapStyle": "https://basemaps.cartocdn.com/gl/dark-matter-gl-style/style.json", "views": [{"@@type": "MapView", "controller": true}]};
    const tooltip = true;
    const customLibraries = null;

    const deckInstance = createDeck({
                  container: document.getElementById('deck-container'),
      jsonInput,
      tooltip,
      customLibraries
    });

  </script>
</html>