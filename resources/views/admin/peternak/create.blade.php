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
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Tambah Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="needs-validation" novalidate="">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="nik">NIK
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="nik"
                                                            placeholder="Input NIK.." required="" name="nik"
                                                            value="{{ old('nik') }}">
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
                                                        <input type="text" class="form-control" id="nama"
                                                            placeholder="Input Nama.." required="" name="nama"
                                                            value="{{ old('nama') }}">
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
                                                        <input type="text" class="form-control" id="kecamatan"
                                                            placeholder="Input Kecamatan.." required="" name="kecamatan"
                                                            value="{{ old('kecamatan') }}">
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
                                                        <input type="text" class="form-control" id="kelurahan"
                                                            placeholder="Input Kelurahan.." required="" name="kelurahan"
                                                            value="{{ old('kelurahan') }}">
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
                                                        <input type="text" class="form-control" id="rt"
                                                            placeholder="Input RT.." required="" name="rt"
                                                            value="{{ old('rt') }}">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="rw">RW
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="rw"
                                                            placeholder="Input RW.." required="" name="rw"
                                                            value="{{ old('rw') }}">
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
                                                        <textarea class="form-control" id="alamat" rows="5" placeholder="" required="" name="alamat"
                                                            value="{{ old('alamat') }}"></textarea>
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="mb-3 row">
                                                        <div class="col-lg-8 ms-auto">
                                                            <button type="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div> --}}
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Ternak</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="needs-validation" novalidate="">
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Domba/Kambing
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="domba_tertuga">Terduga
                                                    </label>
                                                    <input type="text" class="form-control" id="domba_tertuga"
                                                        placeholder="" name="domba_tertuga"
                                                        value="{{ old('domba_tertuga') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="domba_tertular">Tertular
                                                    </label>
                                                    <input type="text" class="form-control" id="domba_tertular"
                                                        placeholder="" name="domba_tertular"
                                                        value="{{ old('domba_tertular') }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Kerbau
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="kerbau_tertuga">Terduga
                                                    </label>
                                                    <input type="text" class="form-control" id="kerbau_tertuga"
                                                        placeholder="" name="kerbau_tertuga"
                                                        value="{{ old('kerbau_tertuga') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="kerbau_tertular">Tertular
                                                    </label>
                                                    <input type="text" class="form-control" id="kerbau_tertular"
                                                        placeholder="" name="kerbau_tertular"
                                                        value="{{ old('kerbau_tertular') }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Sapi Perah
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="sapi_perah_tertuga">Terduga
                                                    </label>
                                                    <input type="text" class="form-control" id="sapi_perah_tertuga"
                                                        placeholder="" name="sapi_perah_tertuga"
                                                        value="{{ old('sapi_perah_tertuga') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="sapi_perah_tertular">Tertular
                                                    </label>
                                                    <input type="text" class="form-control" id="sapi_perah_tertular"
                                                        placeholder="" name="sapi_perah_tertular"
                                                        value="{{ old('sapi_perah_tertular') }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Sapi Potong
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="sapi_potong_tertuga">Terduga
                                                    </label>
                                                    <input type="text" class="form-control" id="sapi_potong_tertuga"
                                                        placeholder="" name="sapi_potong_tertuga"
                                                        value="{{ old('sapi_potong_tertuga') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="sapi_potong_tertular">Tertular
                                                    </label>
                                                    <input type="text" class="form-control" id="sapi_potong_tertular"
                                                        placeholder="" name="sapi_potong_tertular"
                                                        value="{{ old('sapi_potong_tertular') }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-lg-3 col-form-label" for="domba">Total
                                                </label>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="total_terduga">Terduga
                                                    </label>
                                                    <input type="text" class="form-control" id="total_terduga"
                                                        placeholder="" name="total_terduga"
                                                        value="{{ old('total_terduga') }}">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="col-lg-3 col-form-label" for="total_tertular">Tertular
                                                    </label>
                                                    <input type="text" class="form-control" id="total_tertular"
                                                        placeholder="" name="total_tertular"
                                                        value="{{ old('total_tertular') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="vendor/global/global.min.js"></script>
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection
