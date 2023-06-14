<?php

namespace App\Exports;

use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PegawaiExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Pegawai::all();
        $ar_pegawai = Pegawai::join('jabatan', 'jabatan.id', '=', 'pegawai.jabatan_id')
        ->join('divisi', 'divisi.id', '=', 'pegawai.divisi_id')
        ->select('pegawai.nip', 'pegawai.nama', 'pegawai.gender', 'jabatan.nama as jabatan', 'divisi.nama as divisi',
        'pegawai.tmp_lahir', 'pegawai.tgl_lahir', 'kekayaan', 'alamat')
        ->get();
        return $ar_pegawai;
    }
    public function headings():array
    {
        return ["NIP", "Nama", "Jenis Kelamin", "Jabatan", "Divisi","Tempat Lahir", "Tanggal Lahir", "Kekayaan", "Alamat"];
    }
}
