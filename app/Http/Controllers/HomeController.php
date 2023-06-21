<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Divisi;
use App\Models\Jabatan;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $pegawai = Pegawai::count();
        // $divisi = Divisi::count();
        // $jabatan = Jabatan::count();
        // $ar_kekayaan = DB::table('pegawai')->select('nama', 'kekayaan')->get();
        // $ar_gender = DB::table('pegawai')
        //     ->selectRaw('gender, count(gender) as jumlah')
        //     ->groupBy('gender')
        //     ->get();
        // return view('admin.dashboard', compact('pegawai', 'divisi', 'jabatan', 'ar_kekayaan', 'ar_gender'));
        // hanya redirect
        // return redirect('admin/dashboard');
        //ini adalah redirect ketika dia dibohkan masuk ke halaman admin
        if(auth()->user()->role == 'admin' || auth()->user()->role == 'manager' || auth()->user()->role == 'staff') {
            return redirect('admin/dashboard');
        }else {
            return redirect('/after_register');
        }
    }
}
