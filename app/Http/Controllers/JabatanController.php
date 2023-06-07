<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use DB;
use RealRashid\SweetAlert\Facades\Alert;



class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jabatan = DB::table('jabatan')->get();
        return view('admin.jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        DB::table('jabatan')->insert([
            'nama' => $request->nama,
        ]);

        Alert::success('Jabatan', 'Berhasil Menambahkan jabatan');
        return redirect('admin/jabatan');
    
  
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
    public function edit($id)
    {
        //
        $jabatan = DB::table('jabatan')->where('id', $id)->get();

        return view ('admin.jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        DB::table('jabatan')->where('id', $request->id)->update([
            'nama' => $request->nama,
        ]);

        Alert::info('Jabatan', 'Berhasil Mengedit jabatan');
        return redirect('admin/jabatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}