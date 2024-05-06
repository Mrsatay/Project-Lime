
<!-- Modal untuk Hapus -->
<div class="modal fade" id="exampleModalHapus{{ $d->id_organisasi }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">

                apakah anda yakin ingin menghapus data? <b>{{ $d->ketua }}</b>                                                                         </div>
            <div class="modal-footer">
                <form action="{{ route('organisasi.delete',['id'=> $d->id_organisasi]) }}" method="POST">
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
<div class="modal fade" id="organisasi_tambah" tabindex="-1" role="dialog" aria-labelledby="organisasi_tambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="organisasi_tambahTitle">Tambah Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('organisasi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Organisasi</label>
                <input type="form" name="nama_organisasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pemilik">
                @error( 'nama_organisasi' )
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Ketua Organisasi</label>
                <input type="form" name="ketua" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jl.smerewing jos 123">
                @error( 'ketua' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Wakil Organisasi</label>
                <input type="form" name="wakil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                @error( 'wakil' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Anggota</label>
                <input type="form" name="jumlah_anggota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                @error( 'jumlah_anggota' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
                         
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>

<!-- Modal Untuk Edit -->
<div class="modal fade" id="exampleModalEdit{{ $d->id_organisasi }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalEditTitle{{ $d->id_organisasi }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalEditTitle{{ $d->id_organisasi }}">Edit Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('organisasi.update',['id' => $d->id_organisasi]) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Organisasi</label>
                <input type="form" name="nama_organisasi" value="{{ $d->nama_organisasi }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Pemilik">
                @error( 'nama_organisasi' )
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Ketua Organisasi</label>
                <input type="form" name="ketua" value="{{ $d->ketua }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jl.smerewing jos 123">
                @error( 'ketua' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Wakil Organisasi</label>
                <input type="form" name="wakil" value="{{ $d->wakil }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                @error( 'wakil' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Anggota</label>
                <input type="form" name="jumlah_anggota" value="{{ $d->jumlah_anggota }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cukup masukkan Angka saja">
                @error( 'jummlah_anggota' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
                         
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>