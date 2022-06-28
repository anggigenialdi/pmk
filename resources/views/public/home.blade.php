@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Link</a>
      </li>
    </ul>
  </div>
</nav>
<div id="map"></div>

@endsection
@section('script')
<script>
        $(document).ready(function() {
            var map = L.map('map').setView([-6.914744, 107.609810], 13);
            var tiles = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
             }).addTo(map);
             $.getJSON('kecamatan', function(data) {
                $.each(data, function(i) {
                    L.marker([data[i].latitude, data[i].longitude]).addTo(map).on('click', (e) => {
                        L.marker([data[i].latitude, data[i].longitude]).addTo(map)
                            .bindPopup(
                                '<div><p>'+data[i].nama+'</p></div>'
                                ).openPopup();
                    });
                });
            });
        })
    </script>
@stop
