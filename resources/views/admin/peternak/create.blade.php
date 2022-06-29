@extends('layouts/admin/admin')
@section('header')
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Tambah Data
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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah Data</a></li>
                </ol>
            </div>
            <form class="needs-validation" method="POST" action="{{ route('peternak.post')}}" autocomplete="off" novalidate="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-lg-12"></div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="nik">NIK
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control form-control-sm"
                                                            id="nik" placeholder="Input NIK.." required=""
                                                            name="nik" value="{{ old('nik') }}">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="nama">Nama
                                                        Peternak <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="nama" placeholder="Input Nama.." required=""
                                                            name="nama" value="{{ old('nama') }}">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="kecamatan">Kecamatan
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control" id="kecamatan" name="kecamatan" required>
                                                            <option value="">Pilih</option>
                                                            @foreach ($kecamatan as $kec)
                                                                <option value={{ $kec->id }}>{{ $kec->nama }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="kelurahan">Kelurahan
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control" id="kelurahan" name="kelurahan" required>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="col-lg-3">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="rt">RT
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="rt" placeholder="Input RT.." required=""
                                                            name="rt" value="{{ old('rt') }}">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="rw">RW
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="rw" placeholder="Input RW.." required=""
                                                            name="rw" value="{{ old('rw') }}">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="alamat">Alamat
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control form-control-sm" id="alamat" rows="5" placeholder="" required=""
                                                            name="alamat" value="{{ old('alamat') }}"></textarea>
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Ternak</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-validation">
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Domba/Kambing
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="terduga_kambing">Terduga
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="terduga_kambing" placeholder="" name="terduga_kambing"
                                                        value="{{ old('terduga_kambing') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="tertular_kambing">Tertular
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="tertular_kambing" placeholder="" name="tertular_kambing"
                                                        value="{{ old('tertular_kambing') }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Kerbau
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="terduga_kerbau">Terduga
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="terduga_kerbau" placeholder="" name="terduga_kerbau"
                                                        value="{{ old('terduga_kerbau') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="tertular_kerbau">Tertular
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="tertular_kerbau" placeholder="" name="tertular_kerbau"
                                                        value="{{ old('tertular_kerbau') }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Sapi Perah
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="terduga_sapi_perah">Terduga
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="terduga_sapi_perah" placeholder="" name="terduga_sapi_perah"
                                                        value="{{ old('terduga_sapi_perah') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="tertular_sapi_perah">Tertular
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="tertular_sapi_perah" placeholder=""
                                                        name="tertular_sapi_perah"
                                                        value="{{ old('tertular_sapi_perah') }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Sapi Potong
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="terduga_sapi_potong">Terduga
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="terduga_sapi_potong" placeholder=""
                                                        name="terduga_sapi_potong"
                                                        value="{{ old('terduga_sapi_potong') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="tertular_sapi_potong">Tertular
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="tertular_sapi_potong" placeholder=""
                                                        name="tertular_sapi_potong"
                                                        value="{{ old('tertular_sapi_potong') }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Total
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="total_terduga">Terduga
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="total_terduga" placeholder="" name="total_terduga"
                                                        value="{{ old('total_terduga') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="total_tertular">Tertular
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="total_tertular" placeholder="" name="total_tertular"
                                                        value="{{ old('total_tertular') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-lg-8 pull-right">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
