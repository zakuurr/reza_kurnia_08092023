@extends('layout.base')

@section('title')
@section('content')

    <h1 class="my-3">Halaman {{ $title }}</h1>
    @include('layout.components.pesan')
    <a href="/pegawai/create" class="btn btn-primary">Tambah Data Pegawai</a>
    <div class="table-responsive mt-3">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabtan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $dt)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $dt->pegawai_nama }}</td>
                    <td>{{ $dt->pegawai_jabatan }}</td>
                    <td>{{ $dt->pegawai_umur }}</td>
                    <td>{{ $dt->pegawai_alamat }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm btn-rounded" href="pegawai/{{ $dt->id }}/edit">Edit</a>
                        <form onsubmit="return confirm('Apakah yakin ingin menghapus data?')" class="d-inline" action="/pegawai/{{ $dt->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm btn-rounded" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        {{-- PAGINATION --}}
        {{ $pegawai->links() }}
    </div>

@endsection
