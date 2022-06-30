@foreach ($datas as $data)
    <div class="modal fade none-border" id="addModal{{ $data->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><strong>Hasil Labolatorium</strong></h4>
                </div>
                <form class="needs-validation" method="POST" action="{{ route('pmk-lab.post', $data->id) }}"
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
                            <div class="col-md-12">
                                <label class="control-label form-label">Tanggal Pengujian</label>
                                <input type="datetime-local" class="form-control form-control-sm" id="date"
                                    placeholder="Input Tanggal.." required="" name="tanggal_pengujian_lab"
                                    value="{{ old('tanggal_pengujian_lab') }}">
                            </div>
                            <div class="col-md-12">
                                <label class="control-label form-label">Hasil</label>
                                <input class="form-control form-white" placeholder="Hasil" type="number"
                                    name="hasil_pengujian_lab" value="{{ old('hasil_pengujian_lab') }}" required="">
                            </div>
                            <div class="col-md-12">
                                <label class="control-label form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" rows="5" name="keterangan" placeholder="keterangan"
                                    value="{{ old('keterangan') }}" required autofocus></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect"
                            data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light save-category"
                            data-bs-toggle="modal">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endforeach
