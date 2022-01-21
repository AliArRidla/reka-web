<?php

namespace App\Http\Controllers;

use App\Models\Mesin;
use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class MesinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machines = Mesin::all();

        return view('machines.index', ['machines' => $machines]);
        // var_dump($machines);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('machines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mesin' => 'required',
            'type_mesin' => 'required',
        ]);

        // return redirect()->index();
        $input = $request->all();
        $machine = Mesin::create($input);
        $machines = Mesin::all();
        return view('machines.index', compact('machines'))->with('success', ' Mesin baru berhasil ditambah.');
    }

    /**0
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
        $machines = Mesin::findOrFail($id);

        return view('machines.edit', compact('machines'));
        // return view('machines.create');/
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
            'nama_mesin' => 'required',
            'type_mesin' => 'required',
        ]);

        $machines = Mesin::find($id)->update($request->all());

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
        $machines = Mesin::find($id);

        $machines->delete();

        return back()->with('success', ' Penghapusan berhasil.');
    }
}
