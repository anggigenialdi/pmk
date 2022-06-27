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
}
