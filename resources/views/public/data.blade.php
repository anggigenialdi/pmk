@extends('layouts.app')
<style>
    * {
        font-family: 'Oswald', sans-serif;
        color: #1e272e !important
    }

    .header {
        background-color: #28A745 !important;
        margin:40px 0px;
        padding:40px 10px;
        border-radius: 10px;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        font-size: 12px;
    }

    th {
        border-top: 1px solid #111;
        border-bottom: 1px solid #111;
        border-right: 1px solid #111;
        border-left: 1px solid #111;
    }

    td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }
</style>
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-success ">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="row no-gutters">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h4 class="text-light">Sebaran PMK</h4>
                    <h5 class="text-light">Kota Bandung</h5>
                </div>
                <div class="row">
                    <div style="overflow-x:auto;">
                        <table class="table" id="tablePmk">
                            <thead>
                                <tr>
                                    <th rowspan="3">Id</th>
                                    <th rowspan="3">Kecamatan</th>
                                    <th colspan="8" class="text-center">Jenis Hewan</th>
                                    <th colspan="2" rowspan="2" class="text-center">Total</th>
                                    <th rowspan="3">Grand Total</th>
                                    <th colspan="3" rowspan="2">Hasil Pengujian Labolatorium</th>

                                </tr>
                                <tr>
                                    <th colspan="2" class="text-center">Domba/Kambing</th>
                                    <th colspan="2" class="text-center">Kerbau</th>
                                    <th colspan="2" class="text-center">Sapi Perah</th>
                                    <th colspan="2" class="text-center">Sapi Potong</th>

                                </tr>
                                <tr>
                                    <th id="terduga_kambing">Terduga</th>
                                    <th id="tertular_kambing">Tertular</th>
                                    <th id="terduga_kerbau">Terduga</th>
                                    <th id="tertular_kerbau">Tertular</th>
                                    <th id="terduga_sapi_perah">Terduga</th>
                                    <th id="tertular_sapi_perah">Tertular</th>
                                    <th id="terduga_sapi_potong">Terduga</th>
                                    <th id="tertular_sapi_potong">Tertular</th>
                                    <th id="total_terduga">Terduga</th>
                                    <th id="total_tertular">Tertular</th>
                                    <th id="mati">Mati</th>
                                    <th id="potong_beryarat">Potong Bersyarat</th>
                                    <th id="sembuh">Sembuh</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function getKec() {
            $.ajax({
                type: "GET",
                url: '../data-ternak',
                dataType: 'json',
                async: false,
                success: function(res) {
                    // console.log(res);
                    res.forEach((el, index) => {
                        console.log("has",el);
                        
                        let sum_terduga = ( el.data_ternak.terduga_kambing +  el.data_ternak.terduga_kerbau +  el.data_ternak.terduga_sapi_perah +  el.data_ternak.terduga_sapi_potong );
                        let sum_tertular = ( el.data_ternak.tertular_kambing +  el.data_ternak.tertular_kerbau +  el.data_ternak.tertular_sapi_perah +  el.data_ternak.tertular_sapi_potong );
                        let gt = ( sum_terduga + sum_tertular );

                        res += `<tr>   
                                <td>${index+1}</td>
                                <td>${el.nama_kecamatan}</td>
                                <td>${el.data_ternak.terduga_kambing}</td>
                                <td>${el.data_ternak.tertular_kambing}</td>
                                <td>${el.data_ternak.terduga_kerbau}</td>
                                <td>${el.data_ternak.tertular_kerbau}</td>
                                <td>${el.data_ternak.terduga_sapi_perah}</td>
                                <td>${el.data_ternak.tertular_sapi_perah}</td>
                                <td>${el.data_ternak.terduga_sapi_potong}</td>
                                <td>${el.data_ternak.tertular_sapi_potong}</td>
                                <td>${sum_terduga}</td>
                                <td>${sum_tertular}</td>
                                <td>${gt}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>`
                    });
                    $('#tablePmk').append(
                        `${res}`
                    );
                }
            })
        }

        $(document).ready(function() {
            getKec();
        });
    </script>
@endsection
