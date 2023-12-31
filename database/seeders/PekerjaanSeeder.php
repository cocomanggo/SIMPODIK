<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_pekerjaan' => 'Belum / Tidak Bekerja'],
            ['nama_pekerjaan' => 'Mengurus Rumah Tangga'],
            ['nama_pekerjaan' => 'Pelajar/ Mahasiswa'],
            ['nama_pekerjaan' => 'Pensiunan'],
            ['nama_pekerjaan' => 'Tentara Nasional Indonesia'],
            ['nama_pekerjaan' => 'Kepolisisan RI'],
            ['nama_pekerjaan' => 'Perdagangan'],
            ['nama_pekerjaan' => 'Peternak'],
            ['nama_pekerjaan' => 'Nelayan / Perikanan'],
            ['nama_pekerjaan' => 'Industri'],
            ['nama_pekerjaan' => 'Konstruksi'],
            ['nama_pekerjaan' => 'Transportasi'],
            ['nama_pekerjaan' => 'Karyawan Swasta'],
            ['nama_pekerjaan' => 'Karyawan BUMN'],
            ['nama_pekerjaan' => 'Karyawan BUMD'],
            ['nama_pekerjaan' => 'Karyawan Honorer'],
            ['nama_pekerjaan' => 'Buruh Harian Lepas'],
            ['nama_pekerjaan' => 'Buruh Tani / Perkebunan'],
            ['nama_pekerjaan' => 'Buruh Nelayan / Perikanan'],
            ['nama_pekerjaan' => 'Buruh Peternakan'],
            ['nama_pekerjaan' => 'Pembantu Rumah Tangga'],
            ['nama_pekerjaan' => 'Tukang Cukur'],
            ['nama_pekerjaan' => 'Tukang Listrik'],
            ['nama_pekerjaan' => 'Tukang Batu'],
            ['nama_pekerjaan' => 'Tukang Kayu'],
            ['nama_pekerjaan' => 'Tukang Sol Sepatu'],
            ['nama_pekerjaan' => 'Tukang Las / Pandai Besi'],
            ['nama_pekerjaan' => 'Tukang Jahit'],
            ['nama_pekerjaan' => 'Tukang Gigi'],
            ['nama_pekerjaan' => 'Penata Rias'],
            ['nama_pekerjaan' => 'Penata Busana'],
            ['nama_pekerjaan' => 'Penata Rambut'],
            ['nama_pekerjaan' => 'Mekanik'],
            ['nama_pekerjaan' => 'Seniman'],
            ['nama_pekerjaan' => 'Tabib'],
            ['nama_pekerjaan' => 'Paraji'],
            ['nama_pekerjaan' => 'Perancang Busana'],
            ['nama_pekerjaan' => 'Penterjemah'],
            ['nama_pekerjaan' => 'Imam Masjid'],
            ['nama_pekerjaan' => 'Pendeta'],
            ['nama_pekerjaan' => 'Pastor'],
            ['nama_pekerjaan' => 'Wartawan'],
            ['nama_pekerjaan' => 'Ustadz / Mubaligh'],
            ['nama_pekerjaan' => 'Juru Masak'],
            ['nama_pekerjaan' => 'Promotor Acara'],
            ['nama_pekerjaan' => 'Anggota DPR-RI'],
            ['nama_pekerjaan' => 'Anggota DPD'],
            ['nama_pekerjaan' => 'Anggota BPK'],
            ['nama_pekerjaan' => 'Presiden'],
            ['nama_pekerjaan' => 'Wakil Presiden'],
            ['nama_pekerjaan' => 'Anggota Mahkamah Konstitusi'],
            ['nama_pekerjaan' => 'Anggota Kabinet / Kementerian'],
            ['nama_pekerjaan' => 'Duta Besar'],
            ['nama_pekerjaan' => 'Gubernur'],
            ['nama_pekerjaan' => 'Wakil Gubernur'],
            ['nama_pekerjaan' => 'Bupati'],
            ['nama_pekerjaan' => 'Wakil Bupati'],
            ['nama_pekerjaan' => 'Walikota'],
            ['nama_pekerjaan' => 'Wakil Walikota'],
            ['nama_pekerjaan' => 'Anggota DPRD Provinsi'],
            ['nama_pekerjaan' => 'Anggota DPRD Kabupaten / Kota'],
            ['nama_pekerjaan' => 'Dosen'],
            ['nama_pekerjaan' => 'Guru'],
            ['nama_pekerjaan' => 'Pilot'],
            ['nama_pekerjaan' => 'Pengacara'],
            ['nama_pekerjaan' => 'Notaris'],
            ['nama_pekerjaan' => 'Arsitek'],
            ['nama_pekerjaan' => 'Akuntan'],
            ['nama_pekerjaan' => 'Konsultan'],
            ['nama_pekerjaan' => 'Dokter'],
            ['nama_pekerjaan' => 'Bidan'],
            ['nama_pekerjaan' => 'Perawat'],
            ['nama_pekerjaan' => 'Apoteker'],
            ['nama_pekerjaan' => 'Psikiater / Psikolog'],
            ['nama_pekerjaan' => 'Penyiar Televisi'],
            ['nama_pekerjaan' => 'Penyiar Radio'],
            ['nama_pekerjaan' => 'Pelaut'],
            ['nama_pekerjaan' => 'Peneliti'],
            ['nama_pekerjaan' => 'Sopir'],
            ['nama_pekerjaan' => 'Pialang'],
            ['nama_pekerjaan' => 'Paranormal'],
            ['nama_pekerjaan' => 'Pedagang'],
            ['nama_pekerjaan' => 'Perangkat Desa'],
            ['nama_pekerjaan' => 'Kepala Desa'],
            ['nama_pekerjaan' => 'Biarawati'],
            ['nama_pekerjaan' => 'Wiraswasta'],
        ];

        DB::table('pekerjaan')->insert($data);
    }
}
