<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;

class UsersController extends Controller
{
    public function index(){

        $passingData = array("title" => "Master Siswa","breadcrumb" => "Data Siswa",);
        // dd($passingData);


        return view('content.users', compact('passingData'));
    }

    public function get_provinsi(){
        $resProvinsi = Http::get('https://cocomanggo.github.io/api-wilayah-indonesia/api/provinces.json');
        return $resProvinsi->json();
    }

    public function get_kabkot($id){
        $resKabkot = Http::get('https://cocomanggo.github.io/api-wilayah-indonesia/api/regencies/'.$id.'.json');
        return $resKabkot->json();
    }

    public function get_kecamatan($id){
        // dd($id);
        $resKecamatan = Http::get('https://cocomanggo.github.io/api-wilayah-indonesia/api/districts/'.$id.'.json');
        return $resKecamatan->json();
    }

    public function get_keldes($id){
        // dd($id);
        $resKeldes = Http::get('https://cocomanggo.github.io/api-wilayah-indonesia/api/villages/'.$id.'.json');
        return $resKeldes->json();
    }

    public function get_penghasilan(){
        return DB::table('penghasilan')->get();
    }

    public function get_pekerjaan(){
        return DB::table('pekerjaan')->get();
    }

    public function getAllSiswa(){
        $query = DB::table('siswa')->select('id', 'nik', 'nis', 'nama', 'jk', 'email', 'tlp_siswa', 'kelas');
        return  DataTables::of($query)
                ->addColumn('point', function($data){
                    return '<strong> - </strong>';
                })
                ->addColumn('Aksi', function($data){
                    return '<button type="button" class="btn btn-outline-primary" style="padding:15px 10px" onclick="viewDataSiswa('.$data->id.')">
                    <i class="bx bx-user me-0"></i>
                </button>


    <button type="button" class="btn btn-outline-primary" style="padding:15px 10px" onclick="viewDataSiswa('.$data->id.')">
                    <i class="bx bx-user me-0"></i>
                </button>


    <button type="button" class="btn btn-outline-primary" style="padding:15px 10px" onclick="viewDataSiswa('.$data->id.')">
                    <i class="bx bx-user me-0"></i>
                </button>';
                })
                ->rawColumns(['Aksi', 'point'])
                ->make(true);
    }

    public function saveNewSiswa(Request $request){
        // dd($request->nik);
       $this->validate($request, [
            'nik' => 'required|min_digits:16|max_digits:16|numeric|unique:siswa,nik',
            // 'nis' => 'unique:siswa,nis',
            'nama' => 'required|max:255',
            'provinsi' => 'required|numeric',
            'kabkot' => 'required|numeric',
            'kecamatan' => 'required|numeric',
            'keldes' => 'required|numeric',
            'alamat' => 'required|max:255',
            'sklhAsal' => 'required',
            'ibukandung' => 'required',
            'krjIbu' => 'required|numeric',
            'ayahkandung' => 'required',
            'krjAyh' => 'required|numeric',
            'penghasilan' => 'required|numeric',
            'wali' => 'required|',
            'tlpWali' => 'required|numeric',
            'thnMsk' => 'required|numeric',
            'tlpSiswa' => 'numeric|unique:siswa,tlp_siswa',
            'emailSiswa', 'email|unique:siswa,email',
            'jk' => 'required',
       ], [
            'nik.required' => 'Kolom NIK harus terisi',
            'nik.min_digits' => 'NIK harus :min angka',
            'nik.max_digits' => 'NIK harus :max angka',
            'nik.unique' => 'NIK sudah terdaftar',
            // 'nik.numeric' => 'NIK hanya angka',
            // 'nis.unique' => 'NIS sudah terdaftar',
            'nis.numeric' => 'NIS hanya angka',
            'nama.required' => 'Nama Lengkap harus terisi',
            'provinsi.required' => 'Harap pilih provinsi',
            'kabkot.required' => 'Harap pilih kab / kota',
            'keldes.required' => 'Harap pilih kel / desa',
            'alamat.required' => 'Harap isi alamat',
            'sklhAsal.required' => 'Harap isi sekolah asal',
            'ibukandung.required' => 'Harap isi nama ibu kandung',
            'krjIbu.required' => 'Harap pilih pekerjaan ibu kandung',
            'ayahkandung.required' => 'Harap isi nama ayah kandung',
            'krjAyh.required' => 'Harap pilih pekerjaan ayah kandung ',
            'penghasilan.required' => 'Harap pilih penghasilan',
            'wali.required' => 'Harap isi nama wali siswa',
            'tlpWali.required' => 'Harap isi telpon wali siswa',
            'tlpWali.numeric' => 'Telepon hanya angka',
            'thnMsk.required' => 'Harap isi tahun masuk siswa',
            'tkpSiswa.numeric' => 'Telpon hanya berupa angka',
            'tlpSiswa.unique' => 'Nomor telepon sudah digunakan',
            'emailSiswa.email' => 'Harap Isiskan Email dengan benar',
            'emailSiswa.unique' => 'Email sudah digunakan',
            'jk.required' => 'Harap pilih jenis kelamin'
       ]);

       $data = [
            'nik' => $request->nik,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'email' => $request->email,
            'tlp_siswa' => $request->tlpSiswa,
            'jk' => $request->jk,
            'provinsi' => $request->provinsiTxt,
            'kabkot' => $request->kabkotTxt,
            'kec' => $request->kecamatanTxt,
            'keldes' => $request->keldesTxt,
            'alamat' => $request->alamat,
            'ayah' => $request->ayahkandung,
            'ibu' => $request->ibukandung,
            'wali' => $request->wali,
            'tlp_wali' => $request->tlpWali,
            'krj_ayh' => $request->krjAyh,
            'krj_ibu' => $request->krjIbu,
            'penghasilan_ortu' => $request->penghasilan,
            'thn_msk' => $request->thnMsk,
            'sklh_asal' => $request->sklhAsal,
            'email' => $request->emailSiswa,
            'created_at' => date("Y-m-d h:i:s", time()),
            'updated_at' => date("Y-m-d h:i:s", time()),
            // 'kelas'
            // 'subject'
       ];

       $saveDataSiswa = DB::table('siswa')->insert($data);
       return $saveDataSiswa;
    }


}
