
<!-- Modal untuk Hapus -->
<div class="modal fade" id="exampleModalHapus{{ $d->id_kk }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Konfirmasi Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
            </div>
            <div class="modal-body">

                apakah anda yakin ingin menghapus data? <b>{{ $d->no_kk }}</b>                                                                         </div>
            <div class="modal-footer">
                <form action="{{ route('kk.delete',['id'=> $d->id_kk]) }}" method="POST">
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
<div class="modal fade" id="kk_tambah" tabindex="-1" role="dialog" aria-labelledby="kk_tambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="kk_tambahTitle">Tambah Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('kk.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">No KK</label>
                <input type="form" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12345678912345">
                @error( 'no_kk' )
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">alamat</label>
                <input type="form" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jl.smerewing jos 123">
                @error( 'alamat' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">NIK Kepala Keluarga</label>
                <input type="form" name="nik_kepala_keluarga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12345678912345">
                @error( 'nik_kepala_keluarga' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Usia Produktif</label>
                <input type="form" name="jumlah_usia_produktif" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan total">
                @error( 'jumlah_usia_produktif' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Anggota KK</label>
                <input type="form" name="jumlah_anggota_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan total">
                @error( 'jumlah_anggota_kk' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Usia Lanjut</label>
                <input type="form" name="jumlah_usia_lanjut" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukkan total">
                @error( 'jumlah_usia_lanjut' )
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
<div class="modal fade" id="exampleModalEdit{{ $d->id_kk }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalEditTitle{{ $d->id_kk }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalEditTitle{{ $d->id_kk }}">Edit Acara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{ route('kk.update',['id'=> $d->id_kk]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">No KK</label>
                <input type="form" name="no_kk" value="{{ $d->no_kk }}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12345678912345">
                @error( 'no_kk' )
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">alamat</label>
                <input type="form" name="alamat" value="{{ $d->alamat }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jl.smerewing jos 123">
                @error( 'alamat' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">NIK Kepala Keluarga</label>
                <input type="form" name="nik_kepala_keluarga" value="{{ $d->nik_kepala_keluarga }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12345678912345">
                @error( 'nik_kepala_keluarga' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Usia Produktif</label>
                <input type="form" name="jumlah_usia_produktif" value="{{ $d->jumlah_usia_produktif }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan total">
                @error( 'jumlah_usia_produktif' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Anggota KK</label>
                <input type="form" name="jumlah_anggota_kk" value="{{ $d->jumlah_anggota_kk }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan total">
                @error( 'jumlah_anggota_kk' )
                    <small>{{ $message }}</small>
                @enderror
            </div>               
            <div class="form-group">
                <label for="exampleInputEmail1">Jumlah Usia Lanjut</label>
                <input type="form" name="jumlah_usia_lanjut" value="{{ $d->jumlah_usia_lanjut }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukkan total">
                @error( 'jumlah_usia_lanjut' )
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