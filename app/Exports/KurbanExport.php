<?php

namespace App\Exports;

use App\Models\Kurban;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KurbanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kurban::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Kecamatan',
            'Kelurahan',
            'Kelurahan',
            'Domba Layak',
            'Kambing Layak',
            'Sapi Layak',
            'Kerbau Layak',
            'Domba TIdak Layak',
            'Kambing TIdak Layak',
            'Sapi TIdak Layak',
            'Kerbau TIdak Layak',
            'Tanggal',
            'Created',
            'Update',
        ];
    }

}
