<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataOutletCabang;
use App\Models\DataGudangRokok;
use PDF;

class DataOutletCabangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search')) {
            $data_outlet_cabang = DataOutletCabang::where('id_outlet','LIKE','%' . request ('search').'%')
            ->orWhere('nama_outlet','LIKE','%' . request ('search').'%')
            ->orWhere('alamat_outlet','LIKE','%' . request ('search').'%')
            ->orWhereHas('fk_gudang', function ($query) {
                $query->where('nama_gudang_rokok', 'LIKE', '%' . request('search') . '%');
            })
            ->paginate(6);
        }
        else {
            $data_outlet_cabang = DataOutletCabang::paginate(6);
        }
        return view('DataOutletCabang.index', compact('data_outlet_cabang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_gudang_rokok = DataGudangRokok::all();
        return view('DataOutletCabang.create', compact('data_gudang_rokok'));
    }

    public function insert(Request $request)
    {
        DataOutletCabang::create($request->all());
        return redirect()->route('DataOutletCabangIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_outlet)
    {
        $data_outlet_cabang = DataOutletCabang::find($id_outlet);
        $data_gudang_rokok = DataGudangRokok::all();
        //dd($data_gudang_rokok);
        return view('DataOutletCabang.edit', compact('data_outlet_cabang', 'data_gudang_rokok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_outlet)
    {
        $data_outlet_cabang = DataOutletCabang::find($id_outlet);
        $data_outlet_cabang->update($request->all());
        return redirect()->route('DataOutletCabangIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_outlet)
    {
        $data_outlet_cabang = DataOutletCabang::find($id_outlet);
        $data_outlet_cabang->delete();
        return redirect()->route('DataOutletCabangIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_outlet_cabang = DataOutletCabang::all();
        view()->share('DataOutletCabangIndex', $data_outlet_cabang);
        $pdf=PDF::loadview('DataOutletCabang.printpdf',compact('data_outlet_cabang'));
        return $pdf->stream('DataOutletCabang.pdf');
    } 
}
