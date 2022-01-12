<?php

namespace App\Http\Controllers\API;

use App\Models\Mesin;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class MesinController extends Controller
{
    // get all data
    public function all(Request $request)
    {
        $id = $request->input('id');
        $nama_mesin = $request->input('nama_mesin');
        $type_mesin = $request->input('type_mesin ');

        // jika user ada memasukkan id
        if ($id) {
            $mesins = Mesin::find($id);
            if ($mesins) {
                return ResponseFormatter::success(
                    $mesins,
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

        // jika tidak maka 
        $mesins = Mesin::all();
        return ResponseFormatter::success(
            $mesins,
            'Data list produk berhasil diambil'
        );
    }

    // get by id 

    // public function 
}
