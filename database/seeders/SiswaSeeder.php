<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nik' => 3674022105910001,
                'nis' => 1909876001,
                'nama' => 'Nama Siswa',
                'jk' => 'Laki-Laki',
                'provinsi' => 'Jawa Timur',
                'kabkot' => 'Kab. Malang',
                'kec' => 'Pakisaji',
                'keldes' => 'Sutojayan',
                'alamat' => 'Ds. Sutojayan RT 01 / RW 02',
                'ayah' => 'Munir',
                'ibu' => 'Tutik',
                'wali' => 'Tutik',
                'tlp_wali' => '081345678901',
                'krj_ayh' => 'Karyawan Swasta',
                'krj_ibu' => 'Mengurus Rumah Tangga',
                'penghasilan_ortu' => 3,
                'thn_msk' => '2022',
                'sklh_asal' => 'SMPN 1 Serpong',
                'kelas' => 1,
                'subject' => 3,
                'created_at' => date("Y-m-d h:i:s", time()),
                'updated_at' => date("Y-m-d h:i:s", time()),
            ]
        ];

        DB::table('siswa')->insert($data);

    }
}
