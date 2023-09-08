@extends('layout.base')

@section('title-page', $title)
@section('content')
    <div class="section-siswa">
        <div class="d-flex justify-content-between">
            <h1 class="my-3">Halaman {{ $title }}</h1>
            <div class="d-flex align-items-end">
                <a class="btn btn-secondary" href="/pegawai"><< Kembali</a>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header text-center">
                <h3 class="fw-bold">Form Pegawai</h3>
            </div>
            <div class="card-body p-4">
                <form action="/pegawai" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="pegawai_nama" class="form-label">Nama Pegawai</label>
                        <input type="text" name="pegawai_nama" id="pegawai_nama" class="form-control" placeholder="Nama Pegawai" value="{{ Session::get('pegawai_nama'); }}">
                    </div>
                    <div class="mb-3">
                        <label for="pegawai_jabatan" class="form-label">Jabtan Pegawai</label>
                        <input type="text" name="pegawai_jabatan" id="pegawai_jabatan" class="form-control" placeholder="Jabatan Pegawai" value="{{ Session::get('pegawai_jabatan'); }}">
                    </div>
                    <div class="mb-3">
                        <label for="pegawai_umur" class="form-label">Umur Pegawai</label>
                        <input type="number" name="pegawai_umur" id="pegawai_umur" class="form-control" placeholder="Umur Pegawai" value="{{ Session::get('pegawai_umur'); }}">
                    </div>
                    <div class="mb-3">
                        <label for="pegawai_alamat" class="form-label">Pegawai Alamat</label>
                        <textarea class="form-control" name="pegawai_alamat" id="pegawai_alamat" rows="3">{{ Session::get('pegawai_alamat'); }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success" >Simpan</button>
               </form>
            </div>
        </div>


    </div>
@endsection

