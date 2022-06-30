<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peternak extends Model
{
    use HasFactory;
    protected $table = "peternak";

    protected $fillable = [
        'id',
        'nama',
        'rt',
        'rw',
        'kode_kecamatan',
        'kode_kelurahan',
    ];

    public function masterKecamatan()
    {
        return $this->belongsTo('App\Models\Masterkecamatan', 'kode_kecamatan', 'id');
    }
    public function masterKelurahan()
    {
        return $this->belongsTo('App\Models\Masterkelurahan', 'kode_kelurahan', 'id');
    }
    public function pmk()
    {
        return $this->belongsTo('App\Models\Pmk', 'id', 'id_peternak');
    }
}
