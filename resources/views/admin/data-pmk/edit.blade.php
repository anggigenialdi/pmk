@extends('layouts/admin/admin')
@section('header')
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Edit Data
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
                    <li class="breadcrumb-item"><a href="{{ route('data-pmk.index') }}">Data Pmk</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data</a></li>
                </ol>
            </div>
            @foreach ($datas as $data)
                <form class="needs-validation" method="POST" action="{{ route('pmk.update', $data->id) }}"
                    autocomplete="off" novalidate="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                                                value="{{ $data->dataPeternak->nik }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-3 col-form-label" for="nama">Nama
                                                        </label>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="nama" placeholder="Input Nama.." required=""
                                                                name="nama" value="{{ $data->dataPeternak->nama }}" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-lg-3 col-form-label" for="kecamatan">Kecamatan
                                                        </label>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="kecamatan" placeholder="Input Kecamatan.."
                                                                required="" name="kecamatan"
                                                                value="{{ $data->dataPeternak->masterKecamatan->nama }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-3 col-form-label" for="kelurahan">Kelurahan
                                                        </label>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="kelurahan" placeholder="Input Kelurahan.."
                                                                required="" name="kelurahan"
                                                                value="{{ $data->dataPeternak->masterKelurahan->nama }}" readonly>
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
                                                                name="rw" value="{{ $data->dataPeternak->rw }}" readonly>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="col-lg-3 col-form-label" for="rt">RT
                                                            </label>
                                                            <input type="text" class="form-control form-control-sm"
                                                                id="rt" placeholder="Input RT.." required=""
                                                                name="rt" value="{{ $data->dataPeternak->rt }}" readonly>
                                                        </div>

                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-3 col-form-label" for="alamat">Alamat
                                                        </label>
                                                        <div class="col-lg-8">
                                                            <textarea class="form-control form-control-sm" id="alamat" rows="5" placeholder="" required=""
                                                                name="alamat" value="{{ old('alamat') }}">{{ $data->dataPeternak->alamat }}</textarea>

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
                                                            value="{{ old('jumlah_kambing', $data->dataPeternak->jumlah_kambing) }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="jumlah_kerbau">Kerbau
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jumlah_kerbau" placeholder="Input Jumlah Kerbau.."
                                                            required="" name="jumlah_kerbau"
                                                            value="{{ old('jumlah_kerbau', $data->dataPeternak->jumlah_kerbau) }}">
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
                                                            value="{{ old('jumlah_sapi_perah', $data->dataPeternak->jumlah_sapi_perah) }}">
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
                                                            value="{{ old('jumlah_sapi_potong', $data->dataPeternak->jumlah_sapi_potong) }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Data Pemeriksaan</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-validation">
                                            <div class="row">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="tanggal_pemeriksaan">Tanggal Pemeriksaan
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="datetime-local" class="form-control form-control-sm"
                                                            id="date" placeholder="Input Tanggal.." required=""
                                                            name="tanggal_pemeriksaan" value="{{ old('tanggal_pemeriksaan', $data->tanggal_pemeriksaan) }}" >
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="domba">Domba/Kambing
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label" for="terduga_kambing">Terduga
                                                        </label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            id="terduga_kambing" placeholder="" name="terduga_kambing"
                                                            value="{{ old('terduga_kambing', $data->terduga_kambing) }}" required="">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label" for="tertular_kambing">Tertular
                                                        </label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            id="tertular_kambing" placeholder="" name="tertular_kambing"
                                                            value="{{ old('tertular_kambing', $data->tertular_kambing) }}" required="">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="domba">Kerbau
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label" for="terduga_kerbau">Terduga
                                                        </label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            id="terduga_kerbau" placeholder="" name="terduga_kerbau"
                                                            value="{{ old('terduga_kerbau', $data->terduga_kerbau) }}" required="">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label" for="tertular_kerbau">Tertular
                                                        </label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            id="tertular_kerbau" placeholder="" name="tertular_kerbau"
                                                            value="{{ old('tertular_kerbau', $data->tertular_kerbau) }}" required="">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="terduga_sapi_perah">Sapi
                                                        Perah
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label" for="terduga_sapi_perah">Terduga
                                                        </label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            id="terduga_sapi_perah" placeholder=""
                                                            name="terduga_sapi_perah"
                                                            value="{{ old('terduga_sapi_perah', $data->terduga_sapi_perah) }}" required="">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label" for="tertular_sapi_perah">Tertular
                                                        </label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            id="tertular_sapi_perah" placeholder=""
                                                            name="tertular_sapi_perah"
                                                            value="{{ old('tertular_sapi_perah', $data->tertular_sapi_perah) }}" required="">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="terduga_sapi_potong">Sapi
                                                        Potong
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label" for="terduga_sapi_potong">Terduga
                                                        </label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            id="terduga_sapi_potong" placeholder=""
                                                            name="terduga_sapi_potong"
                                                            value="{{ old('terduga_sapi_potong', $data->terduga_sapi_potong) }}" required="">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label" for="tertular_sapi_potong">Tertular
                                                        </label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            id="tertular_sapi_potong" placeholder=""
                                                            name="tertular_sapi_potong"
                                                            value="{{ old('tertular_sapi_potong', $data->tertular_sapi_potong) }}" required="">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-lg-8 pull-right">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection