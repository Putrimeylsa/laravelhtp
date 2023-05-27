<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //disini adalah proses untuk seeder
        //atau pengisian data menggunakan sintaks php
        for ($i=0; $i < 10; $i++){
            DB::table('staff')->insert(
                [
                    'id' => rand(),
                    'nip' => ('s'),
                    'nama' => ('nama_'),
                    'gender' => ('L'),
                    'alamat' => ('alamat_'),
                    'email' => uniqid('@gmail.com'),
                    'foto' => ('foto_'),
                    'created_at' => new \DateTime,
                    'updated_at' => null,
                ]
            );
        }
    }
}
