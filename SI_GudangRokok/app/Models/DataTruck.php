<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTruck extends Model
{
    // use HasFactory;
    protected $table='data_truck';
    protected $guarded=[];
    protected $primaryKey = 'nomor_polisi';
    protected $keyType = 'string';
    
}
