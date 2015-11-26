<?php

namespace App\Http\Controllers;

use App\Desa;
use App\Kabupaten;
use App\Kecamatan;
use App\Provinsi;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class Indonesia extends Controller
{
    public function getProvinsi(Request $request){
        /*dd($request->id);*/

        return response()->json(Provinsi::all());
        /*return '

        ';*/
    }
    public function getKabupaten(Request $request){
        $data = Kabupaten::where('id_prov', $request->id)->get();
        return response()->json($data);
    }
    public function getKecamatan(Request $request){
        $data = Kecamatan::where('id_kabupaten', $request->id)->get();
        return response()->json($data);
    }
    public function getDesa(Request $request){
        $data = Desa::where('id_kecamatan', $request->id)->get();
        return response()->json($data);
    }
}