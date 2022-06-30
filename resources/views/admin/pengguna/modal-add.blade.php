<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form class="needs-validation" method="POST" action="{{ route('master-pengguna.post') }}"
                autocomplete="off" novalidate="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="col-xl-12">
                        <div class="mb-3 row">
                            <label class="col-lg-3 col-form-label" for="nama">Nama
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama.."
                                    required="" name="name">
                                <div class="invalid-feedback">
                                    Input Nama tidak boleh kosong
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-3 col-form-label" for="email">Email
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" id="email" placeholder="Masukan Email.."
                                    required="" name="email">
                                <div class="invalid-feedback">
                                    Input Email tidak boleh kosong
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-3 col-form-label" for="role">Role
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-9">
                                <select class="form-control" id="role" name="role" required>
                                    <option value="">Pilih</option>
                                    <option value="superadmin">Superadmin</option>
                                    <option value="admin">Admin</option>
                                    <option value="operator">Operator</option>
                                </select>
                                <div class="invalid-feedback">
                                    Input Email tidak boleh kosong
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-lg-3 col-form-label" for="password">Password
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-9">
                                <input type="password" class="form-control" id="password"
                                    placeholder="Masukan Password.." required="" name="password">
                                <div class="invalid-feedback">
                                    Input Password tidak boleh kosong
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
