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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Master Data</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Kurban</a></li>
                </ol>
            </div>
            <div class="row">

                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('master-kurban.create') }}" class="btn btn-primary">
                                <span class="align-middle"><i class="ti-plus"></i></span> Data
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th rowspan="3">Id</th>
                                            <th rowspan="3">Kelurahan</th>
                                            <th colspan="8" class="text-center">Jenis Hewan</th>
                                            <th rowspan="3">Action</th>

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
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    {{ $data->masterKelurahan->nama }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->domba_layak }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->domba_tidak_layak }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->kambing_layak }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->kambing_tidak_layak }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->kerbau_layak }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->kerbau_tidak_layak }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->sapi_layak }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $data->sapi_tidak_layak }}
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
                                                                href="{{ route('master-kurban.detail', $data->id) }}">Detail</a>
                                                            <a class="dropdown-item"
                                                                href="{{ route('master-kurban.edit', $data->id) }}">Edit</a>
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
