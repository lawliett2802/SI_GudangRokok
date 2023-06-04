<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataJadwalPengiriman extends Model
{
    // use HasFactory;
    protected $table='data_jadwal_pengiriman';
    protected $guarded=[];
    protected $primaryKey = 'id_jadwal';
    protected $keyType = 'string';
    public function fk_pengiriman()
    {
        // lokasi, foreign(relation table), primary key(main table)
        return $this->belongsTo('App\Models\DataPengiriman', 'id_pengiriman', 'id_pengiriman');
    }
}
