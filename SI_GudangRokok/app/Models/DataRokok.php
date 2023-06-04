<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRokok extends Model
{
    // use HasFactory;
    protected $table='data_rokok';
    protected $guarded=[];
    protected $primaryKey = 'kode_rokok';
    protected $keyType = 'string';
    public function fk_kategori_rokok()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataKategoriRokok', 'id_kategori_rokok', 'id_kategori_rokok');
    }
}