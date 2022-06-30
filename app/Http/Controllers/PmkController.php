<?php

namespace App\Http\Controllers;

use App\Models\MasterKecamatan;
use App\Models\Peternak;
use App\Models\MasterKelurahan;
use App\Models\Pmk;
use Illuminate\Http\Request;
use \stdClass;

class PmkController extends Controller
{
    //
    public function pmkIndex()
    {
        $datas = Pmk::orderBy('id', 'desc')->get();

        return view('admin/data-pmk/index', compact(['datas']));
    }
    public function pmkCreate($id)
    {
        $datas = Peternak::where('id', $id)->get();

        return view('admin/data-pmk/create', compact('datas'));
    }
    public function pmkPost(Request $request, $id)
    {
        $peternak = Peternak::where('id', $id)->first();

        $data = new Pmk;
        $data->id_peternak = $peternak->id;
        $data->tanggal_pemeriksaan = $request->input('tanggal_pemeriksaan');
        $data->terduga_kambing = $request->input('terduga_kambing');
        $data->tertular_kambing = $request->input('tertular_kambing');
        $data->terduga_kerbau = $request->input('terduga_kerbau');
        $data->tertular_kerbau = $request->input('tertular_kerbau');
        $data->terduga_sapi_perah = $request->input('terduga_sapi_perah');
        $data->tertular_sapi_perah = $request->input('tertular_sapi_perah');
        $data->terduga_sapi_potong = $request->input('terduga_sapi_potong');
        $data->tertular_sapi_potong = $request->input('tertular_sapi_potong');
        // dd($data);
        $data->save();
        // return back();
        return redirect('/data-pmk')->with('success', ' Data Berhasil Ditambahkan');

    }
    public function pmkDetail($id)
    {
        $datas = Pmk::where('id', $id)->get();

        return view('admin/data-pmk/detail', compact('datas'));
    }
    public function pmkEdit($id)
    {
        $kecamatan = MasterKecamatan::get();
        $kelurahan = MasterKelurahan::get();
        $datas = Pmk::where('id', $id)->get();

        return view('admin/data-pmk/edit', compact(['kecamatan','kelurahan','datas']));
    }
    public function pmkUpdate(Request $request, $id){
        
        $data = Pmk::where('id', $id)->first();
        $data->tanggal_pemeriksaan = $request->input('tanggal_pemeriksaan');
        $data->terduga_kambing = $request->input('terduga_kambing');
        $data->tertular_kambing = $request->input('tertular_kambing');
        $data->terduga_kerbau = $request->input('terduga_kerbau');
        $data->tertular_kerbau = $request->input('tertular_kerbau');
        $data->terduga_sapi_perah = $request->input('terduga_sapi_perah');
        $data->tertular_sapi_perah = $request->input('tertular_sapi_perah');
        $data->terduga_sapi_potong = $request->input('terduga_sapi_potong');
        $data->tertular_sapi_potong = $request->input('tertular_sapi_potong');
        $data->save();

        return back()->with('success', ' Data Berhasil Diupdate');

    }

    public function pmkPostLab(Request $request, $id)
    {
        $data = Pmk::where('id', $id)->first();
        $data->tanggal_pengujian_lab = $request->input('tanggal_pengujian_lab');
        $data->hasil_pengujian_lab = $request->input('hasil_pengujian_lab');
        $data->keterangan = $request->input('keterangan');

        $data->save();
        // return back();
        return redirect('/data-pmk')->with('success', ' Data Berhasil Ditambahkan');

    }

    public function hasilLabIndex()
    {
        $datas = Pmk::orderBy('id', 'desc')->get();

        return view('admin/data-pmk/hasil-lab/index', compact(['datas']));
    }

}
