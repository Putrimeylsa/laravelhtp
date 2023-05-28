<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = 'divisi'; //ini pemanggilan nama table
    protected $primaryKey = 'id'; //ini pemanggilan id atau primary keynya
    protected $fillable = ['nama']; //ini pemanggilan kolom

    public function pegawai (){
        return $this->hasMany(Pegawai::class); //memanggil relasi antara tabel divisi dengan table pegawai        )
    }
}
