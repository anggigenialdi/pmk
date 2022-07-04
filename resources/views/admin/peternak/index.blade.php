@extends('layouts/admin/admin')
<style>
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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Peternak</a></li>
                </ol>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('peternak.create') }}" class="btn btn-primary">
                                <span class="align-middle"><i class="ti-plus"></i></span> Data
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th rowspan="3">Id</th>
                                            <th class="text-center" rowspan="3">Nama Peternak</th>
                                            <th colspan="4" class="text-center">Jenis Hewan</th>
                                            <th rowspan="3">Action</th>

                                        </tr>
                                        <tr>
                                            <th class="text-center">Domba/Kambing</th>
                                            <th class="text-center">Kerbau</th>
                                            <th class="text-center">Sapi Perah</th>
                                            <th class="text-center">Sapi Potong</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center" id="jumlah_kambing">Jumlah</th>
                                            <th class="text-center" id="jumlah_kerbau">Jumlah</th>
                                            <th class="text-center" id="jumlah_sapi_perah">Jumlah</th>
                                            <th class="text-center" id="jumlah_sapi_potong">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    {{ $data->nama }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->jumlah_kambing }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->jumlah_kerbau }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->jumlah_sapi_perah }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->jumlah_sapi_potong }}
                                                </td>
                                                <td class="text-center">
                                                    <div class="dropdown ms-auto text-end">
                                                        <div class="btn-link" data-bs-toggle="dropdown">
                                                            <svg width="24px" height="24px" viewbox="0 0 24 24"
                                                                version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                        height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12"
                                                                        r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12"
                                                                        r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12"
                                                                        r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item"
                                                                href="{{ route('pmk.create', $data->id) }}">Tambah Data
                                                                Pemeriksaan</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('peternak.detail', $data->id) }}">Detail
                                                                Data Peternak</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('peternak.edit', $data->id) }}">Edit Data
                                                                Peternak</a>
                                                        </div>
                                                    </div>
                                                </td>
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
