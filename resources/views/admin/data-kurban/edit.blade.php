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
                            Edit Data Kurban
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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data</a></li>
                </ol>
            </div>
            @foreach ($datas as $data)
                <form class="validate-create" method="POST" action="{{ route('master-kurban.update', $data->id) }}"
                    autocomplete="off" novalidate="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Data Kurban</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-validation">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label kecamatan" for="kecamatan">Kecamatan
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control" id="kecamatan" name="kecamatan"
                                                            required>
                                                            @foreach ($kecamatan as $kec)
                                                                <option value="{{ $kec->id }}"
                                                                    {{ $kec->id == $kec->nama ? 'selected' : '' }}>
                                                                    {{ $kec->nama }}
                                                                </option>
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
                                                        <select class="form-control" id="kelurahan" name="kelurahan"
                                                            required>
                                                            @foreach ($kelurahan as $kel)
                                                                <option value="{{ $kel->id }}"
                                                                    {{ $kel->id == $kel->nama ? 'selected' : '' }}>
                                                                    {{ $kel->nama }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="domba">Domba
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="domba_layak">Layak
                                                            <span class="text-danger">*</span>
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
                                                            <span class="text-danger">*</span>
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
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="kambing_layak">Layak
                                                            <span class="text-danger">*</span>
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
                                                            <span class="text-danger">*</span>
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
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="kerbau_layak">Layak
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text"
                                                            class="form-control form-control-sm @error('kerbau_layak') is-invalid @enderror"
                                                            id="kerbau_layak" placeholder="Input Kerbau layak.."
                                                            required="" name="kerbau_layak"
                                                            value="{{ old('kerbau_layak', $data->kerbau_layak) }}">
                                                        @error('kerbau_layak')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-5 col-form-label"
                                                            for="kerbau_tidak_layak">Tidak
                                                            Layak
                                                            <span class="text-danger">*</span>
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
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="sapi_layak">Layak
                                                            <span class="text-danger">*</span>
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
                                                            <span class="text-danger">*</span>
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


                                    <div class="mb-3 row">
                                        <div class="col-lg-8 pull-right">
                                            <button type="submit" class="btn btn-primary">Update</button>
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
@section('js')
    <script>
        $(document).on('change', '#kecamatan', function() {
            var id_kecamatan = $(this).val();
            // console.log(id_kecamatan);
            let datas = [];
            $.ajax({
                type: "GET",
                url: '/kelurahan/' + id_kecamatan,

                success: function(data) {
                    // console.log(data);
                    $("#kelurahan").html(
                        '<option selected disabled="true" value="">=== Pilih Kelurahan === </option>'
                    );
                    $.each(data, function(index, value) {
                        $("#kelurahan").append("<option value=' " + value.id + " '> " + value
                            .nama + "</option>");
                    });
                },
                error: function() {}
            });

        });
    </script>
@endsection
