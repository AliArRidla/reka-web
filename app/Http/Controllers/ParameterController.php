<?php

namespace App\Http\Controllers;

use App\Models\Mesin;
use App\Models\Parameter;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parameters = Parameter::all();
        return view('parameters.index', compact('parameters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mesins = Mesin::all();
        return view('parameters.create', compact('mesins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_parameter' => 'required',
            'id_mesin' => 'required',
        ]);

        // return redirect()->index();
        $input = $request->all();
        $parameter = Parameter::create($input);
        $parameters = Parameter::all();
        // var_dump($parameter);
        return view('parameters.index', compact('parameters'))->with('success', ' Parameters baru berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $parameters = Parameter::findOrFail($id);

        return view('parameters.edit', compact('parameters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_parameter' => 'required',
            'id_mesin' => 'required',
        ]);

        $parameters = Parameter::find($id)->update($request->all());

        return back()->with('success', ' Data telah diperbaharui!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
<<<<<<< HEAD
        //
=======
>>>>>>> cec21ad6573f20ba978579761f2eb1ed93cdb32f
        $parameters = Parameter::find($id);

        $parameters->delete();

<<<<<<< HEAD
        return back()->with('success', ' Penghapusan berhasil.');
=======
        return back()->with('success', ' Data berhasil dihapus.');
>>>>>>> cec21ad6573f20ba978579761f2eb1ed93cdb32f
    }
}
