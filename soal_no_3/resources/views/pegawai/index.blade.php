@extends('layout.page')

@section('title')
@section('content')

    <h1 class="my-3">Halaman {{ $title }}</h1>
    @include('layout.components.alert')
    <a href="/pegawai/create" class="btn btn-primary">Tambah Data Pegawai</a>
    <div class="table-responsive mt-3">
        <table class="table table-hover table-responsive" id="myTable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm btn-rounded" href="pegawai/{{ $p->pegawai_id }}/edit">Edit</a>
                        <form onsubmit="return confirm('Apakah yakin ingin menghapus data?')" class="d-inline" action="/pegawai/{{ $p->pegawai_id }}" method="POST">
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
