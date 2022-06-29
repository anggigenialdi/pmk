@extends('layouts/admin/admin')
<style>
    th {
        border-top: 1px solid #111;
        border-bottom: 1px solid #111;
        border-right: 1px solid #111;
        border-left: 1px solid #111;
    }

    th:nth-child(-n+10) {
        border-top: 1px solid #111;
        border-bottom: 1px solid #111;
        border-left: 1px solid #111;
        border-right: 1px solid #111;
    }
    table.dataTable thead th {
    border-top: 1px solid #111;
}
</style>
@section('header')
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Master
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">
                    </ul>
                </div>
            </nav>
        </div>
    </div>
@endsection
@section('main-content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Master Data</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Data Pmk</a></li>
                </ol>
            </div>
            <div class="row">

                <div class="col-12">
                    
                    <div class="card">
                        <div class="card-header">
                            {{-- <a href="{{ route('pmk.create') }}" class="btn btn-primary">
                                <span class="align-middle"><i class="ti-plus"></i></span> Data
                            </a> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display hover" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th rowspan="3">Id</th>
                                            <th rowspan="3">Nama Peternak</th>
                                            <th rowspan="3">Tanggal</th>
                                            <th colspan="8" class="text-center">Jenis Hewan</th>

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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    {{ $data->dataPeternak->nama }}</td>
                                                <td>
                                                    {{ $data->tanggal_pemeriksaan }}</td>
                                                <td class="text-center">
                                                    {{ $data->terduga_kambing }}</td>
                                                <td class="text-center">
                                                    {{ $data->tertular_kambing }}</td>
                                                <td class="text-center">
                                                    {{ $data->terduga_kerbau }}</td>
                                                <td class="text-center">
                                                    {{ $data->tertular_kerbau }}</td>
                                                <td class="text-center">
                                                    {{ $data->terduga_sapi_perah }}</td>
                                                <td class="text-center">
                                                    {{ $data->tertular_sapi_perah }}</td>
                                                <td class="text-center">
                                                    {{ $data->terduga_sapi_potong }}</td>
                                                <td class="text-center">
                                                    {{ $data->tertular_sapi_potong }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection

