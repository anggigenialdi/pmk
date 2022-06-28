<?php

namespace App\Http\Controllers;

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
}
