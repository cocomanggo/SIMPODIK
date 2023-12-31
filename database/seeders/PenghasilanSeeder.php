<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenghasilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penghasilan' => '< Rp. 1.000.000', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['penghasilan' => 'Rp. 1.000.000 - Rp. 2.000.000', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['penghasilan' => 'Rp. 2.000.000 - Rp. 3.000.000', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['penghasilan' => 'Rp. 3.000.000 - Rp. 4.000.000', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['penghasilan' => 'Rp. 4.000.000 - Rp. 5.000.000', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['penghasilan' => '> Rp. 5.000.000', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
        ];

        DB::table('penghasilan')->insert($data);
    }
}
