<?php

namespace App\Http\Controllers;

use App\Models\MasterKecamatan;
use App\Models\Peternak;
use App\Models\Pmk;
use App\Models\MasterKelurahan;
use Illuminate\Http\Request;
use \stdClass;

class PeternakController extends Controller
{
    //
    public function peternakIndex()
    {
        $datas = Peternak::orderBy('id', 'desc')->get();

        return view('admin/peternak/index', compact(['datas']));
    }
    public function peternakCreate()
    {
        $kecamatan = MasterKecamatan::get();

        return view('admin/peternak/create', compact('kecamatan'));
    }
    public function peternakPost(Request $request)
    {
        $ternak = new Peternak;
        $ternak->nik = $request->input('nik');
        $ternak->nama = $request->input('nama');
        $ternak->kode_kecamatan = $request->input('kecamatan');
        $ternak->kode_kelurahan = $request->input('kelurahan');
        $ternak->rw = $request->input('rw');
        $ternak->rt = $request->input('rt');
        $ternak->alamat = $request->input('alamat');
        $ternak->jumlah_kambing = $request->input('jumlah_kambing');
        $ternak->jumlah_kerbau = $request->input('jumlah_kerbau');
        $ternak->jumlah_sapi_potong = $request->input('jumlah_sapi_potong');
        $ternak->jumlah_sapi_perah = $request->input('jumlah_sapi_perah');
        $ternak->save();
        return back()->with('success', ' Data Berhasil Ditambahkan');
    }

    public function index(){
        
        $kec = MasterKecamatan::get();
        $latest  = MasterKecamatan::latest()->first();
        
        $data = [];
        $data_kec =[];
        foreach ($kec as $k) {
            $data['data_ternak'] = $this->getDataTernakKecamatan($k->id);
            $data['id'] = $k->id;
            $data['nama_kecamatan'] = $k->nama;
            $data['latitude'] = $k->latitude;
            $data['longitude'] = $k->longitude;
            $data['kelurahan'] = $this->getKelurahan($k->id);
            array_push($data_kec,$data);
        }
        return $data_kec;
    }
    private function getKelurahan($id){
        $kel = MasterKelurahan::where('id_kecamatan',$id)->get();

        $data =  [];
        $data_kel =[];
        foreach ($kel as $k) {
            $data['nama_kelurahan'] = $k->nama;
            $data['ternak'] = $this->getDataTernakKelurahan($id,$k->id);
            array_push($data_kel,$data);
        }
        return $data_kel;
    }
    private function getDataTernakKecamatan($idKec){
        $peternak = Peternak::where('kode_kecamatan',$idKec)->first();
        $pmk = Pmk::where('id_peternak',$peternak ? $peternak->id : null)->get();
        
        $data =  [];
        $data_pmk =[];
        $terduga_kambing = 0;
        $tertular_kambing = 0;
        $terduga_kerbau = 0;
        $tertular_kerbau = 0;
        $terduga_sapi_perah = 0;
        $tertular_sapi_perah = 0;
        $terduga_sapi_potong = 0;
        $tertular_sapi_potong = 0;
        $mati = 0;
        $potong_bersyarat = 0;
        $sembuh = 0;

        foreach ($pmk as $p) {
            $terduga_kambing = $terduga_kambing + $p->terduga_kambing;
            $tertular_kambing = $tertular_kambing + $p->tertular_kambing;
            $terduga_kerbau = $terduga_kerbau + $p->terduga_kerbau;
            $tertular_kerbau = $tertular_kerbau + $p->tertular_kerbau;
            $terduga_sapi_perah = $terduga_sapi_perah + $p->terduga_sapi_perah;
            $tertular_sapi_perah = $tertular_sapi_perah + $p->tertular_sapi_perah;
            $terduga_sapi_potong = $terduga_sapi_potong + $p->terduga_sapi_potong;
            $tertular_sapi_potong = $tertular_sapi_potong + $p->tertular_sapi_potong;
            $mati = $mati + $p->mati;
            $potong_bersyarat = $potong_bersyarat + $p->potong_bersyarat;
            $sembuh = $sembuh + $p->sembuh;
        }
        $data['terduga_kambing'] = $terduga_kambing;
        $data['tertular_kambing'] = $tertular_kambing;
        $data['terduga_kerbau'] = $terduga_kerbau;
        $data['tertular_kerbau'] = $tertular_kerbau;
        $data['terduga_sapi_perah'] = $terduga_sapi_perah;
        $data['tertular_sapi_perah'] = $tertular_sapi_perah;
        $data['terduga_sapi_potong'] = $terduga_sapi_potong;
        $data['tertular_sapi_potong'] = $tertular_sapi_potong;
        $data['total_kasus'] = $tertular_sapi_potong + $tertular_sapi_perah + $tertular_kambing + $tertular_kerbau;
        $data['mati'] = $mati;
        $data['potong_bersyarat'] = $potong_bersyarat;
        $data['sembuh'] = $sembuh;
        array_push($data_pmk,$data);
       return $data;
    }
    private function getDataTernakKelurahan($idKec,$idKel){
        $peternak = Peternak::where('kode_kecamatan',$idKec)->where('kode_kelurahan',$idKel)->first();
        $pmk = Pmk::where('id_peternak',$peternak ? $peternak->id : null)->get();
        
        $data =  [];
        $data_pmk =[];
        $terduga_kambing = 0;
        $tertular_kambing = 0;
        $terduga_kerbau = 0;
        $tertular_kerbau = 0;
        $terduga_sapi_perah = 0;
        $tertular_sapi_perah = 0;
        $terduga_sapi_potong = 0;
        $tertular_sapi_potong = 0;
        $mati = 0;
        $potong_bersyarat = 0;
        $sembuh = 0;

        foreach ($pmk as $p) {
            $terduga_kambing = $terduga_kambing + $p->terduga_kambing;
            $tertular_kambing = $tertular_kambing + $p->tertular_kambing;
            $terduga_kerbau = $terduga_kerbau + $p->terduga_kerbau;
            $tertular_kerbau = $tertular_kerbau + $p->tertular_kerbau;
            $terduga_sapi_perah = $terduga_sapi_perah + $p->terduga_sapi_perah;
            $tertular_sapi_perah = $tertular_sapi_perah + $p->tertular_sapi_perah;
            $terduga_sapi_potong = $terduga_sapi_potong + $p->terduga_sapi_potong;
            $tertular_sapi_potong = $tertular_sapi_potong + $p->tertular_sapi_potong;
            $mati = $mati + $p->mati;
            $potong_bersyarat = $potong_bersyarat + $p->potong_bersyarat;
            $sembuh = $sembuh + $p->sembuh;
        }
        $data['terduga_kambing'] = $terduga_kambing;
        $data['tertular_kambing'] = $tertular_kambing;
        $data['terduga_kerbau'] = $terduga_kerbau;
        $data['tertular_kerbau'] = $tertular_kerbau;
        $data['terduga_sapi_perah'] = $terduga_sapi_perah;
        $data['tertular_sapi_perah'] = $tertular_sapi_perah;
        $data['terduga_sapi_potong'] = $terduga_sapi_potong;
        $data['tertular_sapi_potong'] = $tertular_sapi_potong;
        $data['total_kasus'] = $tertular_sapi_potong + $tertular_sapi_perah + $tertular_kambing + $tertular_kerbau;
        $data['mati'] = $mati;
        $data['potong_bersyarat'] = $potong_bersyarat;
        $data['sembuh'] = $sembuh;
        array_push($data_pmk,$data);
        return $data_pmk;
        // dd($pmk);
    }
    public function getDataPerKecamatan($id){
        $data = [];
        $data['nama_kecamatan'] = MasterKecamatan::where('id',$id)->first();
        $data['data_pmk'] = $this->getDataTernakKecamatan($id);
        $data['data_pmk_perkelurahan'] = $this->getKelurahan($id);
        return $data;
    }

