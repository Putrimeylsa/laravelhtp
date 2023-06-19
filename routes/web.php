<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; //panggil controller yang ada dibuat sebelumnya
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    Alert::success('Selamat Datang');
    return view('welcome');
});
Route::get ('/salam', function(){
    return "Selamat pagi";
}); // ini adalah routing untuk pemanggilan dirinya sendiri
Route::get('/ucapan', function(){
    return view('ucapan'); //ini adalah routing yang mengarahkan ke view yang ada di folder 
    //resources/views
});
Route::get('/nilai', function(){
    return view('nilai');
}); //arahkan return nilai ke file nilai yang ada di view 
Route::get('/daftar_nilai', function(){
    return view('daftar_nilai');
});
//mengarahkan routing ke controller
Route::get('/siswa', [SiswaController::class, 'dataSiswa']);
//mengarahkan ke controller dashboardController

//prefix atau group
Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->name('admin.')->group(function(){
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
Route::get('/staff', [StaffController::class, 'index']);

//ini adalah route untuk pegawai
Route::get('/pegawai',[PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/show/{id}', [PegawaiController::class, 'show']);
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);
Route::get('generate-pdf', [PegawaiController::class, 'generatePDF']);
Route::get('/pegawai/pegawaiPDF', [PegawaiController::class, 'pegawaiPDF']);
Route::get('generate-pdf', [PegawaiController::class, 'generatePDF']);
Route::get('/pegawai/pegawaiPDF', [PegawaiController::class, 'pegawaiPDF']);
Route::get('/pegawai/exportexcel/', [PegawaiController::class, 'exportExcel']);
Route::post('/pegawai/importExcel', [PegawaiController::class, 'importExcel']);

//ini adalah route untuk divisi
Route::get('/divisi', [DivisiController::class, 'index']);
Route::get('/divisi/create', [DivisiController::class, 'create']);
Route::post('/divisi/store', [DivisiController::class, 'store']);
Route::get('/divisi/edit/{id}', [DivisiController::class, 'edit']);
Route::post('/divisi/update', [DivisiController::class, 'update']);
Route::get('/divisi/show/{id}', [DivisiController::class, 'show']);
Route::get('/divisi/delete/{id}', [DivisiController::class, 'destroy']);


//ini adalah routing untuk jabatan
Route::get('/jabatan', [JabatanController::class, 'index']);
Route::get('/jabatan/create', [JabatanController::class, 'create']);
Route::post('/jabatan/store', [JabatanController::class, 'store']);
Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit']);
Route::post('/jabatan/update', [JabatanController::class, 'update']);


//ini adalah routing untuk dashboard
// ini adalah route untuk User
Route::get('/user', [UserController::class, 'index']);

});
});
//nantinya pegawai tersebut mengambil pelatihan dan pada table pelatihan bertambah
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
