<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterKecamatan;
class MasterKecamatanController extends Controller
{
    public function index(){
        $kec = MasterKecamatan::get();
        return $kec;
    }
}