    public function peternakDetail($id)
    {
        $datas = Peternak::where('id', $id)->get();

        return view('admin/peternak/detail', compact('datas'));
    }
    public function peternakEdit($id)
    {
        $kecamatan = MasterKecamatan::get();
        $kelurahan = MasterKelurahan::get();
        $datas = Peternak::where('id', $id)->get();

        return view('admin/peternak/edit', compact(['kecamatan', 'datas', 'kelurahan'] ));
    }
    public function peternakUpdate(Request $request, $id){
        
        $datas = Peternak::where('id', $id)->first();
        $datas->nik = $request->input('nik');
        $datas->nama = $request->input('nama');
        $datas->kode_kecamatan = $request->input('kecamatan');
        $datas->kode_kelurahan = $request->input('kelurahan');
        $datas->rw = $request->input('rw');
        $datas->rt = $request->input('rt');
        $datas->alamat = $request->input('alamat');
        $datas->jumlah_kambing = $request->input('jumlah_kambing');
        $datas->jumlah_kerbau = $request->input('jumlah_kerbau');
        $datas->jumlah_sapi_potong = $request->input('jumlah_sapi_potong');
        $datas->jumlah_sapi_perah = $request->input('jumlah_sapi_perah');
        $datas->save();
        return back()->with('success', ' Data Berhasil Diupdate');

    }
    public function jumlahKasusKumulatif(){
        $_pmk = Pmk::all();
        $date = Pmk::orderBy('updated_at', 'desc')->first();
        $tertular = 0;
        $sembuh = 0;
        $mati = 0;
        $potong_bersyarat = 0;
        $data = [];
        $data_pmk = [];
        foreach ($_pmk as $p) {
            $tertular += $p->tertular_kambing + $p->tertular_sapi_perah + $p->tertular_kerbau + $p->tertular_sapi_potong;
            $sembuh +=$p->sembuh;
            $mati +=$p->mati;
            $potong_bersyarat +=$p->potong_bersyarat;
        }
        $data['tanggal'] = $date->updated_at;
        $data['tertular'] = $tertular;
        $data['sembuh'] = $sembuh;
        $data['mati'] = $mati;
        $data['potong_bersyarat'] = $potong_bersyarat;

        return $data;
    }

    public function dataIndex(){
        
        return view('public/data');

    }

}
