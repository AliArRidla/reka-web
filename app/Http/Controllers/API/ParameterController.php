<?php

namespace App\Http\Controllers\API;

use App\Models\Parameter;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Mesin;

class ParameterController extends Controller
{
  

    // get all data
    public function all(Request $request)
    {
        $id = $request->input('id');
        $nama_parameter = $request->input('nama_parameter');
        $id_mesin = $request->input('id_mesin ');

        // jika user ada memasukkan id
        if ($id) {
            // $parameters = Parameter::find($id);
            $parameters = Mesin::with(['parameters'])->find($id);
            if ($parameters) {
                return ResponseFormatter::success(
                    $parameters,
                    'Data parameters berhasil diambil'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Parameters tidak berhasil diambil',
                    404
                );
            }
        }

        // jika tidak maka 
        $parameters = Parameter::all();
        return ResponseFormatter::success(
            $parameters,
            'Data list parameters berhasil diambil'
        );
    }

    // get by id 

    // public function 
}
