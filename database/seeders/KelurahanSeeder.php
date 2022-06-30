<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterKelurahan;
class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterKelurahan::truncate();

        $kelurahan = [
                [
                    "id_kecamatan"=> "1",
                    "nama"=> "Gempol Sari",
                    "latitude"=> "-6.92911",
                    "longitude"=> "107.55907",
                    "altitude"=> "696"
                ],
                [
                    "id_kecamatan"=> "1",
                    "nama"=> "Cigondewah Kaler",
                    "latitude"=> "-6.93411",
                    "longitude"=> "107.56361",
                    "altitude"=> "700"
                ],
                [
                    "id_kecamatan"=> "1",
                    "nama"=> "Cigondewah Kidul",
                    "latitude"=> "-6.94386",
                    "longitude"=> "107.56005",
                    "altitude"=> "686"
                ],
                [
                    "id_kecamatan"=> "1",
                    "nama"=> "Cigondewah Rahayu",
                    "latitude"=> "-6.94889",
                    "longitude"=> "107.56314",
                    "altitude"=> "683"
                ],
                [
                    "id_kecamatan"=> "1",
                    "nama"=> "Caringin",
                    "latitude"=> "-6.92727",
                    "longitude"=> "107.57698",
                    "altitude"=> "702"
                ],
                [
                    "id_kecamatan"=> "1",
                    "nama"=> "Warung Muncang",
                    "latitude"=> "-6.92495",
                    "longitude"=> "107.57698",
                    "altitude"=> "400"
                ],
                [
                    "id_kecamatan"=> "1",
                    "nama"=> "Cibuntu",
                    "latitude"=> "-6.91819",
                    "longitude"=> "107.57328",
                    "altitude"=> "716"
                ],
                [
                    "id_kecamatan"=> "1",
                    "nama"=> "Cijerah",
                    "latitude"=> "-6.92018",
                    "longitude"=> "107.56948",
                    "altitude"=> "713"
                ],
                [
                    "id_kecamatan"=> "2",
                    "nama"=> "Margasuka",
                    "latitude"=> "-6.9527",
                    "longitude"=> "107.5673",
                    "altitude"=> "681"
                ],
                [
                    "id_kecamatan"=> "2",
                    "nama"=> "Cirangrang",
                    "latitude"=> "-6.9593",
                    "longitude"=> "107.585",
                    "altitude"=> "674"
                ],
                [
                    "id_kecamatan"=> "2",
                    "nama"=> "Margahayu Utara",
                    "latitude"=> "-6.9526",
                    "longitude"=> "107.5809",
                    "altitude"=> "684"
                ],
                [
                    "id_kecamatan"=> "2",
                    "nama"=> "Babakan Ciparay",
                    "latitude"=> "-6.9437",
                    "longitude"=> "107.5776",
                    "altitude"=> "689"
                ],
                [
                    "id_kecamatan"=> "2",
                    "nama"=> "Babakan",
                    "latitude"=> "-6.9282",
                    "longitude"=> "107.5783",
                    "altitude"=> "707"
                ],
                [
                    "id_kecamatan"=> "2",
                    "nama"=> "Sukahaji",
                    "latitude"=> "-6.9336",
                    "longitude"=> "107.5832",
                    "altitude"=> "701"
                ],
                [
                    "id_kecamatan"=> "3",
                    "nama"=> "Kopo",
                    "latitude"=> "-6.9378",
                    "longitude"=> "107.5853",
                    "altitude"=> "696"
                ],
                [
                    "id_kecamatan"=> "3",
                    "nama"=> "Suka Asih",
                    "latitude"=> "-6.9351",
                    "longitude"=> "107.5891",
                    "altitude"=> "701"
                ],
                [
                    "id_kecamatan"=> "3",
                    "nama"=> "Babakan Asih",
                    "latitude"=> "-6.9346",
                    "longitude"=> "107.5944",
                    "altitude"=> "699"
                ],
                [
                    "id_kecamatan"=> "3",
                    "nama"=> "Babakan Tarogong",
                    "latitude"=> "-6.9301",
                    "longitude"=> "107.5892",
                    "altitude"=> "706"
                ],
                [
                    "id_kecamatan"=> "3",
                    "nama"=> "Jamika",
                    "latitude"=> "-6.9234",
                    "longitude"=> "107.5872",
                    "altitude"=> "713"
                ],
                [
                    "id_kecamatan"=> "4",
                    "nama"=> "Cibaduyut Kidul",
                    "latitude"=> "-6.96069",
                    "longitude"=> "107.59143",
                    "altitude"=> "674"
                ],
                [
                    "id_kecamatan"=> "4",
                    "nama"=> "Cibaduyut Wetan",
                    "latitude"=> "-6.96016",
                    "longitude"=> "107.59779",
                    "altitude"=> "675"
                ],
                [
                    "id_kecamatan"=> "4",
                    "nama"=> "Mekar Wangi",
                    "latitude"=> "-6.95673",
                    "longitude"=> "107.61061",
                    "altitude"=> "676"
                ],
                [
                    "id_kecamatan"=> "4",
                    "nama"=> "Cibaduyut",
                    "latitude"=> "-6.95341",
                    "longitude"=> "107.61061",
                    "altitude"=> "682"
                ],
                [
                    "id_kecamatan"=> "4",
                    "nama"=> "Kebon Lega",
                    "latitude"=> "-6.94875",
                    "longitude"=> "107.59291",
                    "altitude"=> "684"
                ],
                [
                    "id_kecamatan"=> "4",
                    "nama"=> "Situsaeur",
                    "latitude"=> "-6.9452",
                    "longitude"=> "107.59465",
                    "altitude"=> "686"
                ],
                [
                    "id_kecamatan"=> "5",
                    "nama"=> "Karasak",
                    "latitude"=> "-6.9506",
                    "longitude"=> "107.6077",
                    "altitude"=> "682"
                ],
                [
                    "id_kecamatan"=> "5",
                    "nama"=> "Pelindung Hewan",
                    "latitude"=> "-6.9395",
                    "longitude"=> "107.6044",
                    "altitude"=> "690"
                ],
                [
                    "id_kecamatan"=> "5",
                    "nama"=> "Nyengseret",
                    "latitude"=> "-6.9275",
                    "longitude"=> "107.6003",
                    "altitude"=> "703"
                ],
                [
                    "id_kecamatan"=> "5",
                    "nama"=> "Panjunan",
                    "latitude"=> "-6.9324",
                    "longitude"=> "107.5997",
                    "altitude"=> "695"
                ],
                [
                    "id_kecamatan"=> "5",
                    "nama"=> "Cibadak",
                    "latitude"=> "-6.9207",
                    "longitude"=> "107.5929",
                    "altitude"=> "714"
                ],
                [
                    "id_kecamatan"=> "5",
                    "nama"=> "Karang Anyar",
                    "latitude"=> "-6.9244",
                    "longitude"=> "107.6016",
                    "altitude"=> "703"
                ],
                [
                    "id_kecamatan"=> "6",
                    "nama"=> "Ciseureuh",
                    "latitude"=> "-6.94632",
                    "longitude"=> "107.61198",
                    "altitude"=> "685"
                ],
                [
                    "id_kecamatan"=> "6",
                    "nama"=> "Pasirluyu",
                    "latitude"=> "-6.95163",
                    "longitude"=> "107.61642",
                    "altitude"=> "681"
                ],
                [
                    "id_kecamatan"=> "6",
                    "nama"=> "Ancol",
                    "latitude"=> "-6.94031",
                    "longitude"=> "107.61425",
                    "altitude"=> "689"
                ],
                [
                    "id_kecamatan"=> "6",
                    "nama"=> "Cigereleng",
                    "latitude"=> "-6.945662",
                    "longitude"=> "107.6114",
                    "altitude"=> "687"
                ],
                [
                    "id_kecamatan"=> "6",
                    "nama"=> "Ciateul",
                    "latitude"=> "-6.93583",
                    "longitude"=> "107.61135",
                    "altitude"=> "695"
                ],
                [
                    "id_kecamatan"=> "6",
                    "nama"=> "Pungkur",
                    "latitude"=> "-6.93031",
                    "longitude"=> "107.61034",
                    "altitude"=> "698"
                ],
                [
                    "id_kecamatan"=> "6",
                    "nama"=> "Balong Gede",
                    "latitude"=> "-6.92522",
                    "longitude"=> "107.60899",
                    "altitude"=> "704"
                ],
                [
                    "id_kecamatan"=> "7",
                    "nama"=> "Cijagra",
                    "latitude"=> "-6.9449",
                    "longitude"=> "107.6262",
                    "altitude"=> "686"
                ],
                [
                    "id_kecamatan"=> "7",
                    "nama"=> "Turangga",
                    "latitude"=> "-6.9397",
                    "longitude"=> "107.6312",
                    "altitude"=> "683"
                ],
                [
                    "id_kecamatan"=> "7",
                    "nama"=> "Lingkar Selatan",
                    "latitude"=> "-6.9306",
                    "longitude"=> "107.6234",
                    "altitude"=> "692"
                ],
                [
                    "id_kecamatan"=> "7",
                    "nama"=> "Malabar",
                    "latitude"=> "-6.9206",
                    "longitude"=> "107.6223",
                    "altitude"=> "695"
                ],
                [
                    "id_kecamatan"=> "7",
                    "nama"=> "Burangrang",
                    "latitude"=> "-6.9294",
                    "longitude"=> "107.6195",
                    "altitude"=> "696"
                ],
                [
                    "id_kecamatan"=> "7",
                    "nama"=> "Cikawao",
                    "latitude"=> "-6.9284",
                    "longitude"=> "107.6145",
                    "altitude"=> "698"
                ],
                [
                    "id_kecamatan"=> "7",
                    "nama"=> "Paledang",
                    "latitude"=> "-6.9282",
                    "longitude"=> "107.6163",
                    "altitude"=> "698"
                ],
                [
                    "id_kecamatan"=> "8",
                    "nama"=> "Wates",
                    "latitude"=> "-6.9592",
                    "longitude"=> "107.6133",
                    "altitude"=> "677"
                ],
                [
                    "id_kecamatan"=> "8",
                    "nama"=> "Mengger",
                    "latitude"=> "-6.9625",
                    "longitude"=> "107.6354",
                    "altitude"=> "670"
                ],
                [
                    "id_kecamatan"=> "8",
                    "nama"=> "20",
                    "latitude"=> "-6.953",
                    "longitude"=> "107.638",
                    "altitude"=> "674"
                ],
                [
                    "id_kecamatan"=> "8",
                    "nama"=> "Kujangsari",
                    "latitude"=> "-6.9627",
                    "longitude"=> "107.6474",
                    "altitude"=> "670"
                ],
                [
                    "id_kecamatan"=> "9",
                    "nama"=> "Cijaura",
                    "latitude"=> "-6.95583",
                    "longitude"=> "107.65496",
                    "altitude"=> "673"
                ],
                [
                    "id_kecamatan"=> "9",
                    "nama"=> "Margasari",
                    "latitude"=> "-6.951332",
                    "longitude"=> "107.6481",
                    "altitude"=> "676"
                ],
                [
                    "id_kecamatan"=> "9",
                    "nama"=> "Sekejati",
                    "latitude"=> "-6.9467",
                    "longitude"=> "107.6619",
                    "altitude"=> "676"
                ],
                [
                    "id_kecamatan"=> "9",
                    "nama"=> "Jati Sari",
                    "latitude"=> "-6.9339",
                    "longitude"=> "107.6596",
                    "altitude"=> "678"
                ],
                [
                    "id_kecamatan"=> "10",
                    "nama"=> "Derwati",
                    "latitude"=> "-6.9649",
                    "longitude"=> "107.6828",
                    "altitude"=> "667"
                ],
                [
                    "id_kecamatan"=> "10",
                    "nama"=> "Cipamokolan",
                    "latitude"=> "-6.9403",
                    "longitude"=> "107.677",
                    "altitude"=> "673"
                ],
                [
                    "id_kecamatan"=> "10",
                    "nama"=> "Manjahlega",
                    "latitude"=> "-6.9466",
                    "longitude"=> "107.6668",
                    "altitude"=> "673"
                ],
                [
                    "id_kecamatan"=> "10",
                    "nama"=> "Mekarjaya",
                    "latitude"=> "-6.96146",
                    "longitude"=> "107.67282",
                    "altitude"=> "669"
                ],
                [
                    "id_kecamatan"=> "11",
                    "nama"=> "Rancabolang",
                    "latitude"=> "-6.9602",
                    "longitude"=> "107.68",
                    "altitude"=> "667"
                ],
                [
                    "id_kecamatan"=> "11",
                    "nama"=> "Rancanumpang",
                    "latitude"=> "-6.9628",
                    "longitude"=> "107.7051",
                    "altitude"=> "666"
                ],
                [
                    "id_kecamatan"=> "11",
                    "nama"=> "Cisaranten Kidul",
                    "latitude"=> "-6.9444",
                    "longitude"=> "107.6889",
                    "altitude"=> "669"
                ],
                [
                    "id_kecamatan"=> "11",
                    "nama"=> "Cimincrang",
                    "latitude"=> "-6.9545",
                    "longitude"=> "107.7061",
                    "altitude"=> "666"
                ],
                [
                    "id_kecamatan"=> "12",
                    "nama"=> "Pasir Biru",
                    "latitude"=> "-6.9341",
                    "longitude"=> "107.7216",
                    "altitude"=> "690"
                ],
                [
                    "id_kecamatan"=> "12",
                    "nama"=> "Cipadung",
                    "latitude"=> "-6.9317",
                    "longitude"=> "107.714",
                    "altitude"=> "681"
                ],
                [
                    "id_kecamatan"=> "12",
                    "nama"=> "Palasari",
                    "latitude"=> "-6.9186",
                    "longitude"=> "107.7161",
                    "altitude"=> "725"
                ],
                [
                    "id_kecamatan"=> "12",
                    "nama"=> "Cisurupan",
                    "latitude"=> "-6.9137",
                    "longitude"=> "107.7193",
                    "altitude"=> "762"
                ],
                [
                    "id_kecamatan"=> "13",
                    "nama"=> "Mekar Mulya",
                    "latitude"=> "-6.9256",
                    "longitude"=> "107.7041",
                    "altitude"=> "683"
                ],
                [
                    "id_kecamatan"=> "13",
                    "nama"=> "Cipadung Kidul",
                    "latitude"=> "-6.9458",
                    "longitude"=> "107.7146",
                    "altitude"=> "669"
                ],
                [
                    "id_kecamatan"=> "13",
                    "nama"=> "Cipadung Wetan",
                    "latitude"=> "-6.9316",
                    "longitude"=> "107.7127",
                    "altitude"=> "678"
                ],
                [
                    "id_kecamatan"=> "13",
                    "nama"=> "Cipadung Kulon",
                    "latitude"=> "-6.9221",
                    "longitude"=> "107.7046",
                    "altitude"=> "689"
                ],
                [
                    "id_kecamatan"=> "14",
                    "nama"=> "Pasanggrahan",
                    "latitude"=> "-6.9172",
                    "longitude"=> "107.706",
                    "altitude"=> "800"
                ],
                [
                    "id_kecamatan"=> "14",
                    "nama"=> "Pasirjati",
                    "latitude"=> "-6.9098",
                    "longitude"=> "107.7083",
                    "altitude"=> "750"
                ],
                [
                    "id_kecamatan"=> "14",
                    "nama"=> "Pasir Wangi",
                    "latitude"=> "-6.9005",
                    "longitude"=> "107.7088",
                    "altitude"=> "750"
                ],
                [
                    "id_kecamatan"=> "14",
                    "nama"=> "Cigending",
                    "latitude"=> "-6.9084",
                    "longitude"=> "107.7021",
                    "altitude"=> "700"
                ],
                [
                    "id_kecamatan"=> "14",
                    "nama"=> "Pasir Endah",
                    "latitude"=> "-6.9051",
                    "longitude"=> "107.6906",
                    "altitude"=> "745"
                ],
                [
                    "id_kecamatan"=> "15",
                    "nama"=> "Cisaranten Wetan",
                    "latitude"=> "-6.9195",
                    "longitude"=> "107.6888",
                    "altitude"=> "677"
                ],
                [
                    "id_kecamatan"=> "15",
                    "nama"=> "Babakan Penghulu",
                    "latitude"=> "-6.9406",
                    "longitude"=> "107.6918",
                    "altitude"=> "671"
                ],
                [
                    "id_kecamatan"=> "15",
                    "nama"=> "Pakemitan",
                    "latitude"=> "-6.9141",
                    "longitude"=> "107.699",
                    "altitude"=> "695"
                ],
                [
                    "id_kecamatan"=> "15",
                    "nama"=> "Sukamulya",
                    "latitude"=> "-6.916114",
                    "longitude"=> "107.67298",
                    "altitude"=> "677"
                ],
                [
                    "id_kecamatan"=> "16",
                    "nama"=> "Cisaranten Kulon",
                    "latitude"=> "-6.9244",
                    "longitude"=> "107.6834",
                    "altitude"=> "676"
                ],
                [
                    "id_kecamatan"=> "16",
                    "nama"=> "Cisaranten Bina Harapan",
                    "latitude"=> "-6.9142",
                    "longitude"=> "107.6842",
                    "altitude"=> "681"
                ],
                [
                    "id_kecamatan"=> "16",
                    "nama"=> "Sukamiskin",
                    "latitude"=> "-6.9101",
                    "longitude"=> "107.6766",
                    "altitude"=> "692"
                ],
                [
                    "id_kecamatan"=> "16",
                    "nama"=> "Cisaranten Endah",
                    "latitude"=> "-6.9332",
                    "longitude"=> "107.6729",
                    "altitude"=> "673"
                ],
                [
                    "id_kecamatan"=> "17",
                    "nama"=> "Antapani Kidul",
                    "latitude"=> "-6.91753",
                    "longitude"=> "107.66056",
                    "altitude"=> "682"
                ],
                [
                    "id_kecamatan"=> "17",
                    "nama"=> "Antapani Tengah",
                    "latitude"=> "-6.91474",
                    "longitude"=> "107.66191",
                    "altitude"=> "682"
                ],
                [
                    "id_kecamatan"=> "17",
                    "nama"=> "Antapani Wetan",
                    "latitude"=> "-6.9135",
                    "longitude"=> "107.6658",
                    "altitude"=> "682"
                ],
                [
                    "id_kecamatan"=> "17",
                    "nama"=> "Antapani Kulon",
                    "latitude"=> "-6.9101",
                    "longitude"=> "107.6577",
                    "altitude"=> "686"
                ],
                [
                    "id_kecamatan"=> "18",
                    "nama"=> "Jatihandap",
                    "latitude"=> "-6.8925",
                    "longitude"=> "107.6622",
                    "altitude"=> "733"
                ],
                [
                    "id_kecamatan"=> "18",
                    "nama"=> "Karang Pamulang",
                    "latitude"=> "-6.9036",
                    "longitude"=> "107.6654",
                    "altitude"=> "691"
                ],
                [
                    "id_kecamatan"=> "18",
                    "nama"=> "Sindang Jaya",
                    "latitude"=> "-6.9029",
                    "longitude"=> "107.6803",
                    "altitude"=> "718"
                ],
                [
                    "id_kecamatan"=> "18",
                    "nama"=> "Pasir Impun",
                    "latitude"=> "-6.8955",
                    "longitude"=> "107.677",
                    "altitude"=> "760"
                ],
                [
                    "id_kecamatan"=> "19",
                    "nama"=> "Kebon Kangkung",
                    "latitude"=> "-6.9433",
                    "longitude"=> "107.64307",
                    "altitude"=> "679"
                ],
                [
                    "id_kecamatan"=> "19",
                    "nama"=> "Sukapura",
                    "latitude"=> "-6.929",
                    "longitude"=> "107.6495",
                    "altitude"=> "682"
                ],
                [
                    "id_kecamatan"=> "19",
                    "nama"=> "Kebun Jayanti",
                    "latitude"=> "-6.92522",
                    "longitude"=> "107.64569",
                    "altitude"=> "684"
                ],
                [
                    "id_kecamatan"=> "19",
                    "nama"=> "Babakan Sari",
                    "latitude"=> "-6.9245",
                    "longitude"=> "107.6497",
                    "altitude"=> "684"
                ],
                [
                    "id_kecamatan"=> "19",
                    "nama"=> "Babakan Surabaya",
                    "latitude"=> "-6.9154",
                    "longitude"=> "107.6468",
                    "altitude"=> "688"
                ],
                [
                    "id_kecamatan"=> "19",
                    "nama"=> "Cicaheum",
                    "latitude"=> "-6.90813",
                    "longitude"=> "107.63768",
                    "altitude"=> "466"
                ],
                [
                    "id_kecamatan"=> "20",
                    "nama"=> "Gumuruh",
                    "latitude"=> "-6.93813",
                    "longitude"=> "107.63768",
                    "altitude"=> "682"
                ],
                [
                    "id_kecamatan"=> "20",
                    "nama"=> "Binong",
                    "latitude"=> "-6.9359",
                    "longitude"=> "107.6377",
                    "altitude"=> "682"
                ],
                [
                    "id_kecamatan"=> "20",
                    "nama"=> "Kebon Gedang",
                    "latitude"=> "-6.9244",
                    "longitude"=> "107.6426",
                    "altitude"=> "686"
                ],
                [
                    "id_kecamatan"=> "20",
                    "nama"=> "Maleer",
                    "latitude"=> "-6.9268",
                    "longitude"=> "107.6397",
                    "altitude"=> "685"
                ],
                [
                    "id_kecamatan"=> "20",
                    "nama"=> "Cibangkong",
                    "latitude"=> "-6.9242",
                    "longitude"=> "107.6352",
                    "altitude"=> "688"
                ],
                [
                    "id_kecamatan"=> "20",
                    "nama"=> "Samoja",
                    "latitude"=> "-6.921",
                    "longitude"=> "107.6264",
                    "altitude"=> "695"
                ],
                [
                    "id_kecamatan"=> "20",
                    "nama"=> "Kacapiring",
                    "latitude"=> "-6.91662",
                    "longitude"=> "107.6348",
                    "altitude"=> "692"
                ],
                [
                    "id_kecamatan"=> "20",
                    "nama"=> "Kebon Waru",
                    "latitude"=> "-6.9163",
                    "longitude"=> "107.6385",
                    "altitude"=> "691"
                ],
                [
                    "id_kecamatan"=> "21",
                    "nama"=> "Braga",
                    "latitude"=> "-6.9173",
                    "longitude"=> "107.6051",
                    "altitude"=> "712"
                ],
                [
                    "id_kecamatan"=> "21",
                    "nama"=> "Kebon Pisang",
                    "latitude"=> "-6.9187",
                    "longitude"=> "107.6188",
                    "altitude"=> "700"
                ],
                [
                    "id_kecamatan"=> "21",
                    "nama"=> "Merdeka",
                    "latitude"=> "-6.9122",
                    "longitude"=> "107.6232",
                    "altitude"=> "709"
                ],
                [
                    "id_kecamatan"=> "21",
                    "nama"=> "Babakan Ciamis",
                    "latitude"=> "-6.9128",
                    "longitude"=> "107.6058",
                    "altitude"=> "716"
                ],
                [
                    "id_kecamatan"=> "22",
                    "nama"=> "Campaka",
                    "latitude"=> "-6.89787",
                    "longitude"=> "107.56314",
                    "altitude"=> "738"
                ],
                [
                    "id_kecamatan"=> "22",
                    "nama"=> "Maleber",
                    "latitude"=> "-6.90734",
                    "longitude"=> "107.57344",
                    "altitude"=> "734"
                ],
                [
                    "id_kecamatan"=> "22",
                    "nama"=> "Garuda",
                    "latitude"=> "-6.91596",
                    "longitude"=> "107.57656",
                    "altitude"=> "723"
                ],
                [
                    "id_kecamatan"=> "22",
                    "nama"=> "Dungus Cariang",
                    "latitude"=> "-6.91295",
                    "longitude"=> "107.58617",
                    "altitude"=> "724"
                ],
                [
                    "id_kecamatan"=> "22",
                    "nama"=> "Ciroyom",
                    "latitude"=> "-6.91295",
                    "longitude"=> "107.58617",
                    "altitude"=> "724"
                ],
                [
                    "id_kecamatan"=> "22",
                    "nama"=> "Kebon Jeruk",
                    "latitude"=> "-6.91908",
                    "longitude"=> "107.60107",
                    "altitude"=> "709"
                ],
                [
                    "id_kecamatan"=> "23",
                    "nama"=> "Arjuna",
                    "latitude"=> "-6.9088",
                    "longitude"=> "107.5915",
                    "altitude"=> "725"
                ],
                [
                    "id_kecamatan"=> "23",
                    "nama"=> "Pasirkaliki",
                    "latitude"=> "-6.9078",
                    "longitude"=> "107.6023",
                    "altitude"=> "728"
                ],
                [
                    "id_kecamatan"=> "23",
                    "nama"=> "Pamoyanan",
                    "latitude"=> "-6.9042",
                    "longitude"=> "107.5922",
                    "altitude"=> "733"
                ],
                [
                    "id_kecamatan"=> "23",
                    "nama"=> "Pajajaran",
                    "latitude"=> "-6.8996",
                    "longitude"=> "107.5907",
                    "altitude"=> "740"
                ],
                [
                    "id_kecamatan"=> "23",
                    "nama"=> "Husen Sastranegara",
                    "latitude"=> "-6.9076",
                    "longitude"=> "107.5876",
                    "altitude"=> "894"
                ],
                [
                    "id_kecamatan"=> "23",
                    "nama"=> "Sukaraja",
                    "latitude"=> "-6.8943",
                    "longitude"=> "107.5594",
                    "altitude"=> "741"
                ],
                [
                    "id_kecamatan"=> "24",
                    "nama"=> "Taman Sari",
                    "latitude"=> "-6.9039",
                    "longitude"=> "107.6074",
                    "altitude"=> "728"
                ],
                [
                    "id_kecamatan"=> "24",
                    "nama"=> "Citarum",
                    "latitude"=> "-6.9035",
                    "longitude"=> "107.616",
                    "altitude"=> "731"
                ],
                [
                    "id_kecamatan"=> "24",
                    "nama"=> "Cihapit",
                    "latitude"=> "-6.9082",
                    "longitude"=> "107.6201",
                    "altitude"=> "718"
                ],
                [
                    "id_kecamatan"=> "25",
                    "nama"=> "Sukamaju",
                    "latitude"=> "-6.90818",
                    "longitude"=> "107.63227",
                    "altitude"=> "702"
                ],
                [
                    "id_kecamatan"=> "25",
                    "nama"=> "Cicadas",
                    "latitude"=> "-6.9084",
                    "longitude"=> "107.63718",
                    "altitude"=> "695"
                ],
                [
                    "id_kecamatan"=> "25",
                    "nama"=> "Cikutra",
                    "latitude"=> "-6.89931",
                    "longitude"=> "107.63713",
                    "altitude"=> "709"
                ],
                [
                    "id_kecamatan"=> "25",
                    "nama"=> "Padasuka",
                    "latitude"=> "-6.9024",
                    "longitude"=> "107.6533",
                    "altitude"=> "699"
                ],
                [
                    "id_kecamatan"=> "25",
                    "nama"=> "Pasirlayung",
                    "latitude"=> "-6.8936",
                    "longitude"=> "107.6567",
                    "altitude"=> "727"
                ],
                [
                    "id_kecamatan"=> "25",
                    "nama"=> "Sukapada",
                    "latitude"=> "-6.8978",
                    "longitude"=> "107.6445",
                    "altitude"=> "700"
                ],
                [
                    "id_kecamatan"=> "26",
                    "nama"=> "Cihaurgeulis",
                    "latitude"=> "-6.8986",
                    "longitude"=> "107.6331",
                    "altitude"=> "712"
                ],
                [
                    "id_kecamatan"=> "26",
                    "nama"=> "Sukaluyu",
                    "latitude"=> "-6.8856",
                    "longitude"=> "107.6313",
                    "altitude"=> "718"
                ],
                [
                    "id_kecamatan"=> "26",
                    "nama"=> "Neglasari",
                    "latitude"=> "-6.8968",
                    "longitude"=> "107.6424",
                    "altitude"=> "793"
                ],
                [
                    "id_kecamatan"=> "26",
                    "nama"=> "Cigadung",
                    "latitude"=> "-6.8799",
                    "longitude"=> "107.6251",
                    "altitude"=> "793"
                ],
                [
                    "id_kecamatan"=> "27",
                    "nama"=> "Cipaganti",
                    "latitude"=> "-6.8867",
                    "longitude"=> "107.603",
                    "altitude"=> "783"
                ],
                [
                    "id_kecamatan"=> "27",
                    "nama"=> "Lebak Siliwangi",
                    "latitude"=> "-6.88499",
                    "longitude"=> "107.61108",
                    "altitude"=> "784"
                ],
                [
                    "id_kecamatan"=> "27",
                    "nama"=> "Lebak Gede",
                    "latitude"=> "-6.8898",
                    "longitude"=> "107.6168",
                    "altitude"=> "766"
                ],
                [
                    "id_kecamatan"=> "27",
                    "nama"=> "Sadang Serang",
                    "latitude"=> "-6.89165",
                    "longitude"=> "107.62693",
                    "altitude"=> "742"
                ],
                [
                    "id_kecamatan"=> "27",
                    "nama"=> "Sekeloa",
                    "latitude"=> "-6.8832",
                    "longitude"=> "107.61993",
                    "altitude"=> "787"
                ],
                [
                    "id_kecamatan"=> "27",
                    "nama"=> "Dago",
                    "latitude"=> "-6.8793",
                    "longitude"=> "107.6158",
                    "altitude"=> "812"
                ],
                [
                    "id_kecamatan"=> "28",
                    "nama"=> "Sukawarna",
                    "latitude"=> "-6.88207",
                    "longitude"=> "107.57904",
                    "altitude"=> "795"
                ],
                [
                    "id_kecamatan"=> "28",
                    "nama"=> "Sukagalih",
                    "latitude"=> "-6.89033",
                    "longitude"=> "107.58695",
                    "altitude"=> "761"
                ],
                [
                    "id_kecamatan"=> "28",
                    "nama"=> "Sukabungah",
                    "latitude"=> "-6.89271",
                    "longitude"=> "107.59336",
                    "altitude"=> "762"
                ],
                [
                    "id_kecamatan"=> "28",
                    "nama"=> "Cipedes",
                    "latitude"=> "-6.89234",
                    "longitude"=> "107.5947",
                    "altitude"=> "760"
                ],
                [
                    "id_kecamatan"=> "28",
                    "nama"=> "Pasteur",
                    "latitude"=> "-6.89125",
                    "longitude"=> "107.6016",
                    "altitude"=> "771"
                ],
                [
                    "id_kecamatan"=> "29",
                    "nama"=> "Sarijadi",
                    "latitude"=> "-6.8714",
                    "longitude"=> "107.5806",
                    "altitude"=> "844"
                ],
                [
                    "id_kecamatan"=> "29",
                    "nama"=> "Sukarasa",
                    "latitude"=> "-6.8764",
                    "longitude"=> "107.589",
                    "altitude"=> "821"
                ],
                [
                    "id_kecamatan"=> "29",
                    "nama"=> "Gegerkalong",
                    "latitude"=> "-6.8748",
                    "longitude"=> "107.5952",
                    "altitude"=> "846"
                ],
                [
                    "id_kecamatan"=> "29",
                    "nama"=> "Isola",
                    "latitude"=> "-6.8646",
                    "longitude"=> "107.5932",
                    "altitude"=> "899"
                ],
                [
                    "id_kecamatan"=> "30",
                    "nama"=> "Hegarmanah",
                    "latitude"=> "-6.8781",
                    "longitude"=> "107.6029",
                    "altitude"=> "802"
                ],
                [
                    "id_kecamatan"=> "30",
                    "nama"=> "Ciumbuleuit",
                    "latitude"=> "-6.8665",
                    "longitude"=> "107.6048",
                    "altitude"=> "875"
                ],
                [
                    "id_kecamatan"=> "30",
                    "nama"=> "Ledeng",
                    "latitude"=> "-6.8627",
                    "longitude"=> "107.5994",
                    "altitude"=> "892"
                ]
        ];
        MasterKelurahan::insert($kelurahan);
    }
}
