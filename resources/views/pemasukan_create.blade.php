@extends('index')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
        <section class="content-header">
            <h1>
                Data Transaksi
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Transaksi</li>
             </ol>
        </section>
        <hr>
        <div class ="box">
                <div class ="box-header">
                    <h1 class="box-title">Tambah Transaksi</h1>
                    <hr>
                </div>

            <div class = "box-body">
            <form action="{{ route('penjualan.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="tgl_transaksi">Tanggal Transaksi:</label>
                    <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi">
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal:</label>
                    <input type="number" class="form-control" id="nominal" name="nominal">
                </div>
				<div class="form-group">
                    <label for="transaksi">Transaksi:</label>
                    <select name="transaksi">
                        <option value="pemasukan">Pemasukan</option>
                        <option value="pengeluaran">Pengeluaran</option>
                    </select>
                </div>
				  <div class="form-group">
                    <label for="keperluan">Keterangan:</label>
                    <input type="text" class="form-control" id="keperluan" name="keperluan">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
