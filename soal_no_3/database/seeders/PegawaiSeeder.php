<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'pegawai_nama' => 'Reza Kurnia',
                'pegawai_jabatan' => 'Web developer',
                'pegawai_umur' => 23,
                'pegawai_alamat' => 'Bandung',
            ],
        ];

        foreach ($data as $p) {
            Pegawai::insert([
                'pegawai_nama' => $p['pegawai_nama'],
                'pegawai_jabatan' => $p['pegawai_jabatan'],
                'pegawai_umur' => $p['pegawai_umur'],
                'pegawai_alamat' => $p['pegawai_alamat']
            ]);
        }
    }
}
