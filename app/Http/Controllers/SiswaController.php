<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //ini adalah tempat edit fungsi dan perintah
    public function dataSiswa(){
        $siswa1 = 'Fawwaz'; $asal1 = 'Jakarta';
        $siswa2 = 'Inaya'; $asal2 = 'Depok';
        return view ('data_siswa',
        compact('siswa1','siswa2','asal1','asal2')
    );
    }
}
