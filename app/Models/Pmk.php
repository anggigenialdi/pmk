<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pmk extends Model
{
    use HasFactory;
    protected $table = "data_pmk";
    protected $fillable = [
        'id',
        'id_peternak',
        'terduga_kambing',
        'terduga_kerbau',
        'terduga_sapi_potong',
        'terduga_sapi_perah',
        'tertular_kambing',
        'tertular_kerbau',
        'tertular_sapi_potong',
        'tertular_sapi_perah',
    ];

    public function dataPeternak()
    {
        return $this->belongsTo(Peternak::class, 'id_peternak', 'id');
    }

}
