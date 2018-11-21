<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPembeli;

class Pembeli extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelPembeli::all();
		return view('pembeli',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelPembeli();
        $data->nama_pembeli = $request->nama_pembeli;
        $data->alamat = $request->alamat;
        $data->jumlah_barang = $request->jumlah_barang;
        $data->warna = $request->warna;
        $data->bahan = $request->bahan;
        $data->harga = $request->harga;
        $data->total = $data->jumlah_barang*$data->harga;
        $data->save();
            return redirect()->route('pembeli.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelPembeli::where('id',$id)->get();
		return view('pembeli_edit',compact('data'));
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
        $data = ModelPembeli::where('id',$id)->first();
        $data->nama_pembeli = $request->nama_pembeli;
        $data->alamat = $request->alamat;
        $data->jumlah_barang = $request->jumlah_barang;
        $data->warna = $request->warna;
        $data->bahan = $request->bahan;
        $data->harga = $request->harga;
		$data->save();
		    return redirect()->route('pembeli.index')->with(
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
        $data = ModelPembeli::where('id',$id)->first();
		$data->delete();
		return redirect()->route('pembeli.index')->with('alert-success','Data berhasil dihapus!');
    }
}
