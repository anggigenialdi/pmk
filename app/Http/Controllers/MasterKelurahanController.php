<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MasterKelurahan;

class MasterKelurahanController extends Controller
{
    public function index($id){
        $kec = MasterKelurahan::where('id_kecamatan',$id)->get();
        return $kec;
    }
}
