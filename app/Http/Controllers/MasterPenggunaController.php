<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MasterPenggunaController extends Controller
{
    //
    public function masterPenggunaIndex()
    {
        $datas = User::orderBy('id', 'desc')->get();

        return view('admin/pengguna/index', compact(['datas']));
    }
    public function masterPenggunaPost(Request $request)
    {
        $data = new User;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->role = $request->input('role');
        $data->password = $request->input('password');
        $data->save();
        return back();
    }
}
