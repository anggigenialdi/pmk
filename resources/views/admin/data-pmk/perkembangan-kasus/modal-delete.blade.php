@foreach ($datas as $data)
    <div class="modal fade none-border" id="deleteModal{{ $data->id }}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Data Perkembangan Kasus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda Yakin Ingin Menghapus Data?</p>
                </div>
                <form class="needs-validation" method="POST"
                    action="{{ route('data-perkembangan.delete', $data->id) }}" autocomplete="off" novalidate="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning light" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-danger waves-effect waves-light save-category"
                        data-bs-toggle="modal">Delete</button>                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
