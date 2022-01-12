<?php

namespace App\Http\Controllers\API;

use App\Models\Mesin;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class MesinController extends Controller
{
    //get all data
    public function all(Request $request)
    {
        $id = $request->input('id');
        $nama_mesin = $request->input('nama_mesin');
        $type_mesin = $request->input('type_mesin ');
        $id = $request->input('id');

        // kondisi nya
        if ($id) {
            $mesin = Mesin::find($id);
            if ($mesin) {
                return ResponseFormatter::success(
                    $mesin,
                    'Data mesin berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data mesin tidak berhasil diambil',
                    404
                );
            }
        }
    }
}
