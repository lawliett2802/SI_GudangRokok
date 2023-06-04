<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKategoriRokok;
use App\Models\DataRokok;
use PDF;

class DataRokokController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $data_rokok = DataRokok::where('kode_rokok','LIKE','%' . request ('search').'%')
            ->orWhere('nama_rokok','LIKE','%' . request ('search').'%')
            ->orWhere('jenis_rokok','LIKE','%' . request ('search').'%')
            ->orWhere('harga_rokok','LIKE','%' . request ('search').'%')
            ->orWhere('stock_rokok','LIKE','%' . request ('search').'%')
            ->orWhere('id_kategori_rokok','LIKE','%' . request ('search').'%')
            ->orWhereHas('fk_kategori_rokok', function ($query) {
                $query->where('nama_kategori_rokok', 'LIKE', '%' . request('search') . '%');
            })
            ->paginate(6);
        }
        else {
            $data_rokok = DataRokok::paginate(6);
        }
        return view('DataRokok.index', compact('data_rokok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_rokok = DataRokok::all();
        $data_kategori_rokok = DataKategoriRokok::all();
        return view('DataRokok.create', compact('data_rokok', 'data_kategori_rokok'));
    }

    public function insert(Request $request)
    {
        DataRokok::create($request->all());
        return redirect()->route('DataRokokIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kode_rokok)
    {
        $data_rokok = DataRokok::find($kode_rokok);
        $data_kategori_rokok = DataKategoriRokok::all();
        //dd($data_rokok);
        return view('DataRokok.edit', compact('data_rokok', 'data_kategori_rokok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode_rokok)
    {
        $data_rokok = DataRokok::find($kode_rokok);
        $data_rokok->update($request->all());
        return redirect()->route('DataRokokIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $kode_rokok)
    {
        $data_rokok = DataRokok::find($kode_rokok);
        $data_rokok->delete();
        return redirect()->route('DataRokokIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_rokok = DataRokok::all();
        view()->share('DataRokokIndex', $data_rokok);
        $pdf=PDF::loadview('DataRokok.printpdf',compact('data_rokok'));
        return $pdf->stream('DataRokok.pdf');
    }
}
