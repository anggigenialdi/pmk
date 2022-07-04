<?php

namespace App\Http\Controllers;

use App\Models\MasterKecamatan;
use App\Models\Peternak;
use App\Models\MasterKelurahan;
use App\Models\Pmk;
use Illuminate\Http\Request;
use \stdClass;
// use File;

use Illuminate\Support\Facades\File;

class PmkController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware(
    //         'auth',
    //         [
    //             'except' => [
    //                 'getJson', 
    //             ]
    //         ]
    //     );
    // }

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
        // var_dump($peternak->jumlah_kambing);

        // 'terduga' => 'required|min:16|max:'+$request->id+'',
       

        request()->validate(
            [
                'tanggal_pemeriksaan' => 'required',

                'terduga_kambing' => 'required|integer|min:0|max:'.$peternak->jumlah_kambing,
                'terduga_kerbau' => 'required|integer|min:0|max:'.$peternak->jumlah_kerbau,
                'terduga_sapi_potong' => 'required|integer|min:0|max:'.$peternak->jumlah_sapi_potong,
                'terduga_sapi_perah' => 'required|integer|min:0|max:'.$peternak->jumlah_sapi_perah,

                'tertular_kambing' => 'required|integer|min:0|max:'.$peternak->jumlah_kambing,
                'tertular_kerbau' => 'required|integer|min:0|max:'.$peternak->jumlah_kerbau,
                'tertular_sapi_potong' => 'required|integer|min:0|max:'.$peternak->jumlah_sapi_potong,
                'tertular_sapi_perah' => 'required|integer|min:0|max:'.$peternak->jumlah_sapi_perah,
            ],
            [
                'tanggal_pemeriksaan.required' => 'Input tidak boleh kosong',

                'terduga_kambing.required' => 'Input tidak boleh kosong',
                'terduga_kerbau.required' => 'Input tidak boleh kosong',
                'terduga_sapi_potong.required' => 'Input tidak boleh kosong',
                'terduga_sapi_perah.required' => 'Input tidak boleh kosong',
                'terduga_kambing.max' => 'Input melebih populasi ternak',
                'terduga_kerbau.max' => 'Input melebih populasi ternak',
                'terduga_sapi_potong.max' => 'Input melebih populasi ternak',
                'terduga_sapi_perah.max' => 'Input melebih populasi ternak',

                'tertular_kambing.required' => 'Input tidak boleh kosong',
                'tertular_kerbau.required' => 'Input tidak boleh kosong',
                'tertular_sapi_potong.required' => 'Input tidak boleh kosong',
                'tertular_sapi_perah.required' => 'Input tidak boleh kosong',
                'tertular_kambing.max' => 'Input melebih populasi ternak',
                'tertular_kerbau.max' => 'Input melebih populasi ternak',
                'tertular_sapi_potong.max' => 'Input melebih populasi ternak',
                'tertular_sapi_perah.max' => 'Input melebih populasi ternak',

            ]
        );

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

        return view('admin/data-pmk/edit', compact(['kecamatan', 'kelurahan', 'datas']));
    }
    public function pmkUpdate(Request $request, $id)
    {

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
        $data->status_kasus = 1;

        $data->save();
        // return back();
        return redirect('/data-pmk/hasil-lab')->with('success', ' Data Berhasil Ditambahkan');
    }

    public function hasilLabIndex()
    {
        $datas = Pmk::orderBy('id', 'desc')->get();

        return view('admin/data-pmk/hasil-lab/index', compact(['datas']));
    }
    public function getJson()
    {
        $json = json_decode(File::get('./geojson.json')); // not working
        return $json;
    }

    public function perkembanganIndex()
    {
        $datas = Pmk::orderBy('id', 'desc')->get();

        return view('admin/data-pmk/perkembangan-kasus/index', compact(['datas']));
    }

    public function perkembanganPost(Request $request, $id)
    {
        $data = Pmk::where('id', $id)->first();
        $data->mati = $request->input('mati');
        $data->potong_bersyarat = $request->input('potong_bersyarat');
        $data->sembuh = $request->input('sembuh');
        $data->status_kasus = 2;

        $data->save();
        // return back();
        return redirect('/data-pmk/perkembangan-kasus')->with('success', ' Data Berhasil Ditambahkan');
    }
}
