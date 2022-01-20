<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mesin;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
        // return view('machines.index')->with('machines',$machines);
        return view('machines.index', compact('machines'));
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
        return view('machines.index',compact('machines'))->with('success', ' Mesin baru berhasil ditambah.');        
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
        $machines = Mesin::find($id);
        return view('machines.edit' ) 
            ->with('machines', $machines);
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
        $machines = Mesin::find($id);
            $machines->nama_mesin      = Mesin::get('nama_mesin');
            $machines->type_mesin      = Mesin::get('type_mesin');
            $machines->save();

            // redirect
            // Session::flash('message', 'Successfully updated shark!');
            return view('machines.edit');
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

        // redirect
        return view('machines.index' compact('machines'));
    }
}
