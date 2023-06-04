<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengiriman extends Model
{
    // use HasFactory;
    protected $table = 'data_pengiriman';
    protected $guarded = [];
    protected $primaryKey = 'id_pengiriman';
    protected $keyType = 'string';
    public function fk_gudang()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataGudangRokok', 'id_gudang_rokok', 'id_gudang_rokok');
    }
    public function fk_outlet()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataOutletCabang', 'id_outlet', 'id_outlet');
    }
    public function fk_truck()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataTruck', 'nomor_polisi', 'nomor_polisi');
    }
    public function fk_supir()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataSupir', 'id_supir', 'id_supir');
    }
    public function fk_rute()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataRute', 'id_rute', 'id_rute');
    }
}
