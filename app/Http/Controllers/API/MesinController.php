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
        $limit = $request->input('limit', 6);
        $nama_mesin = $request->input('nama_mesin');
        $type_mesin = $request->input('type_mesin ');
        $parameters = $request->input('parameters');

        // jika user ada memasukkan id
        if ($id) {
            $mesin = Mesin::with(['parameters'])->find($id);
            if ($mesin)
                return ResponseFormatter::success(
                    $mesin,
                    'Data mesin berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data mesin tidak berhasil diambil',
                    404
                );
        }

        $mesin = Mesin::with(['parameters']);

        if ($parameters)
            $mesin->where('id_parameters', $parameters);


        // jika tidak maka 
        // $mesin = Mesin::all();
        return ResponseFormatter::success(
            $mesin->paginate($limit),
            'Data list mesin berhasil diambil'
        );
    }

    // get by id 

    // public function 
}
