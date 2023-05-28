<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; //panggil controller yg ada dibuat sebelumnya
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DivisiController;

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
    return view('welcome');
});

Route::get('/salam', function() {
    return 'Selamat pagi';
}); // ini adalah routing untuk pemanggilan dirinya sendiri

Route::get('/ucapan', function() {
    return view('ucapan'); //ini adalah routing yang mengarahkan ke view yang ada di folder
    //resources/view
});

Route::get('/nilai', function(){
    return view('nilai');
}); //arahkan return nilai ke file nilai yang ada di view

Route::get('/daftar_nilai', function(){
    return view('daftar_nilai');
});

//mengarahkan routing ke controller
Route::get('/siswa', [SiswaController::class, 'dataSiswa']);

//prefix atau group untuk mengelompokkan routing
Route::prefix('admin')->group(function(){
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
Route::get('/staff', [StaffController::class, 'index']);

//ini adalah route untuk pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);

//ini adalah route untuk divisi
Route::get('/divisi', [DivisiController::class, 'index']);
Route::get('/divisi/create', [DivisiController::class, 'create']);
Route::post('/divisi/store', [DivisiController::class, 'store']);
Route::get('/divisi/edit/{id}', [DivisiController::class, 'edit']);
Route::post('/divisi/update', [DivisiController::class, 'update']);
});
//nantinya pegawai tbst mengambil pelatihan dan pada table pelatihan bertambah