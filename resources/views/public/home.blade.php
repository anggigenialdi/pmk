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
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
    <div id="table-kecamatan"></div>
    </div>
    <div class="col-md-6">
      <h5>Sebaran Kasus PMK di Kota Bandung</h5>
      <div id="map"></div>
    </div>
    <div class="col-md-3">
    </div>
  </div>
</div>

@endsection
@section('script')
<script>
        $(document).ready(function() {
            var map = L.map('map').setView([-6.914744, 107.639810], 12);
            var tiles = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
             }).addTo(map);
             $.getJSON('data-ternak', function(data) {
                $.each(data, function(i) {
                    L.marker([data[i].latitude, data[i].longitude]).addTo(map).on('click', (e) => {
                      setData(data[i].id)
                        L.marker([data[i].latitude, data[i].longitude]).addTo(map)
                            .bindPopup(                 
                              '<div>'+data[i].nama_kecamatan+'</div><div id="form-add"> Total Kasus : '+data[i].total_kasus+'</div>'
                              ).openPopup();
                              
                    });
                });
            });
        })
        function setData(id) {
          $.ajax({
                type: "GET",
                url: `../data-ternak/${id}`,
                dataType: 'json',
                async: false,
                success: function (res) { 
                  let data = `
                  <h5>Data PMK Kecamatan ${res.nama_kecamatan.nama}</h5>
                  <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Kelurahan</th>
                                  <th scope="col">Total Kasus</th>
                                </tr>
                              </thead>
                              <tbody>`;
                              res.data_ternak.forEach((res,index) => {
                                  data += `
                                      <tr>
                                        <th scope="row">${index+1}</th>
                                        <td>${res.nama_kelurahan}</td>
                                        <td>${res.ternak.total_kasus}</td>
                                      </tr>
                                    `;
                            })
                      data += `</tbody>
                            </table>`
                   $('#table-kecamatan').html(data);
                }
            })
        }
    </script>
@stop
