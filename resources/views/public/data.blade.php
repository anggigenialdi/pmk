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
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-md-8 offset-md-2">
                <div class="header">
                    <h4 class="text-light">Tabel Sebaran PMK</h4>
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
                                <td class="text-center">${el.nama_kecamatan}</td>
                                <td class="text-center">${el.data_ternak.terduga_kambing > 0 ? el.data_ternak.terduga_kambing : '-'}</td>
                                <td class="text-center">${el.data_ternak.tertular_kambing  > 0 ? el.data_ternak.tertular_kambing : '-'}</td>
                                <td class="text-center">${el.data_ternak.terduga_kerbau  > 0 ? el.data_ternak.terduga_kerbau : '-'}</td>
                                <td class="text-center">${el.data_ternak.tertular_kerbau  > 0 ? el.data_ternak.tertular_kerbau : '-'}</td>
                                <td class="text-center">${el.data_ternak.terduga_sapi_perah  > 0 ? el.data_ternak.terduga_sapi_perah : '-'}</td>
                                <td class="text-center">${el.data_ternak.tertular_sapi_perah  > 0 ? el.data_ternak.tertular_sapi_perah : '-'}</td>
                                <td class="text-center">${el.data_ternak.terduga_sapi_potong  > 0 ? el.data_ternak.terduga_sapi_potong : '-'}</td>
                                <td class="text-center">${el.data_ternak.tertular_sapi_potong  > 0 ? el.data_ternak.tertular_sapi_potong : '-'}</td>
                                <td class="text-center">${sum_terduga  > 0 ? sum_terduga : '-' }</td>
                                <td class="text-center">${sum_tertular   > 0 ? sum_tertular : '-'}</td>
                                <td class="text-center">${gt > 0 ? gt : '-' }</td>
                                <td class="text-center">${el.data_ternak.mati > 0 ?  el.data_ternak.mati : '-'}</td>
                                <td class="text-center">${el.data_ternak.potong_bersyarat > 0 ? el.data_ternak.potong_bersyarat : '-' }</td>
                                <td class="text-center">${el.data_ternak.sembuh > 0 ? el.data_ternak.sembuh : '-'}</td>
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
