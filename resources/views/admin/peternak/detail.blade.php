@extends('layouts/admin/admin')
@section('header')
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Detail Data Peternak
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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Peternak</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Detail Data</a></li>
                </ol>
            </div>
            @foreach ($datas as $data)
                    {{-- row --}}
                    <fieldset disabled="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Data Peternak</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-validation">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-3 col-form-label" for="nik">NIK
                                                        </label>
                                                        <div class="col-lg-8">
                                                            <input type="number" class="form-control form-control-sm"
                                                                id="nik" placeholder="Input NIK.." name="nik"
                                                                value="{{ $data->nik }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-3 col-form-label" for="nama">Nama
                                                        </label>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="nama" placeholder="Input Nama.." required=""
                                                                name="nama" value="{{ $data->nama }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-lg-3 col-form-label" for="kecamatan">Kecamatan
                                                        </label>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="kecamatan" placeholder="Input Kecamatan.."
                                                                required="" name="kecamatan"
                                                                value="{{ $data->masterKecamatan->nama }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-3 col-form-label" for="kelurahan">Kelurahan
                                                        </label>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="kelurahan" placeholder="Input Kelurahan.."
                                                                required="" name="kelurahan"
                                                                value="{{ $data->masterKelurahan->nama }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <div class="col-lg-3">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="col-lg-3 col-form-label" for="rw">RW
                                                            </label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="rw" placeholder="Input RW.." required=""
                                                                name="rw" value="{{ $data->rw }}" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="col-lg-3 col-form-label" for="rt">RT
                                                            </label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="rt" placeholder="Input RT.." required=""
                                                                name="rt" value="{{ $data->rt }}" readonly>
                                                        </div>

                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-3 col-form-label" for="alamat">Alamat
                                                        </label>
                                                        <div class="col-lg-8">
                                                            <textarea class="form-control form-control-sm" id="alamat" rows="5" placeholder="" required=""
                                                                name="alamat" value="{{ old('alamat') }}">{{ $data->alamat }}</textarea>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Populasi Ternak</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-validation">
                                            <div class="row">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="jumlah_kambing">Domba/Kambing
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jumlah_kambing"
                                                            placeholder="Input Jumlah Domba/Kambing.." required=""
                                                            name="jumlah_kambing"
                                                            value="{{ old('jumlah_kambing', $data->jumlah_kambing) }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="jumlah_kerbau">Kerbau
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jumlah_kerbau" placeholder="Input Jumlah Kerbau.."
                                                            required="" name="jumlah_kerbau"
                                                            value="{{ old('jumlah_kerbau', $data->jumlah_kerbau) }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="jumlah_sapi_perah">Sapi Perah
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jumlah_sapi_perah"
                                                            placeholder="Input Jumlah Sapi Perah.." required=""
                                                            name="jumlah_sapi_perah"
                                                            value="{{ old('jumlah_sapi_perah', $data->jumlah_sapi_perah) }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="jumlah_sapi_potong">Sapi Potong
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jumlah_sapi_potong"
                                                            placeholder="Input Jumlah Sapi Potong.." required=""
                                                            name="jumlah_sapi_potong"
                                                            value="{{ old('jumlah_sapi_potong', $data->jumlah_sapi_potong) }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
            @endforeach
        </div>
    </div>
@endsection