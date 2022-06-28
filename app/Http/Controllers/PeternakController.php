<?php

namespace App\Http\Controllers;

use App\Models\MasterKecamatan;
use App\Models\Peternak;
use Illuminate\Http\Request;

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
        $ternak->terduga_kambing = $request->input('terduga_kambing');
        $ternak->tertular_kambing = $request->input('tertular_kambing');
        $ternak->terduga_kerbau = $request->input('terduga_kerbau');
        $ternak->tertular_kerbau = $request->input('tertular_kerbau');
        $ternak->terduga_sapi_perah = $request->input('terduga_sapi_perah');
        $ternak->tertular_sapi_perah = $request->input('tertular_sapi_perah');
        $ternak->terduga_sapi_potong = $request->input('terduga_sapi_potong');
        $ternak->tertular_sapi_potong = $request->input('tertular_sapi_potong');
        $ternak->total_terduga = $request->input('total_terduga');
        $ternak->total_tertular = $request->input('total_tertular');
        $ternak->save();
        return back();
    }
}
