<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Staff;
use Illuminate\Http\Request;


class StaffController extends Controller
{
    //
    public function index(){
        $ar_staff = DB::table('staff')->get(); //query builder
        //$ar_staff = Staff::all(); //query eloquent
        return view('admin.staff.index', compact('ar_staff'));
    }
}
