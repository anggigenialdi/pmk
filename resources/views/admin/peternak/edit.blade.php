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
                    <li class="breadcrumb-item"><a href="{{ route('peternak.index') }}">Peternak</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data</a></li>
                </ol>
            </div>
            @foreach ($datas as $data)
                <form class="needs-validation" method="POST" action="{{ route('peternak.update', $data->id) }}"
                    autocomplete="off" novalidate="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-lg-12"></div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Data Peternak</h4>
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
                                                            name="nik" value="{{ old('nik', $data->nik) }}">
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
                                                            name="nama" value="{{ old('nama', $data->nama) }}">
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
                                                    <div class="col-lg-3">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="rw">RW
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="rw" placeholder="Input RW.." required=""
                                                            name="rw" value="{{ old('rw', $data->rw) }}">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="col-lg-3 col-form-label" for="rt">RT
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="rt" placeholder="Input RT.." required=""
                                                            name="rt" value="{{ old('rt', $data->rt) }}">
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
                                                            name="alamat" value="{{ old('alamat') }}">{{ $data->alamat }}</textarea>
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
                                        <h4 class="card-title">Populasi Ternak</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-validation">
                                            <div class="row">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label"
                                                        for="jumlah_kambing">Domba/Kambing <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jumlah_kambing" placeholder="Input Jumlah Domba/Kambing.."
                                                            required="" name="jumlah_kambing"
                                                            value="{{ old('jumlah_kambing', $data->jumlah_kambing) }}">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="jumlah_kerbau">Kerbau
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jumlah_kerbau" placeholder="Input Jumlah Kerbau.."
                                                            required="" name="jumlah_kerbau"
                                                            value="{{ old('jumlah_kerbau', $data->jumlah_kerbau) }}">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="jumlah_sapi_perah">Sapi
                                                        Perah <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jumlah_sapi_perah" placeholder="Input Jumlah Sapi Perah.."
                                                            required="" name="jumlah_sapi_perah"
                                                            value="{{ old('jumlah_sapi_perah', $data->jumlah_sapi_perah) }}">
                                                        <div class="invalid-feedback">
                                                            Input tidak boleh kosong
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-3 col-form-label" for="jumlah_sapi_potong">Sapi
                                                        Potong <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="jumlah_sapi_potong"
                                                            placeholder="Input Jumlah Sapi Potong.." required=""
                                                            name="jumlah_sapi_potong"
                                                            value="{{ old('jumlah_sapi_potong', $data->jumlah_sapi_potong) }}">
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
