<?php

namespace App\Http\Controllers;

use App\Models\Kurban;
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
}
