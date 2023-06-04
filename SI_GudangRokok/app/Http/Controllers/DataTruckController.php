<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTruck;
use PDF;

class DataTruckController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $data_truck = DataTruck::where('nomor_polisi','LIKE','%' . request ('search').'%')
            ->orWhere('merek_truck','LIKE','%' . request ('search').'%')
            ->orWhere('kapasitas_muatan','LIKE','%' . request ('search').'%')
            ->paginate(6);
        }
        else {
            $data_truck = DataTruck::paginate(6);
        }
        return view('DataTruck.index', compact('data_truck'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('DataTruck.create');
    }

    public function insert(Request $request)
    {
        DataTruck::create($request->all());
        return redirect()->route('DataTruckIndex')->with('input', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nomor_polisi)
    {
        $data_truck = DataTruck::find($nomor_polisi);
        //dd($data_gudang_rokok);
        return view('DataTruck.edit', compact('data_truck'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nomor_polisi)
    {
        $data_truck = DataTruck::find($nomor_polisi);
        $data_truck->update($request->all());
        return redirect()->route('DataTruckIndex')->with('edit', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $nama_truck)
    {
        $data_truck = DataTruck::find($nama_truck);
        $data_truck->delete();
        return redirect()->route('DataTruckIndex')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF(){
        $data_truck = DataTruck::all();
        view()->share('DataTruckIndex', $data_truck);
        $pdf=PDF::loadview('DataTruck.printpdf',compact('data_truck'));
        return $pdf->stream('DataTruck.pdf');
    } 
}
