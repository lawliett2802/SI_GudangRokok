<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPengiriman;
use App\Models\DataJadwalPengiriman;
use PDF;

class DataJadwalPengirimanController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $data_jadwal_pengiriman = DataJadwalPengiriman::where('id_jadwal','LIKE','%' . request ('search').'%')
            ->orWhere('hari_pengiriman','LIKE','%' . request ('search').'%')
            ->orWhere('jam_pengiriman','LIKE','%' . request ('search').'%')
            ->orWhere('id_pengiriman','LIKE','%' . request ('search').'%')
            ->paginate(6);
        }
        else {
            $data_jadwal_pengiriman = DataJadwalPengiriman::paginate(6);
        }
        return view('DataJadwalPengiriman.index', compact('data_jadwal_pengiriman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_pengiriman = DataPengiriman::all();
        return view('DataJadwalPengiriman.create', compact('data_pengiriman'));
    }

    public function insert(Request $request)
    {
        DataJadwalPengiriman::create($request->all());
        return redirect()->route('DataJadwalPengirimanIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_jadwal)
    {
        $data_jadwal_pengiriman = DataJadwalPengiriman::find($id_jadwal);
        $data_pengiriman = DataPengiriman::all();
        //dd($data_jadwal_pengiriman);
        return view('DataJadwalPengiriman.edit', compact('data_jadwal_pengiriman', 'data_pengiriman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_jadwal)
    {
        $data_jadwal_pengiriman = DataJadwalPengiriman::find($id_jadwal);
        $data_jadwal_pengiriman->update($request->all());
        return redirect()->route('DataJadwalPengirimanIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_jadwal)
    {
        $data_jadwal_pengiriman = DataJadwalPengiriman::find($id_jadwal);
        $data_jadwal_pengiriman->delete();
        return redirect()->route('DataJadwalPengirimanIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_jadwal_pengiriman = DataJadwalPengiriman::all();
        view()->share('DataJadwalPengirimanIndex', $data_jadwal_pengiriman);
        $pdf=PDF::loadview('DataJadwalPengiriman.printpdf',compact('data_jadwal_pengiriman'));
        return $pdf->stream('DataJadwalPengiriman.pdf');
    } 
}
