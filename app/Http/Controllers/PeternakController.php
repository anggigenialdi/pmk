<?php

namespace App\Http\Controllers;

use App\Models\Peternak;
use App\Models\MasterKecamatan;
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
        return view('admin/peternak/create');
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
        $ternak->terduga_kambing = $request->input('domba_terduga');
        $ternak->tertular_kambing = $request->input('domba_tertular');
        $ternak->terduga_kerbau = $request->input('kerbau_terduga');
        $ternak->tertular_kerbau = $request->input('kerbau_tertular');
        $ternak->terduga_sapi_perah = $request->input('sapi_perah_terduga');
        $ternak->tertular_sapi_perah = $request->input('sapi_perah_tertular');
        $ternak->terduga_sapi_potong = $request->input('sapi_potong_terduga');
        $ternak->tertular_sapi_potong = $request->input('sapi_potong_tertular');
        $ternak->save();
        return back();
    }

    public function index(){
        $kec = MasterKecamatan::get();
        $data = [];
        $data_kec =[];
        foreach ($kec as $k) {
            $data['terduga_kambing'] = Peternak::where('kode_kecamatan',$k->id)->sum('terduga_kambing');
            $data['tertular_kambing'] = Peternak::where('kode_kecamatan',$k->id)->sum('tertular_kambing');
            $data['terduga_kerbau'] = Peternak::where('kode_kecamatan',$k->id)->sum('terduga_kerbau');
            $data['tertular_kerbau'] = Peternak::where('kode_kecamatan',$k->id)->sum('tertular_kerbau');
            $data['terduga_sapi_perah'] = Peternak::where('kode_kecamatan',$k->id)->sum('terduga_sapi_perah');
            $data['tertular_sapi_perah'] = Peternak::where('kode_kecamatan',$k->id)->sum('tertular_sapi_perah');
            $data['terduga_sapi_potong'] = Peternak::where('kode_kecamatan',$k->id)->sum('terduga_sapi_potong');
            $data['tertular_sapi_potong'] = Peternak::where('kode_kecamatan',$k->id)->sum('tertular_sapi_potong');
            $data['total_kasus'] = $data['tertular_kambing'] + $data['tertular_kerbau'] + $data['tertular_sapi_perah'] + $data['tertular_sapi_potong'];
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
            $data['ternak'] = $this->getDataTernak($id,$k->id);
            array_push($data_kel,$data);
        }
        return $data_kel;
    }
    private function getDataTernak($idKec,$idKel){
        $data =  [];
        $data['terduga_kambing'] = Peternak::where('kode_kecamatan',$idKec)->where('kode_kelurahan',$idKel)->sum('terduga_kambing');
        $data['tertular_kambing'] = Peternak::where('kode_kecamatan',$idKec)->where('kode_kelurahan',$idKel)->sum('tertular_kambing');
        $data['terduga_kerbau'] = Peternak::where('kode_kecamatan',$idKec)->where('kode_kelurahan',$idKel)->sum('terduga_kerbau');
        $data['tertular_kerbau'] = Peternak::where('kode_kecamatan',$idKec)->where('kode_kelurahan',$idKel)->sum('tertular_kerbau');
        $data['terduga_sapi_perah'] = Peternak::where('kode_kecamatan',$idKec)->where('kode_kelurahan',$idKel)->sum('terduga_sapi_perah');
        $data['tertular_sapi_perah'] = Peternak::where('kode_kecamatan',$idKec)->where('kode_kelurahan',$idKel)->sum('tertular_sapi_perah');
        $data['terduga_sapi_potong'] = Peternak::where('kode_kecamatan',$idKec)->where('kode_kelurahan',$idKel)->sum('terduga_sapi_potong');
        $data['tertular_sapi_potong'] = Peternak::where('kode_kecamatan',$idKec)->where('kode_kelurahan',$idKel)->sum('tertular_sapi_potong');
        $data['total_kasus'] = $data['tertular_kambing'] + $data['tertular_kerbau'] + $data['tertular_sapi_perah'] + $data['tertular_sapi_potong'];
        
        // $data = [];
        // $data_kel =[];
        // foreach ($kel as $k) {
        //     $data['tertular_kambing'] = $k->tertular_kambing;
        //     array_push($data_kel,$data);
        // }
        return $data;
    }
    public function getDataPerKecamatan($id){
        $data = [];
        $data['nama_kecamatan'] = MasterKecamatan::where('id',$id)->first();
        $data['data_ternak'] = $this->getKelurahan($id);
        return $data;
    }
}
