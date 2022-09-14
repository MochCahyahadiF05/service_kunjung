<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $fillable = ['id_user','no_polisi', 'tgl_boking', 'jenis_service','jumlah','id_barang','id_mekanik'];
    public $timestamps = true;

    public function barang(){
        return $this->belongsTo(Barang::class,'id_barang');
    }
    public function mekanik(){
        return $this->belongsTo(Mekanik::class,'id_mekanik');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}
