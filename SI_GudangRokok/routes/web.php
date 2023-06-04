<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DataGudangRokokController;
use App\Http\Controllers\DataOutletCabangController;
use App\Http\Controllers\DataTruckController;
use App\Http\Controllers\DataRuteController;
use App\Http\Controllers\DataSupirController;
use App\Http\Controllers\DataPengirimanController;
use App\Http\Controllers\DataJadwalPengirimanController;
use App\Http\Controllers\DataRokokController;
use App\Http\Controllers\DataKategoriRokokController;
use App\Http\Controllers\DataStockRokokController;
use App\Models\DataGudangRokok;
use App\Models\DataOutletCabang;
use App\Models\DataTruck;
use App\Models\DataRute;
use App\Models\DataSupir;
use App\Models\DataPengiriman;
use App\Models\DataJadwalPengiriman;
use App\Models\DataRokok;
use App\Models\DataKategoriRokok;
use App\Models\DataStockRokok;

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

// Route::get('/'=='/dashboard', function () {
//     return view('template');
// });

//Data Gudang Rokok
Route::get('/dashboard', [Dashboard::class, 'index']);
Route::get('/DataGudangRokok', [DataGudangRokokController::class, 'index'])->name('DataGudangRokokIndex');
Route::get('/DataGudangRokokCreate', [DataGudangRokokController::class, 'create'])->name('DataGudangRokokCreate');
Route::post('/DataGudangRokokInsert', [DataGudangRokokController::class, 'insert'])->name('DataGudangRokokInsert');
Route::get('/DataGudangRokokEdit/{id_gudang_rokok}', [DataGudangRokokController::class, 'edit'])->name('DataGudangRokokEdit');
Route::post('/DataGudangRokokUpdate/{id_gudang_rokok}', [DataGudangRokokController::class, 'update'])->name('DataGudangRokokUpdate');
Route::get('/DataGudangRokokDelete/{id_gudang_rokok}', [DataGudangRokokController::class, 'delete'])->name('DataGudangRokokDelete');
Route::get('/DataGudangRokokPDF', [DataGudangRokokController::class, 'exportPDF'])->name('DataGudangRokokPDF');

//Data Outlet Cabang
Route::get('/DataOutletCabang', [DataOutletCabangController::class, 'index'])->name('DataOutletCabangIndex');
Route::get('/DataOutletCabangCreate', [DataOutletCabangController::class, 'create'])->name('DataOutletCabangCreate');
Route::post('/DataOutletCabangInsert', [DataOutletCabangController::class, 'insert'])->name('DataOutletCabangInsert');
Route::get('/DataOutletCabangEdit/{id_outlet}', [DataOutletCabangController::class, 'edit'])->name('DataOutletCabangEdit');
Route::post('/DataOutletCabangUpdate/{id_outlet}', [DataOutletCabangController::class, 'update'])->name('DataOutletCabangUpdate');
Route::get('/DataOutletCabangDelete/{id_outlet}', [DataOutletCabangController::class, 'delete'])->name('DataOutletCabangDelete');
Route::get('/DataOutletCabangPDF', [DataOutletCabangController::class, 'exportPDF'])->name('DataOutletCabangPDF');

//Data Truck
Route::get('/DataTruck', [DataTruckController::class, 'index'])->name('DataTruckIndex');
Route::get('/DataTruckCreate', [DataTruckController::class, 'create'])->name('DataTruckCreate');
Route::post('/DataTruckInsert', [DataTruckController::class, 'insert'])->name('DataTruckInsert');
Route::get('/DataTruckEdit/{nomor_polisi}', [DataTruckController::class, 'edit'])->name('DataTruckEdit');
Route::post('/DataTruckUpdate/{nomor_polisi}', [DataTruckController::class, 'update'])->name('DataTruckUpdate');
Route::get('/DataTruckDelete/{nomor_polisi}', [DataTruckController::class, 'delete'])->name('DataTruckDelete');
Route::get('/DataTruckPDF', [DataTruckController::class, 'exportPDF'])->name('DataTruckPDF');

//Data Rute
Route::get('/DataRute', [DataRuteController::class, 'index'])->name('DataRuteIndex');
Route::get('/DataRuteCreate', [DataRuteController::class, 'create'])->name('DataRuteCreate');
Route::post('/DataRuteInsert', [DataRuteController::class, 'insert'])->name('DataRuteInsert');
Route::get('/DataRuteEdit/{id_rute}', [DataRuteController::class, 'edit'])->name('DataRuteEdit');
Route::post('/DataRuteUpdate/{id_rute}', [DataRuteController::class, 'update'])->name('DataRuteUpdate');
Route::get('/DataRuteDelete/{id_rute}', [DataRuteController::class, 'delete'])->name('DataRuteDelete');
Route::get('/DataRutePDF', [DataRuteController::class, 'exportPDF'])->name('DataRutePDF');

//Data Supir
Route::get('/DataSupir', [DataSupirController::class, 'index'])->name('DataSupirIndex');
Route::get('/DataSupirCreate', [DataSupirController::class, 'create'])->name('DataSupirCreate');
Route::post('/DataSupirInsert', [DataSupirController::class, 'insert'])->name('DataSupirInsert');
Route::get('/DataSupirEdit/{id_supir}', [DataSupirController::class, 'edit'])->name('DataSupirEdit');
Route::post('/DataSupirUpdate/{id_supir}', [DataSupirController::class, 'update'])->name('DataSupirUpdate');
Route::get('/DataSupirDelete/{id_supir}', [DataSupirController::class, 'delete'])->name('DataSupirDelete');
Route::get('/DataSupirPDF', [DataSupirController::class, 'exportPDF'])->name('DataSupirPDF');

