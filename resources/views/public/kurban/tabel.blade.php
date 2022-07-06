@extends('layouts.app')
<style>
    * {
        font-family: 'Oswald', sans-serif;
        color: #1e272e !important
    }

    .header {
        background-color: #28A745 !important;
        margin: 40px 0px;
        padding: 40px 10px;
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
                    <h4 class="text-light">Tabel Hewan Kurban</h4>
                    <h5 class="text-light">Kota Bandung</h5>
                </div>
                <p class="text-right" id="update">Update Terakhir : </p>

                <div style="overflow-x:auto;">
                    <table class="table" id="tabelKurban">
                        <thead>
                            <tr>
                                <th rowspan="3">Id</th>
                                <th rowspan="3">Kelurahan</th>
                                <th colspan="8" class="text-center">Jenis Hewan</th>
                                <th colspan="2" rowspan="2" class="text-center">Total</th>
                                <th rowspan="3">Grand Total</th>

                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">Domba</th>
                                <th colspan="2" class="text-center">Kambing</th>
                                <th colspan="2" class="text-center">Kerbau</th>
                                <th colspan="2" class="text-center">Sapi</th>

                            </tr>
                            <tr>
                                <th>Layak</th>
                                <th>Tidak Layak</th>
                                <th>Layak</th>
                                <th>Tidak Layak</th>
                                <th>Layak</th>
                                <th>Tidak Layak</th>
                                <th>Layak</th>
                                <th>Tidak Layak</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
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
                url: '../kurban/all',
                dataType: 'json',
                async: false,
                success: function(res) {
                    // console.log(res);
                    res.forEach((el, index) => {
                        console.log("ke", el);
                        el.kelurahan.forEach(kel => {
                            
                        });

                        
                    });
                    // $('#tabelKurban').append(
                    //     `${res}`
                    // );
                }
            })
        }

        $(document).ready(function() {
            getKec();
            $.ajax({
                type: "GET",
                url: '../kurban',
                dataType: 'json',
                async: false,
                success: function(res) {
                    $('#update').append(moment(res.tanggal).lang("id").format('LLLL'))
                }
            })
        });
    </script>
@endsection
