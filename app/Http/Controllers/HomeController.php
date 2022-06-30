<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    public function getJson(){
        $json = json_decode(File::get('./geojson.json')); // not working
        return $json;
    }
}
