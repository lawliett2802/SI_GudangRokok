<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOutletCabang extends Model
{
    // use HasFactory;
    protected $table = 'data_outlet_cabang';
    protected $guarded = [];
    protected $primaryKey = 'id_outlet';
    protected $keyType = 'string';
    public function fk_gudang()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataGudangRokok', 'id_gudang_rokok', 'id_gudang_rokok');
    }
}
