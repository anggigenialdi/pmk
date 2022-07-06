<?php

namespace App\Http\Controllers;

use App\Models\Kurban;
use App\Models\MasterKecamatan;
use Illuminate\Http\Request;

class MasterKurbanController extends Controller
{
    public function __construct()
    {
        $this->middleware(
            'auth',
            [
                'except' => [

                ]
            ]
        );
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
}
