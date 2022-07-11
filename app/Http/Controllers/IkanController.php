<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IkanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ikan::all();
        return view('ikan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ikan.create');
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
            'jenis_ikan' => 'string',
            'harga_ikan' => 'numeric',
            'stok_ikan' => 'numeric',
            'ket_ikan' => 'string',
        ]);

        Ikan::create($validatedData);
        return redirect('/ikan');
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
        $data = Ikan::find($id);
        return view('ikan.edit', compact('data'));
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
            'jenis_ikan' => 'string',
            'harga_ikan' => 'numeric',
            'stok_ikan' => 'numeric',
            'ket_ikan' => 'string',
        ]);

        $ikan = Ikan::find($id);
        $ikan->jenis_ikan = $request->input('jenis_ikan');
        $ikan->harga_ikan = $request->input('harga_ikan');
        $ikan->stok_ikan = $request->input('stok_ikan');
        $ikan->ket_ikan = $request->input('ket_ikan');
        $ikan->update($validatedData);
        return redirect('/ikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ikan = Ikan::find($id);
        $ikan->delete();

        return redirect('/ikan');
    }
}
