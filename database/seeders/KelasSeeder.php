<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_kelas' => 'X', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_kelas' => 'XI', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_kelas' => 'XII', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
        ];

        DB::table('kelas')->insert($data);
    }
}