//Data Pengiriman
Route::get('/DataPengiriman', [DataPengirimanController::class, 'index'])->name('DataPengirimanIndex');
Route::get('/DataPengirimanCreate', [DataPengirimanController::class, 'create'])->name('DataPengirimanCreate');
Route::post('/DataPengirimanInsert', [DataPengirimanController::class, 'insert'])->name('DataPengirimanInsert');
Route::get('/DataPengirimanEdit/{id_pengiriman}', [DataPengirimanController::class, 'edit'])->name('DataPengirimanEdit');
Route::post('/DataPengirimanUpdate/{id_pengiriman}', [DataPengirimanController::class, 'update'])->name('DataPengirimanUpdate');
Route::get('/DataPengirimanDelete/{id_pengiriman}', [DataPengirimanController::class, 'delete'])->name('DataPengirimanDelete');
Route::get('/DataPengirimanPDF', [DataPengirimanController::class, 'exportPDF'])->name('DataPengirimanPDF');

//Data Jadwal
Route::get('/DataJadwalPengiriman', [DataJadwalPengirimanController::class, 'index'])->name('DataJadwalPengirimanIndex');
Route::get('/DataJadwalPengirimanCreate', [DataJadwalPengirimanController::class, 'create'])->name('DataJadwalPengirimanCreate');
Route::post('/DataJadwalPengirimanInsert', [DataJadwalPengirimanController::class, 'insert'])->name('DataJadwalPengirimanInsert');
Route::get('/DataJadwalPengirimanEdit/{id_jadwal}', [DataJadwalPengirimanController::class, 'edit'])->name('DataJadwalPengirimanEdit');
Route::post('/DataJadwalPengirimanUpdate/{id_jadwal}', [DataJadwalPengirimanController::class, 'update'])->name('DataJadwalPengirimanUpdate');
Route::get('/DataJadwalPengirimanDelete/{id_jadwal}', [DataJadwalPengirimanController::class, 'delete'])->name('DataJadwalPengirimanDelete');
Route::get('/DataJadwalPengirimanPDF', [DataJadwalPengirimanController::class, 'exportPDF'])->name('DataJadwalPengirimanPDF');

//Data Rokok
Route::get('/DataRokok', [DataRokokController::class, 'index'])->name('DataRokokIndex');
Route::get('/DataRokokCreate', [DataRokokController::class, 'create'])->name('DataRokokCreate');
Route::post('/DataRokokInsert', [DataRokokController::class, 'insert'])->name('DataRokokInsert');
Route::get('/DataRokokEdit/{kode_rokok}', [DataRokokController::class, 'edit'])->name('DataRokokEdit');
Route::post('/DataRokokUpdate/{kode_rokok}', [DataRokokController::class, 'update'])->name('DataRokokUpdate');
Route::get('/DataRokokDelete/{kode_rokok}', [DataRokokController::class, 'delete'])->name('DataRokokDelete');
Route::get('/DataRokokPDF', [DataRokokController::class, 'exportPDF'])->name('DataRokokPDF');

//Data Kategori
Route::get('/DataKategoriRokok', [DataKategoriRokokController::class, 'index'])->name('DataKategoriRokokIndex');
Route::get('/DataKategoriRokokCreate', [DataKategoriRokokController::class, 'create'])->name('DataKategoriRokokCreate');
Route::post('/DataKategoriRokokInsert', [DataKategoriRokokController::class, 'insert'])->name('DataKategoriRokokInsert');
Route::get('/DataKategoriRokokEdit/{id_kategori_rokok}', [DataKategoriRokokController::class, 'edit'])->name('DataKategoriRokokEdit');
Route::post('/DataKategoriRokokUpdate/{id_kategori_rokok}', [DataKategoriRokokController::class, 'update'])->name('DataKategoriRokokUpdate');
Route::get('/DataKategoriRokokDelete/{id_kategori_rokok}', [DataKategoriRokokController::class, 'delete'])->name('DataKategoriRokokDelete');
Route::get('/DataKategoriRokokPDF', [DataKategoriRokokController::class, 'exportPDF'])->name('DataKategoriRokokPDF');

//Data Stock Rokok
Route::get('/DataStockRokok', [DataStockRokokController::class, 'index'])->name('DataStockRokokIndex');
Route::get('/DataStockRokokCreate', [DataStockRokokController::class, 'create'])->name('DataStockRokokCreate');
Route::post('/DataStockRokokInsert', [DataStockRokokController::class, 'insert'])->name('DataStockRokokInsert');
Route::get('/DataStockRokokEdit/{kode_rokok}', [DataStockRokokController::class, 'edit'])->name('DataStockRokokEdit');
Route::post('/DataStockRokokUpdate/{kode_rokok}', [DataStockRokokController::class, 'update'])->name('DataStockRokokUpdate');
Route::get('/DataStockRokokDelete/{kode_rokok}', [DataStockRokokController::class, 'delete'])->name('DataStockRokokDelete');
Route::get('/DataStockRokokPDF', [DataStockRokokController::class, 'exportPDF'])->name('DataStockRokokPDF');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');