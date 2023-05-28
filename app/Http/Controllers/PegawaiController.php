<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Divisi;
use App\Models\Jabatan;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //arahkan ke view
        $pegawai = Pegawai::join('divisi', 'pegawai.divisi_id', '=', 'divisi.id')
        ->join('jabatan', 'pegawai.jabatan_id', '=', 'jabatan.id')
        ->select('pegawai.*', 'divisi.nama as divisi', 'jabatan.nama as jabatan')
        ->get();
        return view ('admin.pegawai.index', compact('pegawai')); //file index.pegawai ada di folder admin terus di dlem folder pegawai 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
