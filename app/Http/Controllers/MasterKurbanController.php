<?php

namespace App\Http\Controllers;

use App\Models\Kurban;
use App\Models\MasterKecamatan;
use App\Models\MasterKelurahan;
use Illuminate\Http\Request;
use \stdClass;

class MasterKurbanController extends Controller
{
    public function __construct()
    {
        $this->middleware(
            'auth',
            [
                'except' => [
                    'index',
                    'getDataPerKecamatan',
                    'jumlahKumulatif',
                    'indexKurban'
                ]
            ]
        );
    }
    public function index(){
        return view('public/kurban/peta');
    }
    public function masterKurbanIndex()
    {
        $datas = Kurban::orderBy('id', 'desc')->get();

        return view('admin/data-kurban/index', compact(['datas']));
    }
    public function masterKurbanCreate()
    {
        $kecamatan = MasterKecamatan::get();

        return view('admin/data-kurban/create', compact('kecamatan'));
    }

    public function masterKurbanPost(Request $request)
    {
        
        request()->validate(
            [
                'kecamatan' => 'required',
                'kelurahan' => 'required',

                'domba_layak' => 'required',
                'kambing_layak' => 'required',
                'kerbau_layak' => 'required',
                'sapi_layak' => 'required',
                'domba_tidak_layak' => 'required',
                'kambing_tidak_layak' => 'required',
                'kerbau_tidak_layak' => 'required',
                'sapi_tidak_layak' => 'required',
            ],
            [
                'kecamatan.required' => 'Input tidak boleh kosong',
                'kelurahan.required' => 'Input tidak boleh kosong',

                'domba_layak.required' => 'Input tidak boleh kosong',
                'kambing_layak.required' => 'Input tidak boleh kosong',
                'kerbau_layak.required' => 'Input tidak boleh kosong',
                'sapi_layak.required' => 'Input tidak boleh kosong',
                'domba_tidak_layak.required' => 'Input tidak boleh kosong',
                'kambing_tidak_layak.required' => 'Input tidak boleh kosong',
                'kerbau_tidak_layak.required' => 'Input tidak boleh kosong',
                'sapi_tidak_layak.required' => 'Input tidak boleh kosong',

            ]
        );

        $datas = new Kurban;
        $datas->id_kecamatan = $request->input('kecamatan');
        $datas->id_kelurahan = $request->input('kelurahan');

        $datas->domba_layak = $request->input('domba_layak');
        $datas->kambing_layak = $request->input('kambing_layak');
        $datas->kerbau_layak = $request->input('kerbau_layak');
        $datas->sapi_layak = $request->input('sapi_layak');
        $datas->domba_tidak_layak = $request->input('domba_tidak_layak');
        $datas->kambing_tidak_layak = $request->input('kambing_tidak_layak');
        $datas->kerbau_tidak_layak = $request->input('kerbau_tidak_layak');
        $datas->sapi_tidak_layak = $request->input('sapi_tidak_layak');
        $datas->save();

        return back()->with('success', ' Data Berhasil Ditambahkan');
    }

