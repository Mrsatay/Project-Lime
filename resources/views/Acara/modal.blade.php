
<!-- Modal untuk Hapus -->
<div class="modal fade" id="exampleModalHapus{{ $d->id_acara }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">apakah anda yakin ingin menghapus data? <b>{{ $d->judul }}</b></div>
            <div class="modal-footer">
                <form action="{{ route('acara.delete',['id'=> $d->id_acara]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Untuk Tambah -->
<div class="modal fade" id="exampleModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalTambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalTambahTitle">Tambah Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('acara.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="form-group">
            <label for="judul">Judul Acara</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Acara">
            </div>
            <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Acara"></textarea>
            </div>
            <div class="form-group">
            <label for="tipe_acara">Tipe Acara</label>
            <select class="form-control" id="tipe_acara" name="tipe_acara">
                <option value="Kegiatan">Kegiatan</option>
                <option value="Informasi">Informasi</option>
            </select>
            </div>
            <div class="form-group">
            <label for="image">Gambar Acara</label>
            <input type="file" class="form-control-file" id="image" name="image">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
    </div>
</div>

<!-- Modal Untuk Edit -->
<div class="modal fade" id="exampleModalEdit{{ $d->id_acara }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalEditTitle{{ $d->id_acara }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalEditTitle{{ $d->id_acara }}">Edit Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('acara.update', ['id' => $d->id_acara]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <div class="form-group">
            <label for="judul">Judul Acara</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $d->judul }}" placeholder="Masukkan Judul Acara">
            </div>
            <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Acara">{{ $d->deskripsi }}</textarea>
            </div>
            <div class="form-group">
            <label for="tipe_acara">Tipe Acara</label>
            <select class="form-control" id="tipe_acara" name="tipe_acara">
                <option value="Kegiatan" @if($d->tipe_acara == 'Kegiatan') selected @endif>Kegiatan</option>
                <option value="Informasi" @if($d->tipe_acara == 'Informasi') selected @endif>Informasi</option>
            </select>
            </div>
            <div class="form-group">
            <label for="image">Gambar Acara</label>
            <input type="file" class="form-control-file" id="image" name="image">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
        </form>
    </div>
    </div>
</div>