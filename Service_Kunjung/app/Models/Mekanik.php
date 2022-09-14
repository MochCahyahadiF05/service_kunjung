<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mekanik extends Model
{
    use HasFactory;
    public $fillable = ['nama_mekanik', 'no_hp'];
    public $timestamps = true;

    public function service(){
        return $this->hasMany(Mekanik::class,'id_mekanik');
    }
}
