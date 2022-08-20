@extends('admin.layouts.main')

@section('container')
<div class="card">
    <div class="card-body">
        <div class="container-fluid">
            <div id="map" style="height: 500px; margin: 50px;">
                <script>
                    var curLocation = [0, 0];
                    if (curLocation[0] == 0 && curLocation[1] == 0) {
                        curLocation = [<?= $kordinats[0]->x ?>, <?= $kordinats[0]->y ?>]
                    }
                    var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                        osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        osm = L.tileLayer(osmUrl, {
                            maxZoom: 18,
                            attribution: osmAttrib
                        });
                    var map = L.map('map').setView([<?= $kordinats[0]->x ?>, <?= $kordinats[0]->y ?>], 13).addLayer(osm);

                    var data = [
                        <?php foreach ($kordinats as $key => $value) { ?>
                            {"lokasi":[<?= $value->x ?>, <?= $value->y ?>], "nama":"<?= $value->nama ?>"
                            },
                        <?php } ?>
                    ];

                    //layer contain searched elements
                    var markersLayer = new L.LayerGroup();
                    map.addLayer(markersLayer);

                    //Routing Machine Liedman
                    var control=L.Routing.control({
                        //ambil koordinat berada sekarang
                        waypoints: [
                        //L.latLng(-0.5516380071640015, 117.11798858642578),
                        //L.latLng(curr_latitude, curr_longitude),
                        //L.latLng(-0.5504058599472046, 117.12004852294922)
                        ],
                        routeWhileDragging: true,
                        geocoder: L.Control.Geocoder.nominatim()
                    })
                    .on('routesfound', function(e) {
                        var routes = e.routes;
                        alert('Found ' + routes.length + ' route(s).');
                    })
                    .addTo(map);

                    function dariSini(lat,lng){
                    var latLng= L.latLng(lat, lng);
                    control.spliceWaypoints(0, 1, latLng);
                    }

                    function keSini(lat,lng){
                    var latLng= L.latLng(lat, lng);
                    control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
                    }

                    //Search dengan menandai titik yang dicari
                    map.addControl( new L.Control.Search({
                        layer: markersLayer,
                        initial: false,
                        zoom: 18,
                        collapsed: true
                    }) );

                    ////////////populate map with markers from sample data
                    for(i in data) {
                        var nama = data[i].nama;  //value searched
                        var lokasi = data[i].lokasi;      //position found
                        var marker = new L.circleMarker(new L.latLng(lokasi), {title: nama} );//see property searched
                        marker.bindPopup('Nama: '+ nama );
                        markersLayer.addLayer(marker);
                    }

                </script>
                @foreach ($kordinats as $data)
                    <script>
                        var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);

                        L.circleMarker([ <?= $data->x ?>, <?= $data->y ?>]).addTo(map)
                        .bindPopup('<?= $data->nama ?>'+ '<br>' + '<?= $data->alamat ?>' + '<br>' + '<?= $data->no_hp ?>' +
                            '<br><a href="/admin/peta/<?= strtolower($data->nama) ?>" class="text-decoration-none text-dark">Selengkapnya</a>')
                        .openPopup();
                    </script>
                @endforeach
            </div>
        </div>
    </div>
</div>
    
@endsection
