<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_subject' => '1', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_subject' => '2', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_subject' => '3', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_subject' => 'IPA-1', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_subject' => 'IPA-2', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_subject' => 'IPA-3', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_subject' => 'IPS-1', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_subject' => 'IPS-2', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
            ['nama_subject' => 'IPS-3', 'created_at' => date("Y-m-d h:i:s", time()), 'updated_at' => date("Y-m-d h:i:s", time())],
        ];

        DB::table('subject')->insert($data);
    }
}
