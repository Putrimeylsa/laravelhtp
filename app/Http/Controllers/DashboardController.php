<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;
use App\Models\Divisi;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ini diarahkan ke view dashboard
        $pegawai = Pegawai::count();
        $divisi = Divisi::count();
        $jabatan = Jabatan::count();
        $ar_kekayaan = DB::table('pegawai')->select('nama', 'kekayaan')->get();
        $ar_gender = DB::table('pegawai')
            ->selectRaw('gender, count(gender) as jumlah')
            ->groupBy('gender')
            ->get();

        return view('admin.dashboard', compact('pegawai', 'divisi', 'jabatan', 'ar_kekayaan', 'ar_gender'));
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
