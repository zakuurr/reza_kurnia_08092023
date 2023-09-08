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
                'pegawai_nama' => 'Gusti Giustianto',
                'pegawai_jabatan' => 'Web developer',
                'pegawai_umur' => 23,
                'pegawai_alamat' => 'Bandung',
            ],
            [
                'pegawai_nama' => 'Budi Setiawan',
                'pegawai_jabatan' => 'Sekertaris',
                'pegawai_umur' => 25,
                'pegawai_alamat' => 'Sumedang',
            ],
            [
                'pegawai_nama' => 'Citra Marcellina',
                'pegawai_jabatan' => 'Akuntan',
                'pegawai_umur' => 28,
                'pegawai_alamat' => 'Banten',
            ],
            [
                'pegawai_nama' => 'Annisa Pratiwi',
                'pegawai_jabatan' => 'Marketing',
                'pegawai_umur' => 23,
                'pegawai_alamat' => 'Jakarata',
            ],
        ];

        foreach ($data as $dt) {
            Pegawai::insert([
                'pegawai_nama' => $dt['pegawai_nama'],
                'pegawai_jabatan' => $dt['pegawai_jabatan'],
                'pegawai_umur' => $dt['pegawai_umur'],
                'pegawai_alamat' => $dt['pegawai_alamat'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
