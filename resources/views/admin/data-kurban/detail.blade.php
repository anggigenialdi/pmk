@extends('layouts/admin/admin')
<style>
    label {
        display: block;
    }

    body {
        padding: 25px;
    }
</style>
@section('header')
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Detail Data Kurban
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
                    <li class="breadcrumb-item"><a href="{{ route('master-kurban.index') }}">Data Kurban</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Detail Data</a></li>
                </ol>
            </div>
            @foreach ($datas as $data)
                <fieldset disabled="">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <div class="row">
                                            <div class="col-xl-12">

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
                                                    <label class="col-lg-3 col-form-label" for="domba">Domba
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="domba_layak">Layak
                                                            </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm @error('domba_layak') is-invalid @enderror"
                                                            id="domba_layak" placeholder="Input Domba layak.."
                                                            required="" name="domba_layak"
                                                            value="{{ old('domba_layak', $data->domba_layak) }}">
                                                        @error('domba_layak')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-5 col-form-label" for="domba_tidak_layak">Tidak
                                                            Layak
                                                            </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm @error('domba_tidak_layak') is-invalid @enderror"
                                                            id="domba_tidak_layak" placeholder="Input Domba tidak layak.."
                                                            required="" name="domba_tidak_layak"
                                                            value="{{ old('domba_tidak_layak', $data->domba_tidak_layak) }}">
                                                        @error('domba_tidak_layak')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="kambing">Kambing
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="kambing_layak">Layak
                                                            </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm @error('kambing_layak') is-invalid @enderror"
                                                            id="kambing_layak" placeholder="Input kambing layak.."
                                                            required="" name="kambing_layak"
                                                            value="{{ old('kambing_layak', $data->kambing_layak) }}">
                                                        @error('kambing_layak')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-5 col-form-label"
                                                            for="kambing_tidak_layak">Tidak
                                                            Layak
                                                            </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm @error('kambing_tidak_layak') is-invalid @enderror"
                                                            id="kambing_tidak_layak"
                                                            placeholder="Input Kambing Tidak layak.." required=""
                                                            name="kambing_tidak_layak"
                                                            value="{{ old('kambing_tidak_layak', $data->kambing_tidak_layak) }}">
                                                        @error('kambing_tidak_layak')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="kerbau">Kerbau
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="kerbau_layak">Layak
                                                            </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm @error('kerbau_layak') is-invalid @enderror"
                                                            id="kerbau_layak" placeholder="Input Kerbau layak.."
                                                            required="" name="kerbau_layak"
                                                            value="{{ old('kerbau_layak' , $data->kerbau_layak) }}">
                                                        @error('kerbau_layak')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-5 col-form-label"
                                                            for="kerbau_tidak_layak">Tidak
                                                            Layak
                                                            </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm @error('kerbau_tidak_layak') is-invalid @enderror"
                                                            id="kerbau_tidak_layak"
                                                            placeholder="Input Kerbau tidak layak.." required=""
                                                            name="kerbau_tidak_layak"
                                                            value="{{ old('kerbau_tidak_layak', $data->kerbau_tidak_layak) }}">
                                                        @error('kerbau_tidak_layak')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="sapi">Sapi
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="sapi_layak">Layak
                                                            </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm @error('sapi_layak') is-invalid @enderror"
                                                            id="sapi_layak" placeholder="Input Sapi layak.."
                                                            required="" name="sapi_layak"
                                                            value="{{ old('sapi_layak', $data->sapi_layak) }}">
                                                        @error('sapi_layak')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-5 col-form-label"
                                                            for="sapi_tidak_layak">Tidak
                                                            Layak
                                                            </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm @error('sapi_tidak_layak') is-invalid @enderror"
                                                            id="sapi_tidak_layak" placeholder="Input Sapi tidak layak.."
                                                            required="" name="sapi_tidak_layak"
                                                            value="{{ old('sapi_tidak_layak', $data->sapi_tidak_layak) }}">
                                                        @error('sapi_tidak_layak')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
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
