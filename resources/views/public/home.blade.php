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

    #keterangan-jumlah {
        position: absolute !important;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 9999;
        background-color: white;
        height: 40px;
        display: flex;
        justify-content: 'between';
        align-items: center;

    }

    #keterangan-jumlah>.max,
    #keterangan-jumlah>.middle,
    #keterangan-jumlah>.low {
        display: flex;
        justify-content: 'between';
        align-items: center;
        margin: 0px 10px;
    }

    #keterangan-jumlah>.max>div:nth-child(1) {
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background-color: red;
        z-index: 99999;
    }

    #keterangan-jumlah>.middle>div:nth-child(1) {
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background-color: orange;
        z-index: 99999;
    }

    #keterangan-jumlah>.low>div:nth-child(1) {
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background-color: green;
        z-index: 99999;
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
</style>

@section('content')
    <div class="container-fluid">
    <button href="#top" id="top" onclick="topFunction()"><span class="lnr lnr-chevron-up text-light"></span></button>

        <div class="row no-gutters">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h4 class="text-light">Data Kasus PMK</h4>
                    <h5 class="text-light">Kota Bandung</h5>
                </div>
                <h5>Jumlah Kasus</h5>
                <div class="row">
                    <!--  -->
                    <div class="col-md-3">
                        <div class="card bg-danger">
                            <div class="card-body">
                                <p class="card-text">Tertular / Terduga</p>
                                <h5 class="card-title" id="grand_total">0</h5>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body bg-success">
                                <p class="card-text">Sembuh</p>
                                <h5 class="card-title" id="sembuh">0</h5>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body bg-warning">
                                <p class="card-text">Mati</p>
                                <h5 class="card-title" id="mati">0</h5>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body bg-primary">
                                <p class="card-text">Potong Bersyarat</p>
                                <h5 class="card-title" id="potong_bersyarat">0</h5>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <p class="text-right">Update Terakhir : 20 Juni 2022</p>

            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <h5 class="mt-4 mb-2">Sebaran Kasus PMK di Kota Bandung</h5>
                <div id="map">
                    <div id="table-kecamatan"></div>
                    <!-- <div id="keterangan-jumlah">
                      <div class="max">
                        <div></div>
                        <div>>1.000 Kasus</div>
                      </div>
                      <div class="middle">
                        <div></div>
                        <div>>500 Kasus</div>
                      </div>
                      <div class="low">
                        <div></div>
                        <div>>100 Kasus</div>
                      </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-2">
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
            
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
            window.scroll({
            top: 0, 
            left: 0, 
            behavior: 'smooth'
            });
            setMap()
            setJumlah()
        })
        function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

        function setJumlah(id) {
            $.ajax({
                type: "GET",
                url: `../data-ternak`,
                dataType: 'json',
                async: false,
                success: function(res) {
                    // res.forEach(element => {
                    //   console.log(element.data_ternak[0].total_kasus)
                    // });
                    //     return String(res.data_pmk[0].total_kasus)
                    $(`#data-${id}`).html(`Total Kasus : ${res.data_pmk[0].total_kasus}`);
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
                        fillColor: 'blue'
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

        function setColor(id) {
            $.ajax({
                type: "GET",
                url: `../data-ternak/${id}`,
                dataType: 'json',
                async: false,
                success: function(res) {
                    if (res.data_pmk[0].total_kasus == '15') {
                        console.log(res.data_pmk[0].total_kasus)
                        return '#ffff'
                    } else {
                        console.log(res.data_pmk[0].total_kasus)
                        return '#0000'
                    }
                }
            })

        }

        function setData(id) {
            $.ajax({
                type: "GET",
                url: `../data-ternak/${id}`,
                dataType: 'json',
                async: false,
                success: function(res) {
                    let data = `
                  <p style="font-size:14px" class="text-center">Data PMK Kecamatan ${res.nama_kecamatan.nama}</p>
                  <table class="table table-striped" style="height:10px;font-size:14px">
                              <thead>
                                <tr style="">
                                  <th scope="col">#</th>
                                  <th scope="col">Kelurahan</th>
                                  <th scope="col">Total Kasus</th>
                                </tr>
                              </thead>
                              <tbody>`;
                    res.data_pmk_perkelurahan.forEach((res, index) => {
                        data += `
                                      <tr>
                                        <th scope="row">${index+1}</th>
                                        <td>${res.nama_kelurahan}</td>
                                        <td>${res.ternak[0].total_kasus}</td>
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
                url: '../data-ternak',
                dataType: 'json',
                async: false,
                success: function(res) {
                    let gt = 0;
                    let sembuh = 0;
                    let potong_bersyarat = 0;
                    let mati = 0;

                    res.forEach((el, index) => {

                        let sum_terduga = (el.data_ternak.terduga_kambing + el.data_ternak
                            .terduga_kerbau + el.data_ternak.terduga_sapi_perah + el
                            .data_ternak.terduga_sapi_potong);
                        let sum_tertular = (el.data_ternak.tertular_kambing + el.data_ternak
                            .tertular_kerbau + el.data_ternak.tertular_sapi_perah + el
                            .data_ternak.tertular_sapi_potong);
                        gt = gt + (sum_terduga + sum_tertular);
                        sembuh = sembuh + el.data_ternak.sembuh;
                        potong_bersyarat = potong_bersyarat + el.data_ternak.potong_bersyarat;
                        mati = mati + el.data_ternak.mati;

                    })
                    $('#grand_total').text(`${gt}`)
                    $('#sembuh').text(`${sembuh}`)
                    $('#potong_bersyarat').text(`${potong_bersyarat}`)
                    $('#mati').text(`${mati}`)
                    


                }
            })
        })
    </script>
@stop