    public function indexKurban()
    {

        $kec = MasterKecamatan::orderBy('nama', 'asc')->get();
        $latest  = MasterKecamatan::latest()->first();

        $data = [];
        $data_kec = [];
        foreach ($kec as $k) {
            $data['data_ternak'] = $this->getDataTernakKecamatan($k->id);
            $data['id'] = $k->id;
            $data['nama_kecamatan'] = $k->nama;
            $data['latitude'] = $k->latitude;
            $data['longitude'] = $k->longitude;
            $data['kelurahan'] = $this->getKelurahan($k->id);
            array_push($data_kec, $data);
        }
        return $data_kec;
    }
    private function getKelurahan($id)
    {
        $kel = MasterKelurahan::where('id_kecamatan', $id)->get();

        $data =  [];
        $data_kel = [];
        foreach ($kel as $k) {
            $data['nama_kelurahan'] = $k->nama;
            $data['ternak'] = $this->getDataTernakKelurahan($id, $k->id);
            array_push($data_kel, $data);
        }
        return $data_kel;
    }
    private function getDataTernakKecamatan($idKec)
    {
        $kurban = Kurban::where('id_kecamatan', $idKec)->get();

        $data =  [];
        $data_kurban = [];
        $domba_layak = 0;
        $kambing_layak = 0;
        $sapi_layak = 0;
        $kerbau_layak = 0;
        
        $domba_tidak_layak = 0;
        $kambing_tidak_layak = 0;
        $sapi_tidak_layak = 0;
        $kerbau_tidak_layak = 0;

        foreach ($kurban as $p) {
            $domba_layak = $domba_layak + $p->domba_layak;
            $kambing_layak = $kambing_layak + $p->kambing_layak;
            $sapi_layak = $sapi_layak + $p->sapi_layak;
            $kerbau_layak = $kerbau_layak + $p->kerbau_layak;
            $domba_tidak_layak = $domba_tidak_layak + $p->domba_tidak_layak;
            $kambing_tidak_layak = $kambing_tidak_layak + $p->kambing_tidak_layak;
            $sapi_tidak_layak = $sapi_tidak_layak + $p->sapi_tidak_layak;
            $kerbau_tidak_layak = $kerbau_tidak_layak + $p->kerbau_tidak_layak;
        }
        $data['domba_layak'] = $domba_layak;
        $data['kambing_layak'] = $kambing_layak;
        $data['sapi_layak'] = $sapi_layak;
        $data['kerbau_layak'] = $kerbau_layak;
        $data['domba_tidak_layak'] = $domba_tidak_layak;
        $data['kambing_tidak_layak'] = $kambing_tidak_layak;
        $data['sapi_tidak_layak'] = $sapi_tidak_layak;
        $data['kerbau_tidak_layak'] = $kerbau_tidak_layak;
        $data['total_layak'] = $domba_layak + $kambing_layak + $sapi_layak + $kerbau_layak;
        $data['total_tidak_layak'] = $domba_tidak_layak + $kambing_tidak_layak + $sapi_tidak_layak + $kerbau_tidak_layak;
        array_push($data_kurban, $data);
        return $data;
    }
    private function getDataTernakKelurahan($idKec, $idKel)
    {
        $kurban = Kurban::where('id_kecamatan', $idKec)->where('id_kelurahan', $idKel)->get();

        $data =  [];
        $data_kurban = [];
        $domba_layak = 0;
        $kambing_layak = 0;
        $sapi_layak = 0;
        $kerbau_layak = 0;
        
        $domba_tidak_layak = 0;
        $kambing_tidak_layak = 0;
        $sapi_tidak_layak = 0;
        $kerbau_tidak_layak = 0;

        foreach ($kurban as $p) {
            $domba_layak = $domba_layak + $p->domba_layak;
            $kambing_layak = $kambing_layak + $p->kambing_layak;
            $sapi_layak = $sapi_layak + $p->sapi_layak;
            $kerbau_layak = $kerbau_layak + $p->kerbau_layak;
            $domba_tidak_layak = $domba_tidak_layak + $p->domba_tidak_layak;
            $kambing_tidak_layak = $kambing_tidak_layak + $p->kambing_tidak_layak;
            $sapi_tidak_layak = $sapi_tidak_layak + $p->sapi_tidak_layak;
            $kerbau_tidak_layak = $kerbau_tidak_layak + $p->kerbau_tidak_layak;
        }
        $data['domba_layak'] = $domba_layak;
        $data['kambing_layak'] = $kambing_layak;
        $data['sapi_layak'] = $sapi_layak;
        $data['kerbau_layak'] = $kerbau_layak;
        $data['domba_tidak_layak'] = $domba_tidak_layak;
        $data['kambing_tidak_layak'] = $kambing_tidak_layak;
        $data['sapi_tidak_layak'] = $sapi_tidak_layak;
        $data['kerbau_tidak_layak'] = $kerbau_tidak_layak;
        $data['total_layak'] = $domba_layak + $kambing_layak + $sapi_layak + $kerbau_layak;
        $data['total_tidak_layak'] = $domba_tidak_layak + $kambing_tidak_layak + $sapi_tidak_layak + $kerbau_tidak_layak;
        array_push($data_kurban, $data);
        return $data;
        // dd($pmk);
    }
    public function getDataPerKecamatan($id)
    {
        $data = [];
        $data['nama_kecamatan'] = MasterKecamatan::where('id', $id)->first();
        $data['data_kurban'] = $this->getDataTernakKecamatan($id);
        $data['data_kurban_perkelurahan'] = $this->getKelurahan($id);
        return $data;
    }
    public function jumlahKumulatif()
    {
        $kurban = Kurban::all();
        $date = Kurban::orderBy('updated_at', 'desc')->first();
        $data =  [];
        $data_kurban = [];
        $domba_layak = 0;
        $kambing_layak = 0;
        $sapi_layak = 0;
        $kerbau_layak = 0;
        
        $domba_tidak_layak = 0;
        $kambing_tidak_layak = 0;
        $sapi_tidak_layak = 0;
        $kerbau_tidak_layak = 0;

        foreach ($kurban as $p) {
            $domba_layak = $domba_layak + $p->domba_layak;
            $kambing_layak = $kambing_layak + $p->kambing_layak;
            $sapi_layak = $sapi_layak + $p->sapi_layak;
            $kerbau_layak = $kerbau_layak + $p->kerbau_layak;
            $domba_tidak_layak = $domba_tidak_layak + $p->domba_tidak_layak;
            $kambing_tidak_layak = $kambing_tidak_layak + $p->kambing_tidak_layak;
            $sapi_tidak_layak = $sapi_tidak_layak + $p->sapi_tidak_layak;
            $kerbau_tidak_layak = $kerbau_tidak_layak + $p->kerbau_tidak_layak;
        }
        $data['tanggal'] = $date->updated_at;
        $data['domba_layak'] = $domba_layak;
        $data['kambing_layak'] = $kambing_layak;
        $data['sapi_layak'] = $sapi_layak;
        $data['kerbau_layak'] = $kerbau_layak;
        $data['domba_tidak_layak'] = $domba_tidak_layak;
        $data['kambing_tidak_layak'] = $kambing_tidak_layak;
        $data['sapi_tidak_layak'] = $sapi_tidak_layak;
        $data['kerbau_tidak_layak'] = $kerbau_tidak_layak;
        $data['total_layak'] = $domba_layak + $kambing_layak + $sapi_layak + $kerbau_layak;
        $data['total_tidak_layak'] = $domba_tidak_layak + $kambing_tidak_layak + $sapi_tidak_layak + $kerbau_tidak_layak;
        array_push($data_kurban, $data);
        return $data_kurban;
    }
}
