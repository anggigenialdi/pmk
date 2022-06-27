<div class="modal fade none-border" id="add-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Peternak</strong></h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="control-label form-label">Nama Peternak</label>
                            <input class="form-control form-white" placeholder="Nama Peternak" type="text"
                                name="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="col-md-12">
                            <label class="control-label form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="5" name="alamat"
                                placeholder="Alamat" value="{{ old('alamat') }}" required autofocus></textarea>
                        </div>
                        <div class="col-md-6">
                            {{-- <label class="control-label form-label">RT</label> --}}
                            <input class="form-control form-white" placeholder="RT" type="number"
                                name="rt" value="{{ old('rt') }}">
                        </div>
                        <div class="col-md-6">
                            {{-- <label class="control-label form-label">RW</label> --}}
                            <input class="form-control form-white" placeholder="RW" type="number"
                                name="rw" value="{{ old('rw') }}">
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                    data-bs-toggle="modal">Save</button>
            </div>
        </div>
    </div>
</div>
