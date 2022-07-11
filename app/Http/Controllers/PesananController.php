<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use App\Models\Pesanan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pesanan')
            ->join('ikan', 'ikan.id_ikan', '=', 'pesanan.id_ikan')
            ->join('pelanggan', 'pelanggan.id_pel', '=', 'pesanan.id_pel')
            ->orderBy('id_pesanan', 'ASC')
            ->get();
        return view('pesanan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ikans = Ikan::all();
        $pelanggans = Pelanggan::all();
        return view('pesanan.create', compact('ikans', 'pelanggans'));
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
            'id_pel' => 'string',
            'id_ikan' => 'string',
            'banyak_ikan' => 'numeric',
        ]);

        Pesanan::create($validatedData);
        return redirect('/pesanan');
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
        $pesanan = Pesanan::find($id);
        $pesanan->status_pesanan = 2;
        $pesanan->update();

        return redirect('/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->delete();

        return redirect('/pesanan');
    }
}
