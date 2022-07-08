@foreach ($datas as $data)
    <div class="modal fade none-border" id="editModal{{ $data->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Edit Perkembangan Kasus</strong></h4>
                </div>
                <form class="needs-validation" method="POST" action="{{ route('data-perkembangan.update', $data->id) }}"
                    autocomplete="off" novalidate="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="control-label form-label">Nama Peternak</label>
                                <input class="form-control form-white" placeholder="Nama Peternak" type="text"
                                    name="nama" value="{{ old('nama', $data->dataPeternak->nama) }}" readonly
                                    disabled>
                            </div>
                            {{-- <div class="col-md-12">
                                <label class="control-label form-label">Tanggal</label>
                                <input type="datetime-local" class="form-control form-control-sm" id="date"
                                    placeholder="Input Tanggal.." required="" name="tanggal_perkembangan_kasus"
                                    value="{{ old('tanggal_perkembangan_kasus') }}">
                            </div> --}}
                            <div class="col-md-12">
                                <label class="control-label form-label">Mati</label>
                                <input class="form-control form-white" placeholder="" type="number"
                                    name="mati" value="{{ old('mati', $data->mati) }}" required="">
                            </div>
                            <div class="col-md-12">
                                <label class="control-label form-label">Potong Bersyarat</label>
                                <input class="form-control form-white" placeholder="" type="number"
                                    name="potong_bersyarat" value="{{ old('potong_bersyarat', $data->potong_bersyarat) }}" required="">
                            </div>
                            <div class="col-md-12">
                                <label class="control-label form-label">Sembuh</label>
                                <input class="form-control form-white" placeholder="" type="number"
                                    name="sembuh" value="{{ old('sembuh', $data->sembuh) }}" required="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect"
                            data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light save-category"
                            data-bs-toggle="modal">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endforeach
