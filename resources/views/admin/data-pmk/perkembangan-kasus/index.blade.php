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
                            Perkembangan Kasus
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Perkembangan Kasus</a></li>
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
                                            <th rowspan="2">Id</th>
                                            <th rowspan="2">Nama Peternak</th>
                                            <th rowspan="2">Tanggal Pemeriksaan</th>
                                            <th rowspan="2">Tanggal Pengujian Lab</th>
                                            <th rowspan="2">Hasil Pengujian</th>
                                            <th colspan="3" class="text-center">Perkembangan Kasus</th>
                                            <th rowspan="2">Action</th>
                                        </tr>
                                        <tr>
                                            <th>Mati</th>
                                            <th>Potong Bersyarat</th>
                                            <th>Sembuh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data)
                                            @if ($data->status_kasus !== null && $data->status_kasus != 1)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        {{ $data->dataPeternak->nama }}</td>
                                                    <td>
                                                        {{ $data->tanggal_pemeriksaan }}</td>
                                                    <td>
                                                        {{ $data->tanggal_pengujian_lab }}</td>
                                                    <td>
                                                        {{ $data->hasil_pengujian_lab }}</td>
                                                    <td>
                                                        {{ $data->mati }}</td>
                                                    <td>
                                                        {{ $data->potong_bersyarat }}</td>
                                                    <td>
                                                        {{ $data->sembuh }}</td>
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
                                                                {{-- <a class="dropdown-item"
                                                                    href="{{ route('hasil-lab.detail', $data->id) }}">Detail</a> --}}
                                                                <button type="button" class="dropdown-item"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editModal{{ $data->id }}"
                                                                    title="Edit">
                                                                    Edit
                                                                </button>
                                                                <button type="button" class="dropdown-item"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteModal{{ $data->id }}"
                                                                    title="Delete">
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
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
    @include('admin/data-pmk/perkembangan-kasus/modal-edit')
    @include('admin/data-pmk/perkembangan-kasus/modal-delete')
@endsection
