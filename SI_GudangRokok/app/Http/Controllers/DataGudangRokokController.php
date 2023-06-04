<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataGudangRokok;
use PDF;

class DataGudangRokokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search')) {
            $data_gudang_rokok = DataGudangRokok::where('id_gudang_rokok','LIKE','%' . request ('search').'%')
            ->orWhere('nama_gudang_rokok','LIKE','%' . request ('search').'%')
            ->orWhere('alamat_gudang_rokok','LIKE','%' . request ('search').'%')
            ->orWhere('kapasitas_gudang','LIKE','%' . request ('search').'%')
            ->paginate(6);
        }
        else {
            $data_gudang_rokok = DataGudangRokok::paginate(6);
        }
        return view('DataGudangRokok.index', compact('data_gudang_rokok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataGudangRokok.create');
    }

    public function insert(Request $request)
    {
        DataGudangRokok::create($request->all());
        return redirect()->route('DataGudangRokokIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_gudang_rokok)
    {
        $data_gudang_rokok = DataGudangRokok::find($id_gudang_rokok);
        //dd($data_gudang_rokok);
        return view('DataGudangRokok.edit', compact('data_gudang_rokok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_gudang_rokok)
    {
        $data_gudang_rokok = DataGudangRokok::find($id_gudang_rokok);
        $data_gudang_rokok->update($request->all());
        return redirect()->route('DataGudangRokokIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_gudang_rokok)
    {
        $data_gudang_rokok = DataGudangRokok::find($id_gudang_rokok);
        $data_gudang_rokok->delete();
        return redirect()->route('DataGudangRokokIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_gudang_rokok = DataGudangRokok::all();
        view()->share('DataGudangRokokIndex', $data_gudang_rokok);
        $pdf=PDF::loadview('DataGudangRokok.printpdf',compact('data_gudang_rokok'));
        return $pdf->stream('DataGudangRokok.pdf');
    } 
}
