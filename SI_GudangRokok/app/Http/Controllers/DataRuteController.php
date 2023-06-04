<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataRute;
use PDF;

class DataRuteController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $data_rute = DataRute::where('id_rute','LIKE','%' . request ('search').'%')
            ->orWhere('nama_rute','LIKE','%' . request ('search').'%')
            ->orWhere('jarak_rute','LIKE','%' . request ('search').'%')
            ->paginate(6);
        }
        else {
            $data_rute = DataRute::paginate(6);
        }
        return view('DataRute.index', compact('data_rute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataRute.create');
    }

    public function insert(Request $request)
    {
        DataRute::create($request->all());
        return redirect()->route('DataRuteIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_rute)
    {
        $data_rute = DataRute::find($id_rute);
        //dd($data_gudang_rokok);
        return view('DataRute.edit', compact('data_rute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_rute)
    {
        $data_rute = DataRute::find($id_rute);
        $data_rute->update($request->all());
        return redirect()->route('DataRuteIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id_rute)
    {
        $data_rute = DataRute::find($id_rute);
        $data_rute->delete();
        return redirect()->route('DataRuteIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_rute = DataRute::all();
        view()->share('DataRuteIndex', $data_rute);
        $pdf=PDF::loadview('DataRute.printpdf',compact('data_rute'));
        return $pdf->stream('DataRute.pdf');
    }
}
