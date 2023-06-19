<?php

namespace App\Imports;

use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\ToModel;

class PegawaiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pegawai([
            'nip'        => $row[1],
            'nama'       => $row[2],
            'gender'     => $row[3],
            'jabatan_id' => $row[4],
            'divisi_id'  => $row[5],
            'tmp_lahir'  => $row[6],
            'tgl_lahir'  => $row[7],
            'kekayaan'   => $row[8],
            'alamat'     => $row[9],
            //
        ]);
    }
}
