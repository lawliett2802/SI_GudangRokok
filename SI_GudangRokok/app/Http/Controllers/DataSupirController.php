<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSupir;
use PDF;

class DataSupirController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $data_supir = DataSupir::where('id_supir','LIKE','%' . request ('search').'%')
            ->orWhere('nama_supir','LIKE','%' . request ('search').'%')
            ->orWhere('nomor_telepon','LIKE','%' . request ('search').'%')
            ->paginate(6);
        }
        else {
            $data_supir = DataSupir::paginate(6);
        }
        return view('DataSupir.index', compact('data_supir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataSupir.create');
    }

    public function insert(Request $request)
    {
        DataSupir::create($request->all());
        return redirect()->route('DataSupirIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_supir)
    {
        $data_supir = DataSupir::find($id_supir);
        //dd($data_gudang_rokok);
        return view('DataSupir.edit', compact('data_supir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_supir)
    {
        $data_supir = DataSupir::find($id_supir);
        $data_supir->update($request->all());
        return redirect()->route('DataSupirIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_supir)
    {
        $data_supir = DataSupir::find($id_supir);
        $data_supir->delete();
        return redirect()->route('DataSupirIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_supir = DataSupir::all();
        view()->share('DatasupirIndex', $data_supir);
        $pdf=PDF::loadview('DataSupir.printpdf',compact('data_supir'));
        return $pdf->stream('DataSupir.pdf');
    }
}
