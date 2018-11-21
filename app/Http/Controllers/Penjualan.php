<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPenjualan;

class Penjualan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelPenjualan::all();
		return view('penjualan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemasukan_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelPenjualan();
        $data->tgl_transaksi = $request->tgl_transaksi;
        $data->nominal = $request->nominal;
        $data->transaksi = $request->transaksi;
        $data->keperluan = $request->keperluan;
        $data->save();
            return redirect()->route('penjualan.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelPenjualan::where('id',$id)->get();
		return view('pemasukan_edit',compact('data'));
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
        $data = ModelPenjualan::where('id',$id)->first();
        $data->tgl_transaksi = $request->tgl_transaksi;
        $data->nominal = $request->nominal;
        $data->transaksi = $request->transaksi;
        $data->keperluan = $request->keperluan;
		$data->save();
		    return redirect()->route('penjualan.index')->with('alert-success','Data Berhasil diubah');
    }

    /**
     * Remove the spe   cified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelPenjualan::where('id',$id)->first();
		$data->delete();
		return redirect()->route('penjualan.index')->with('alert-success','Data berhasil dihapus!');
    }
}
