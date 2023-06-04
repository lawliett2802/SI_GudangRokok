<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKategoriRokok;
use PDF;

class DataKategoriRokokController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $data_kategori_rokok = DataKategoriRokok::where('id_kategori_rokok','LIKE','%' . request ('search').'%')
            ->orWhere('nama_kategori_rokok','LIKE','%' . request ('search').'%')
            ->paginate(6);
        }
        else {
            $data_kategori_rokok = DataKategoriRokok::paginate(6);
        }
        return view('DataKategoriRokok.index', compact('data_kategori_rokok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataKategoriRokok.create');
    }

    public function insert(Request $request)
    {
        DataKategoriRokok::create($request->all());
        return redirect()->route('DataKategoriRokokIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_kategori_rokok)
    {
        $data_kategori_rokok = DataKategoriRokok::find($id_kategori_rokok);
        //dd($data_kategori_rokok);
        return view('DataKategoriRokok.edit', compact('data_kategori_rokok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_kategori_rokok)
    {
        $data_kategori_rokok = DataKategoriRokok::find($id_kategori_rokok);
        $data_kategori_rokok->update($request->all());
        return redirect()->route('DataKategoriRokokIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_kategori_rokok)
    {
        $data_kategori_rokok = DataKategoriRokok::find($id_kategori_rokok);
        $data_kategori_rokok->delete();
        return redirect()->route('DataKategoriRokokIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_kategori_rokok = DataKategoriRokok::all();
        view()->share('DataKategoriRokokIndex', $data_kategori_rokok);
        $pdf=PDF::loadview('DataKategoriRokok.printpdf',compact('data_kategori_rokok'));
        return $pdf->stream('DataKategoriRokok.pdf');
    } 
}
