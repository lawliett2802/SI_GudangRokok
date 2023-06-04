<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSupir extends Model
{
    // use HasFactory;
    protected $table='data_supir';
    protected $guarded=[];
    protected $primaryKey = 'id_supir';
    protected $keyType = 'string';
}
