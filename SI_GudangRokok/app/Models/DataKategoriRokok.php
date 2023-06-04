<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKategoriRokok extends Model
{
    // use HasFactory;
    protected $table='data_kategori_rokok';
    protected $guarded=[];
    protected $primaryKey = 'id_kategori_rokok';
    protected $keyType = 'string';
    
}
