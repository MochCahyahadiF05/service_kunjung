<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    public $fillable = ['total_harga', 'id_service', 'id_barang','id_mekanik'];
    public $timestamps = true;
}
