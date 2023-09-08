@extends('layout.base')

@section('title-page', $title)
@section('content')
    <div class="section-siswa">
        <div class="d-flex justify-content-between">
            <h1 class="my-3">Halaman {{ $title }}</h1>
            <div class="d-flex align-items-end">
                <a class="btn btn-secondary" href="/siswa"><< Kembali</a>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header text-center">
                <h3 class="fw-bold">Form Pegawai</h3>
            </div>
            <div class="card-body p-4">
                <form id="bidota">
                    <div class="mb-3">
                        <label for="pegawai_nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="pegawai_nama" id="pegawai_nama" class="form-control" placeholder="Nama Pegawai">
                    </div>
                    <button type="submit" class="btn btn-success" >Simpan</button>
               </form>
            </div>
        </div>
      
    
    </div>
@endsection

