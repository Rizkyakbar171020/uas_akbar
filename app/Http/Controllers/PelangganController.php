<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pelanggan::all();
        return view('pelanggan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pel' => 'string',
            'hp_pel' => 'numeric',
            'alamat_pel' => 'string',
        ]);

        Pelanggan::create($validatedData);
        return redirect('/pelanggan');
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
        $data = Pelanggan::find($id);
        return view('pelanggan.edit', compact('data'));
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
        $validatedData = $request->validate([
            'nama_pel' => 'string',
            'hp_pel' => 'numeric',
            'alamat_pel' => 'string',
        ]);

        $pelanggan = Pelanggan::find($id);
        $pelanggan->nama_pel = $request->input('nama_pel');
        $pelanggan->hp_pel = $request->input('hp_pel');
        $pelanggan->alamat_pel = $request->input('alamat_pel');
        $pelanggan->update($validatedData);

        return redirect('/pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return redirect('/pelanggan');
    }
}
