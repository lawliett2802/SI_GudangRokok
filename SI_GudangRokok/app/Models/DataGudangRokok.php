<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGudangRokok extends Model
{
    //use HasFactory;
    protected $table='data_gudang_rokok';
    protected $guarded=[];
    protected $primaryKey = 'id_gudang_rokok';
    protected $keyType = 'string';
    // protected $foreignKey ='';
}
