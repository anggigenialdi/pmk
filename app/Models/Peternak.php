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
        'longitude',
        'latitude',
    ];

    public function populasiTernak()
    {
        return $this->belongsTo('App\Models\PopulasiTernak', 'id_peternak', 'id');
    }
}
