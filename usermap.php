<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <meta charset="utf-8" />
<title>Current Location</title>
<script src="https://unpkg.com/maplibre-gl@2.4.0/dist/maplibre-gl.js"></script>
<link href="https://unpkg.com/maplibre-gl@2.4.0/dist/maplibre-gl.css" rel="stylesheet" />
<link href="https://unpkg.com/maplibre-gl@2.4.0/dist/maplibre-gl.css" rel="stylesheet" />
<script src="https://unpkg.com/maplibre-gl@2.4.0/dist/maplibre-gl.js"></script>
<script src='https://unpkg.com/@turf/turf@6/turf.min.js'></script>
        <style>
            body { margin: 0; padding: 0; }
	#map { width: 100%; height: 80vh;}
            </style>
    </head>
<body>
<div id="map"></div>
<script>
    $(document).ready(function()
    {
        fetchlocation();
        //setInterval(function(){ fetchlocation(); }, 1000);
function fetchlocation()
        {
            $cmd = "Hello";
            $.ajax({
            type: 'POST',
            url: 'chatajax.php',
            data: 'cmd=' + $cmd,
            success: function(data) {
                    $('#data').html(data);
                    },
                    error: function() {
                        console.log(response.status);
                    },
                })
        }

    })

</script>
<div id="data">
<script>
        const key = 'bd093c3a0c704ab2bef05be9d08ea9ec';
        const map = new maplibregl.Map({
    container: 'map',
    style: 'https://maps.geoapify.com/v1/styles/osm-carto/style.json?apiKey='+key, // stylesheet location
    center: [74.5, 19], // starting position [lng, lat]
    zoom: 8,
    pitch: 30 // starting zoom
});
        </script>
</div>
</body>
</html>