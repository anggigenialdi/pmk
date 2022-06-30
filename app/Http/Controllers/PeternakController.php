<?php

namespace App\Http\Controllers;

use App\Models\MasterKecamatan;
use App\Models\Peternak;
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
        $data = [];
        $data_kec =[];
        foreach ($kec as $k) {
            $data['terduga_kambing'] = 0;
            $data['tertular_kambing'] = 0;
            $data['terduga_kerbau'] = 0;
            $data['tertular_kerbau'] = 0;
            $data['terduga_sapi_perah'] = 0;
            $data['tertular_sapi_perah'] = 0;
            $data['terduga_sapi_potong'] = 0;
            $data['tertular_sapi_potong'] = 0;
            $data['total_kasus'] = 0;
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
        $data['terduga_kambing'] = 0;
        $data['tertular_kambing'] = 0;
        $data['terduga_kerbau'] = 0;
        $data['tertular_kerbau'] = 0;
        $data['terduga_sapi_perah'] = 0;
        $data['tertular_sapi_perah'] = 0;
        $data['terduga_sapi_potong'] = 0;
        $data['tertular_sapi_potong'] = 0;
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
}
