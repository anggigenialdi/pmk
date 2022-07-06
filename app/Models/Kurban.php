<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurban extends Model
{
    use HasFactory;

    protected $table = "data_kurban";


    public function masterKecamatan()
    {
        return $this->belongsTo(MasterKecamatan::class, 'id_kecamatan', 'id');
    }
    public function masterKelurahan()
    {
        return $this->belongsTo(MasterKelurahan::class, 'id_kelurahan', 'id');
    }

}
