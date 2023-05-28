<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama'
    ];
   public function pegawai(){
    return $this->hasMany(Pegawai::class); //membuat relasi antara jabatan dan pegawai
   }
}
