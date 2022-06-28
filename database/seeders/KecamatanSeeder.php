<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterKecamatan;
class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterKecamatan::truncate();

        $kecamatan = [

            [
                "nama" => "Bandung Kulon",
                "latitude" => "-6.93",
                "longitude" => "107.58",
            ],
            [
                "nama" => "Babakan Ciparay",
                "latitude" => "-6.94",
                "longitude" => "107.58",
            ],
            [
                "nama" => "Bojongloa Kaler",
                "latitude" => "-6.94",
                "longitude" => "107.59",
            ],
            [
                "nama" => "Bojongloa Kidul",
                "latitude" => "-6.94",
                "longitude" => "107.60",
            ],
            [
                "nama" => "Astana Anyar",
                "latitude" => "-6.93",
                "longitude" => "107.60",
            ],
            [
                "nama" => "Regol",
                "latitude" => "-6.95",
                "longitude" => "107.61",
            ],
            [
                "nama" => "Lengkong",
                "latitude" => "-6.93",
                "longitude" => "107.62",
            ],
            [
                "nama" => "Bandung Kidul",
                "latitude" => "-6.96",
                "longitude" => "107.64",
            ],
            [
                "nama" => "Buah Batu",
                "latitude" => "-6.96",
                "longitude" => "107.67",
            ],
            [
                "nama" => "Ranca Sari",
                "latitude" => "-6.95",
                "longitude" => "107.68",
            ],
            [
                "nama" => "Gede Bage",
                "latitude" => "-6.96",
                "longitude" => "107.69",
            ],
            [
                "nama" => "Cibiru",
                "latitude" => "-6.93",
                "longitude" => "107.72",
            ],
            [
                "nama" => "Panyileukan",
                "latitude" => "-6.94",
                "longitude" => "107.70",
            ],
            [
                "nama" => "Ujung Berung",
                "latitude" => "-6.91",
                "longitude" => "107.70",
            ],
            [
                "nama" => "Cinambo",
                "latitude" => "-6.92",
                "longitude" => "107.70",
            ],
            [
                "nama" => "Arcamanik",
                "latitude" => "-6.92",
                "longitude" => "107.69",
            ],
            [
                "nama" => "Antapani",
                "latitude" => "-6.90",
                "longitude" => "107.67",
            ],
            [
                "nama" => "Mandalajati",
                "latitude" => "-6.90",
                "longitude" => "107.68",
            ],
            [
                "nama" => "Kiara Condong",
                "latitude" => "-6.90",
                "longitude" => "107.68",
            ],
            [
                "nama" => "Batununggal",
                "latitude" => "-6.94",
                "longitude" => "107.64",
            ],
            [
                "nama" => "Sumur Bandung",
                "latitude" => "-6.91",
                "longitude" => "107.62",
            ],
            [
                "nama" => "Andir",
                "latitude" => "-6.91",
                "longitude" => "107.57",
            ],
            [
                "nama" => "Cicendo",
                "latitude" => "-6.91",
                "longitude" => "107.60",
            ],
            [
                "nama" => "Bandung Wetan",
                "latitude" => "-6.90",
                "longitude" => "107.61",
            ],
            [
                "nama" => "Cibeunying Kidul",
                "latitude" => "-6.90",
                "longitude" => "107.64",
            ],
            [
                "nama" => "Cibeunying Kaler",
                "latitude" => "-6.89",
                "longitude" => "107.63",
            ],
            [
                "nama" => "Coblong",
                "latitude" => "-6.88",
                "longitude" => "107.61",
            ],
            [
                "nama" => "Sukajadi",
                "latitude" => "-6.89",
                "longitude" => "107.59",
            ],
            [
                "nama" => "Sukasari",
                "latitude" => "-6.87",
                "longitude" => "107.58",
            ],
            [
                "nama" => "Cidadap",
                "latitude" => "-6.87",
                "longitude" => "107.60
                ",
            ],
        ];
        MasterKecamatan::insert($kecamatan);
    }
}
