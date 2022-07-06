@extends('layouts.app')
<style>
    * {
        font-family: 'Oswald', sans-serif;
        color: #1e272e !important
    }

    #map {
        height: 800px;
        position: relative !important;
    }

    .header {
        background-color: #28A745 !important;
        margin: 40px 0px;
        padding: 40px 10px;
        border-radius: 10px;
    }

    .bg-success {
        background-color: #52CBC1 !important;
    }

    .leaflet-tooltip.my-labels {
        /* background-color: transparent;
    border: transparent;
    box-shadow: none;
    position:absolute;
    font-size:18px; */
        color: red !important;
    }

    .my-fill {
        opacity: 1 !important;
    }

    #table-kecamatan {
        position: absolute !important;
        right: 5;
        top: 5;
        z-index: 9999;
        background-color: white;
    }
    html {
    scroll-behavior: smooth;
    }

    #top{
        position:fixed!important;
        bottom:10px !important;
        right:10px !important;
        background-color:#4BAF48;
        padding:10px;
        z-index: 99999;
    }
    .bg-secondary2{
        background-color : #f1f2f6;
    }
</style>

@section('content')
<div class="container-fluid bg-secondary2">
    <button href="#top" id="top" onclick="topFunction()"><span class="lnr lnr-chevron-up text-light"></span></button>

        <div class="row no-gutters">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h4 class="text-light">Data Hewan Layak Kurban</h4>
                    <h5 class="text-light" id="year">Kota Bandung </h5>
                </div>
                <h5>Jumlah Hewan Layak Kurban</h5>
                <div class="row">
                    <!--  -->
                    <div class="col-md-3 mb-2">
                        <div class="card bg-outline-danger">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="card-text">Kambing</p>
                                        <h5 class="card-title" id="kambing_layak">0</h5>
                                    </div>
                                     <img src="../images/goat.png" width="70px" height="auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="col-md-3 mb-2">
                        <div class="card">
                            <div class="card-body bg-outline-success">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="card-text">Domba</p>
                                        <h5 class="card-title" id="domba_layak">0</h5>
                                    </div>
                                     <img src="../images/goat.png" width="70px" height="auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="col-md-3 mb-2">
                        <div class="card">
                            <div class="card-body bg-outline-warning">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="card-text">Sapi</p>
                                        <h5 class="card-title" id="sapi_layak">0</h5>
                                    </div>
                                     <img src="../images/cow.png" width="70px" height="auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="col-md-3 mb-2">
                        <div class="card">
                            <div class="card-body bd-callout bd-callout-info">
                            <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="card-text">Kerbau</p>
                                        <h5 class="card-title" id="kerbau_layak">0</h5>
                                    </div>
                                     <img src="../images/buffalo.png" width="70px" height="auto" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <p class="text-right" id="update">Update Terakhir : </p>


            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-8 offset-md-2 mb-4">
                <h5 class="mt-4 mb-2">Peta Sebaran Hewan Layak Kurban di Kota Bandung</h5>
                <div id="map">
                    <div id="table-kecamatan"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            window.onscroll = function() {scrollFunction()};
            mybutton = document.getElementById("top");
            mybutton.style.display = "none";

           
            window.scroll({
            top: 0, 
            left: 0, 
            behavior: 'smooth'
            });
            setMap()
            setJumlah()
        })
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

        function setJumlah(id) {
            $.ajax({
                type: "GET",
                url: `../kurban/all`,
                dataType: 'json',
                async: false,
                success: function(res) {
                    // res.forEach(element => {
                    //   console.log(element.data_ternak[0].total_kasus)
                    // });
                    //     return String(res.data_kurban[0].total_kasus)
                    $(`#data-${id}`).html(`Total Kasus : ${res.data_kurban[0].total_kasus}`);
                }
            })

        }


        function setMap() {
            var map = L.map('map').setView([-6.904744, 107.639810], 13);
            var tiles = L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
                }).addTo(map);
            $.get('../geojson', function(data) {
                let features = data.features
                features.forEach((e, index) => {
                    L.geoJSON(e).setStyle({
                        fillColor: 'green'
                    }).addTo(map).on('mouseover', () => {
                        setData(e.properties.id_kecamatan)
                    }).bindTooltip(
                        '<div>' + e.properties.nama_kecamatan + '</div><div id="data-' + e.properties
                        .id_kecamatan + '"></div>', {
                            permanent: true,
                            direction: "center",
                            className: "my-labels"
                        }).openTooltip();
                    // setJumlah(e.properties.id_kecamatan)
                });

            });
        }

        

        function setData(id) {
            $.ajax({
                type: "GET",
                url: `../kurban/${id}`,
                dataType: 'json',
                async: false,
                success: function(res) {
                    let data = `
                  <p style="font-size:14px" class="text-center">Data Hewan Layak Kurban Kecamatan <b>${res.nama_kecamatan.nama}</b></p>
                  <table class="table table-striped" style="height:10px;font-size:12px">
                              <thead>
                                <tr style="">
                                  <th scope="col">#</th>
                                  <th scope="col">Kelurahan</th>
                                  <th scope="col">Kambing</th>
                                  <th scope="col">Domba</th>
                                  <th scope="col">Sapi</th>
                                  <th scope="col">Kerbau</th>
                                </tr>
                              </thead>
                              <tbody>`;
                    res.data_kurban_perkelurahan.forEach((res, index) => {
                        data += `
                                      <tr>
                                        <th scope="row">${index+1}</th>
                                        <td>${res.nama_kelurahan}</td>
                                        <td>${res.ternak.kambing_layak}</td>
                                        <td>${res.ternak.domba_layak}</td>
                                        <td>${res.ternak.sapi_layak}</td>
                                        <td>${res.ternak.kerbau_layak}</td>
                                      </tr>
                                    `;
                    })
                    data += `</tbody>
                            </table>`
                    $('#table-kecamatan').html(data);
                }
            })
        }
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: '../kurban',
                dataType: 'json',
                async: false,
                success: function(res) {
                    $('#kambing_layak').text(res.kambing_layak)
                    $('#domba_layak').text(res.domba_layak)
                    $('#sapi_layak').text(res.sapi_layak)
                    $('#kerbau_layak').text(res.kerbau_layak)

                    $('#update').append( moment(res.tanggal).lang("id").format('LLLL') )

                }
            })
            document.getElementById("year").append(new Date().getFullYear());
        })
    </script>
@stop
