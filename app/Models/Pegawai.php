<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nip', 'nama', 'jabatan_id', 'divisi_id', 'gender',
        'tmp_lahir', 'tgl_lahir', 'kekayaan', 'alamat', 'foto'
    ];
    public function divisi(){
        return $this->belongsTo(Divisi::class);
    }
    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }
}
