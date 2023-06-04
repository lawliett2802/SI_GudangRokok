<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataRokok;
use App\Models\DataGudangRokok;
use App\Models\DataStockRokok;
use PDF;

class DataStockRokokController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $data_stock_rokok = DataStockRokok::where('id_stock','LIKE','%' . request ('search').'%')
            ->orWhere('jumlah_stock','LIKE','%' . request ('search').'%')
            ->orWhereHas('fk_gudang_rokok', function ($query) {
                $query->where('nama_gudang_rokok', 'LIKE', '%' . request('search') . '%');
            })
            ->orWhereHas('fk_rokok', function ($query) {
                $query->where('nama_rokok', 'LIKE', '%' . request('search') . '%');
            })
            ->paginate(6);
        }
        else {
            $data_stock_rokok = DataStockRokok::paginate(6);
        }
        return view('DataStockRokok.index', compact('data_stock_rokok'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_gudang_rokok = DataGudangRokok::all();
        $data_rokok = DataRokok::all();
        return view('DataStockRokok.create', compact('data_gudang_rokok', 'data_rokok'));
    }

    public function insert(Request $request)
    {
        DataStockRokok::create($request->all());
        return redirect()->route('DataStockRokokIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_stock)
    {
        $data_stock_rokok = DataStockRokok::find($id_stock);
        $data_gudang_rokok = DataGudangRokok::all();
        $data_rokok = DataRokok::all();
        //dd($data_gudang_rokok);
        return view('DataStockRokok.edit', compact('data_stock_rokok','data_gudang_rokok', 'data_rokok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_stock)
    {
        $data_stock_rokok = DataStockRokok::find($id_stock);
        $data_stock_rokok->update($request->all());
        return redirect()->route('DataStockRokokIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_stock)
    {
        $data_stock_rokok = DataStockRokok::find($id_stock);
        $data_stock_rokok->delete();
        return redirect()->route('DataStockRokokIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_stock_rokok = DataStockRokok::all();
        view()->share('DataStockRokokIndex', $data_stock_rokok);
        $pdf=PDF::loadview('DataStockRokok.printpdf',compact('data_stock_rokok'));
        return $pdf->stream('DataStockRokok.pdf');
    } 
}
