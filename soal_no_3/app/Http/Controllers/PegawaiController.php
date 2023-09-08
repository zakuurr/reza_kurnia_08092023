<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    public function index()
    {
        $itemsPerPage = 5;
        $pegawai_dt = Pegawai::orderBy('id', 'desc')->paginate($itemsPerPage);

        $no = ($pegawai_dt->currentPage() - 1) * $itemsPerPage + 1;
        $data = [
            'title' => 'Pegawai',
            'pegawai' => $pegawai_dt,
            'no' => $no
        ];

        return view('pegawai.index', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Form Pegawai',
        ];
        return view('pegawai.create', $data);
    }

    public function store(Request $request)
    {


        $data = [
            'pegawai_nama' => $request->input('pegawai_nama'),
            'pegawai_jabatan' => $request->input('pegawai_jabatan'),
            'pegawai_umur' => $request->input('pegawai_umur'),
            'pegawai_alamat' => $request->input('pegawai_alamat')
        ];

        Pegawai::create($data);

        return redirect('pegawai')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pegawai_dt = Pegawai::where('id', $id)->first();
        $data = [
            'title' => 'Form Edit Pegawai',
            'pegawai' => $pegawai_dt
        ];

        return view('pegawai.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pegawai_nama' => 'required',
            'pegawai_jabatan' => 'required',
            'pegawai_umur' => 'required',
            'pegawai_alamat' => 'required',
        ],[
            'pegawai_nama.required' => 'Nama wajib diisi',
            'pegawai_jabatan.required' => 'jabatan wajib diisi',
            'pegawai_umur.required' => 'umur wajib diisi',
            'pegawai_alamat.required' => 'alamat wajib diisi',
        ]);

        $data = [
            'pegawai_nama' => $request->input('pegawai_nama'),
            'pegawai_jabatan' => $request->input('pegawai_jabatan'),
            'pegawai_umur' => $request->input('pegawai_umur'),
            'pegawai_alamat' => $request->input('pegawai_alamat')
        ];

        Pegawai::where('id', $id)->update($data);
        return redirect('pegawai')->with('success', 'Data berhasil diedit');
    }

    public function destroy($id)
    {
        Pegawai::where('id', $id)->delete();
        return redirect('pegawai')->with('success', 'Data berhasil dihapus');
    }
}
