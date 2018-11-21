<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelSuplier;

class Suplier extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelSuplier::all();
		return view('suplier',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelSuplier();
        $data->nama_suplier = $request->nama_suplier;
        $data->alamat = $request->alamat;
        $data->nohp = $request->nohp;
        $data->warna = $request->warna;
        $data->harga = $request->harga;
        $data->bahan = $request->bahan;
        $data->jumlah_barang = $request->jumlah_barang;
        // $data->total = $data->pemasukan - $data->pengeluaran;
        $data->save();
            return redirect()->route('suplier.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = modelSuplier::where('id',$id)->get();
		return view ('suppliers_edit',compact('data'));
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
        $data = ModelSuplier::where('id',$id)->first();
        $data->nama_suplier = $request->nama_suplier;
        $data->alamat = $request->alamat;
        $data->nohp = $request->nohp;
        $data->warna = $request->warna;
        $data->harga = $request->harga;
        $data->bahan = $request->bahan;
        $data->jumlah_barang = $request->jumlah_barang;
		$data->save();
		    return redirect()->route('suplier.index')->with(
		 'alert-success','Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelSuplier::where('id',$id)->first();
		$data->delete();
		return redirect()->route('suplier.index')->with('alert-success','Data berhasil dihapus!');
    }
}
