<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataOutletCabang;
use App\Models\DataGudangRokok;
use App\Models\DataTruck;
use App\Models\DataSupir;
use App\Models\DataRute;
use App\Models\DataPengiriman;
use PDF;

class DataPengirimanController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $data_pengiriman = DataPengiriman::where('id_pengiriman','LIKE','%' . request ('search').'%')
            ->orWhere('tanggal_pengiriman','LIKE','%' . request ('search').'%')
            ->orWhereHas('fk_gudang', function ($query) {
                $query->where('nama_gudang_rokok', 'LIKE', '%' . request('search') . '%');
            })
            ->orWhereHas('fk_outlet', function ($query) {
                $query->where('nama_outlet', 'LIKE', '%' . request('search') . '%');
            })
            ->orWhere('nomor_polisi','LIKE','%' . request ('search').'%')
            ->orWhereHas('fk_truck', function ($query) {
                $query->where('merek_truck', 'LIKE', '%' . request('search') . '%');
            })
            ->orWhereHas('fk_supir', function ($query) {
                $query->where('nama_supir', 'LIKE', '%' . request('search') . '%');
            })
            ->orWhereHas('fk_rute', function ($query) {
                $query->where('nama_rute', 'LIKE', '%' . request('search') . '%');
            })
            ->paginate(6);
        }
        else {
            $data_pengiriman = DataPengiriman::paginate(6);
        }
        return view('DataPengiriman.index', compact('data_pengiriman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_gudang_rokok = DataGudangRokok::all();
        $data_outlet_cabang = DataOutletCabang::all();
        $data_truck = DataTruck::all();
        $data_supir = DataSupir::all();
        $data_rute = DataRute::all();
        return view('DataPengiriman.create', compact('data_gudang_rokok', 'data_outlet_cabang', 'data_truck', 'data_supir', 'data_rute'));
    }

    public function insert(Request $request)
    {
        DataPengiriman::create($request->all());
        return redirect()->route('DataPengirimanIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_pengiriman)
    {
        $data_pengiriman = DataPengiriman::find($id_pengiriman);
        $data_gudang_rokok = DataGudangRokok::all();
        $data_outlet_cabang = DataOutletCabang::all();
        $data_truck = DataTruck::all();
        $data_supir = DataSupir::all();
        $data_rute = DataRute::all();
        return view('DataPengiriman.edit', compact('data_pengiriman', 'data_gudang_rokok', 'data_outlet_cabang', 'data_truck', 'data_supir', 'data_rute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pengiriman)
    {
        $data_pengiriman = DataPengiriman::find($id_pengiriman);
        $data_pengiriman->update($request->all());
        return redirect()->route('DataPengirimanIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_pengiriman)
    {
        $data_pengiriman = DataPengiriman::find($id_pengiriman);
        $data_pengiriman->delete();
        return redirect()->route('DataPengirimanIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_pengiriman = DataPengiriman::all();
        view()->share('DataPengirimanIndex', $data_pengiriman);
        $pdf=PDF::loadview('DataPengiriman.printpdf',compact('data_pengiriman'));
        return $pdf->setPaper('a4', 'landscape')->stream('DataPengiriman.pdf');
    } 
}
