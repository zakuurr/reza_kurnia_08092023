<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiRequest;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    public function index()
    {

        $pegawai = Pegawai::orderBy('pegawai_id', 'desc')->paginate(5);

        $data = [
            'title' => 'Pegawai',
            'pegawai' => $pegawai,
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

    public function store(PegawaiRequest $request)
    {


        $data = $request->validated();

        Pegawai::create($data);

        return redirect('pegawai')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pegawai = Pegawai::where('pegawai_id', $id)->first();
        $data = [
            'title' => 'Form Edit Pegawai',
            'pegawai' => $pegawai
        ];

        return view('pegawai.edit', $data);
    }

    public function update(PegawaiRequest $request, $id)
    {
        $data = $request->validated();


        Pegawai::where('pegawai_id', $id)->update($data);
        return redirect('pegawai')->with('success', 'Data berhasil diedit');
    }

    public function destroy($id)
    {
        Pegawai::where('pegawai_id', $id)->delete();
        return redirect('pegawai')->with('success', 'Data berhasil dihapus');
    }
}
