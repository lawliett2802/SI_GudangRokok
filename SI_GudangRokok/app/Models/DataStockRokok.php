<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataStockRokok extends Model
{
    // use HasFactory;
    protected $table='data_stock_rokok';
    protected $guarded=[];
    protected $primaryKey = 'id_stock';
    protected $keyType = 'string';
    public function fk_gudang_rokok()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataGudangRokok', 'id_gudang_rokok', 'id_gudang_rokok');
    }
    public function fk_rokok()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataRokok', 'kode_rokok', 'kode_rokok');
    }
}
