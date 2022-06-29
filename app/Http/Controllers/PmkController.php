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
        $kecamatan = MasterKecamatan::get();
        $datas = Peternak::where('id', $id)->get();

        return view('admin/data-pmk/create', compact(['kecamatan', 'datas']));
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
        return redirect('/data-pmk');

    }
}
